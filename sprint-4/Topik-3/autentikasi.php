<?php
class Auth
{
    private $host = 'localhost',
            $db_name = 'latihan_3',
            $user = 'safuh',
            $password = 'mahouka602',
            $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name;", $this->user, $this->password);
            // echo "Sukses konek ke database";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . $e->getLine();
        }
    }

    public function login($username, $password) 
    {
        try {
            $query = "SELECT * FROM user WHERE username = '$username'";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // echo "Sukses mengambil data!";
            // var_dump($result);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . $e->getLine();
        }
        if (!$result) { // <=== JIKA DATA USER TIDAK ADA
            return [
               "status" => "!akun"
            //    "msg"    => "Username anda salah !"
            ];
         } elseif ($password != $result['password']) {
            return [
                "status" => "!password"
                // "msg"    => "Password anda salah !"
             ];
         }
    
         return [ // <=== JIKA AUTENTIKASI SUKSES
               "status" => "sukses"
            //    "msg"    => "Login berhasil !"
         ];

    }
}

$call = new Auth();
// $call->login('safuh', '123');