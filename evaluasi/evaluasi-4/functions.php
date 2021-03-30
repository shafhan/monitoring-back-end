<?php 
class Data
{
    private $host = 'localhost',
            $db_name = 'evaluasi_4',
            $user = 'root',
            $pass = 'dbpass',
            $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name;", $this->user, $this->pass);
            // echo "koneksi sukse";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . $e->getLine();
        }
    }

    public function login ($username, $password) 
    {
        try {
            $query = "SELECT * FROM user WHERE username = '$username'";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // var_dump($username);
            // echo "Panggil login sukses";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . $e->getLine();
        }

        if (!$result) {
            echo "
                <script>
                    alert('Akun dengan username tersebut tidak ada!');
                </script>
            ";
        }elseif ($username != $result['username'] || $password != $result['password'] ) {
            echo "
                <script>
                    alert('Username atau password salah');
                </script>
            ";
        } else {
            $user = [
                'username' => $username,
                'password' => $password
            ];
            $_SESSION['user'] = $user;
        }
    }

    public function showAll($query)
    {
        try {
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . $e->getLine();
        }
    }

    public function tambah($data)
    {
        $nama = htmlspecialchars($data['nama']);
        $divisi = htmlspecialchars($data['divisi']);
        $asal = htmlspecialchars($data['asal']);
        $query = "INSERT INTO santri (nama, divisi, asal) VALUES ('$nama', '$divisi', '$asal')";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function edit($data)
    {
        $id = htmlspecialchars($data['id']);
        $nama = htmlspecialchars($data['nama']);
        $divisi = htmlspecialchars($data['divisi']);
        $asal = htmlspecialchars($data['asal']);
        $query = "UPDATE santri SET nama = '$nama', divisi = '$divisi', asal = '$asal' WHERE id = $id";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function hapus($id) 
    {
        $query = "DELETE FROM santri WHERE id = $id";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
}

$data = new Data();
// $data->login('haha', 'haha');
// $data->showAll();
?>