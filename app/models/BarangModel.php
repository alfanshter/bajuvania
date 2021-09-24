<?php

class BarangModel
{

    private $table = 'slider';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBestSeller()
    {
        $query = "SELECT * FROM tb_barang ORDER BY jumlah_barang DESC LIMIT 6";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getTerbaru()
    {
        $query = "SELECT * FROM tb_barang ORDER BY jumlah_barang DESC LIMIT 3";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getKaos()
    {
        $query = "SELECT * FROM tb_barang where kategori_barang = 'kaos' ORDER BY jumlah_barang DESC ";
        $this->db->query($query);
        return $this->db->resultSet();
    }


    public function getBaju()
    {
        $query = "SELECT * FROM tb_barang where kategori_barang = 'baju' ORDER BY jumlah_barang DESC ";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getCelana()
    {
        $query = "SELECT * FROM tb_barang where kategori_barang = 'celana' ORDER BY jumlah_barang DESC ";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}
