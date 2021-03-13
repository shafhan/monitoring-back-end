<?php

class Santri_model 
{
    private $table = 'santri',
            $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($username, $password) 
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username');
        $this->db->bind('username', $username);
        $result =  $this->db->single();

        if ($username == $result['username'] && $password == $result['password']) {
            $_SESSION['name'] = $username;
            header('Location: ' . BASEURL . '/santri');
        } else {
            echo "
                <script>
                    alert('Gagal login');
                </script>
            ";
        }
    }

    public function getAllSantri()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSantriById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataSantri($data) 
    {
        $query = "INSERT INTO santri (nama, kelas) VALUES (:nama, :kelas)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSantri($id)
    {
        $query = "DELETE FROM santri WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSantri($data) 
    {
        $query = "UPDATE santri SET nama = :nama, kelas = :kelas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataSantri()
    {
        $keyword = $_POST['keyword'];
        $query = 'SELECT * FROM santri WHERE nama LIKE :keyword';
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}

