<?php

class AllFunc
{
    private $host = 'localhost',
            $db_name = 'tugas_4',
            $user = 'safuh',
            $pass = 'mahouka602',
            $connect;

    public function __construct()
    {
        try {
            $this->connect = new PDO("mysql:host=$this->host;dbname=$this->db_name;", $this->user, $this->pass);
            // echo "Sukses";
        } catch (PDOException $e) {
            echo "Getting error: " . $e->getMessage() . " at " . $e->getLine(); 
        }
    }

    public function showAll($query)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    public function register($username, $password)
    {
        $pass = password_hash($password, PASSWORD_DEFAULT);

        $query = "SELECT * FROM user WHERE username = '$username'";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($username == $result['username']) 
        {
            echo "
                <script>
                    alert('Username tersebut sudah dipakai!');
                </script>
            ";
        } else 
        {
            $regist = "INSERT INTO user (username, password) VALUES ('$username', '$pass')";
            $stmt2 = $this->connect->prepare($regist);
            $stmt2->execute();

            return $stmt2->rowCount();
        }
    }
    
    public function login($username, $password) 
    {
        $query = "SELECT * FROM user WHERE username = '$username'";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $pass = password_verify($password, $result['password']);
        if (!$result) 
        {
            echo "
                <script>
                    alert('Akun dengan username tersebut tidak ada!');
                </script>
            ";
        } elseif ($password != $pass) {
            echo "
                <script>
                    alert('Kata sandi yang anda masukkan salah!');
                </script>
            ";
        } else 
        {
            $_SESSION['status'] = 'logged_in';
            $_SESSION['username'] = $username;
            header('Location: beranda.php');
        }
    }

    public function addData($post)
    {
        $id = $post['id'];
        $username = $post['username'];
        $judul = $post['judul'];
        $content = $post['content'];
        $kategori = $post['kategori'];
        $gambar = $this->upload();

        $query = "INSERT INTO content_page (gambar, judul, content, category, user_id) values ('$gambar', '$judul', '$content', '$kategori','$id')";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function upload()
    {
        $fileName = $_FILES['gambar']['name'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        $size = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];

        $fileNewName = uniqid() . $fileName;

        $extValid = ['jpg', 'png', 'jpeg'];
        $extGambar = explode('.', $fileName);
        $extGambar = strtolower(end($extGambar));
        if ($error === 0)
        {
            if (in_array($extGambar, $extValid))
            {
                if ($size < 2000000) 
                {
                    move_uploaded_file($tmpName, "images/" . $fileNewName);
                    return $fileNewName;
                }else
                {
                    echo "
                        <script>
                            alert('File harus kurang dari 2MB');
                        </script>
                    ";
                }
            }else
            {
                echo "
                    <script>
                        alert('Hanya upload file gambar!');
                    </script>
                ";
            }
        }else
        {
            echo "
                <script>
                    alert('Pilih file untuk diupload!');
                </script>
            ";
        }
    }

    public function update($post)
    {
        $id = $_GET['id'];
        $judul = $post['judul'];
        $content = $post['content'];
        $kategori = $post['kategori'];
        $gambarLama = $post['gambarLama'];
        if ($_FILES['gambar']['error'] === 4)
        {
            $gambar = $gambarLama;
        } else 
        {
            $gambar = $this->upload();
        }

        $query = "UPDATE content_page SET judul = '$judul', content = '$content', category = '$kategori', gambar = '$gambar' WHERE id = '$id'";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM content_page WHERE id = '$id'";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
}

$call = new AllFunc();


?>