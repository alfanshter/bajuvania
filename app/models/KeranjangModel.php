<?php

class KeranjangModel
{

    private $table = 'slider';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getKeranjang()
    {
        $query = "SELECT * FROM tb_keranjang WHERE  username = :username AND status = 'belum terbeli'";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);

        return $this->db->resultSet();
    }


    public function checkkeranjang($data)
    {
        $query = "SELECT * FROM tb_keranjang where username = :username AND nama_barang = :nama_barang AND status ='belum terbeli'";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        return $this->db->single();
    }

    public function updatejumlahkeranjang($data)
    {
        $query = "UPDATE tb_keranjang SET jumlah_barang = jumlah_barang + 1 WHERE nama_barang = :nama_barang AND username = :username AND status = 'belum terbeli'";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->execute();
    }


    public function checkjumlah($data)
    {
        $query = "SELECT * FROM tb_keranjang where username = :username AND slug_barang = :slug_barang AND status ='belum terbeli'";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('slug_barang', $data);
        return $this->db->single();
    }


    public function pluskeranjang($slug_barang)
    {
        $query = "UPDATE tb_keranjang SET jumlah_barang = jumlah_barang + 1 WHERE slug_barang = :slug_barang AND username = :username AND status = 'belum terbeli'";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('slug_barang', $slug_barang);
        $this->db->execute();
    }

    public function mineskeranjang($slug_barang)
    {
        $query = "UPDATE tb_keranjang SET jumlah_barang = jumlah_barang - 1 WHERE slug_barang = :slug_barang AND username = :username AND status = 'belum terbeli'";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('slug_barang', $slug_barang);
        $this->db->execute();
    }

    public function totalkeranjang()
    {
        $query = "SELECT SUM(jumlah_barang * harga_barang) AS hargatotal FROM tb_keranjang WHERE username = :username AND status='belum terbeli'";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        return $this->db->single();
    }



    public function tambahkeranjang($data)
    {

        $query = "INSERT INTO tb_keranjang (username,nama_barang,harga_barang,jumlah_barang,foto_barang,status,slug_barang)
        VALUES(:username,:nama_barang,:harga_barang,:jumlah_barang,:foto_barang,'belum terbeli',:slug_barang)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('harga_barang', $data['harga_barang']);
        $this->db->bind('jumlah_barang', $data['jumlah_barang']);
        $this->db->bind('foto_barang', $data['foto_barang']);
        $this->db->bind('slug_barang', $data['slug_barang']);
        $this->db->execute();
    }

    public function hapusbarang($slug_barang)
    {
        $query = " DELETE FROM tb_keranjang WHERE slug_barang = :slug_barang AND username = :username";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('slug_barang', $slug_barang);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
