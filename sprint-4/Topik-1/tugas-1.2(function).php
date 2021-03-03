<?php

class Data
{
    private $konek;

    public function __construct()
    {
        try {
            $this->konek = new PDO("mysql:host=localhost;dbname=data_budi", "safuh", "mahouka602");
            // echo "Koneksi sukses";                                                                                                                               
        } catch (PDOException $e) {
            echo "Getting error : " . $e->getMessage() . $e->getLine();
        }
    }

    public function showAll($query) 
    {
        try {
            $hasil = $this->konek->prepare($query);
            $hasil->execute();
            while ($row = $hasil->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        } catch (PDOException $e) {
            echo "Getting error : " . $e->getMessage() . $e->getLine();
        }
    }

    public function add($insert)
    {
        try {
            $query = "INSERT INTO data_barang (nama_barang) VALUES ('$insert')";
            $hasil = $this->konek->prepare($query);
            $hasil->execute();
            // echo "Sukses";
        } catch (PDOException $e) {
            echo "Getting error : " . $e->getMessage() . $e->getLine();
        }
    }

    public function delete($id) 
    {
        $query = "DELETE FROM data_barang WHERE id = $id";
        $hasil= $this->konek->prepare($query);
        $hasil->execute();
    }

    public function edit($post) 
    {
        $id = $post['id'];
        $nama_barang = $post['nama_barang'];
        $query = "UPDATE data_barang SET nama_barang = '$nama_barang' WHERE id = $id";
        $hasil = $this->konek->prepare($query);
        $hasil->execute();
    }
}

$call = new Data();