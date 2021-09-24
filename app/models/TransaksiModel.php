<?php

class TransaksiModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function updateidorder($idorder)
    {
        $query = "UPDATE tb_keranjang SET id_order = :id_order, status = 'terbeli' WHERE username = :username AND status = 'belum terbeli'";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('id_order', $idorder);
        $this->db->execute();
    }


    public function tambahtransaksi($data, $idorder)
    {

        $query = "INSERT INTO tb_transaksi (total_keranjang,total_belanja,email,nomor_telepon,provinsi,kecamatan,nama_lengkap,kode_pos,kota,alamat_detail,username,id_order)
        VALUES(:total_keranjang,:total_belanja,:email,:nomor_telepon,:provinsi,:kecamatan,:nama_lengkap,:kode_pos,:kota,:alamat_detail,:username,:id_order)";
        $this->db->query($query);
        $this->db->bind('total_keranjang', $data['total_keranjang']);
        $this->db->bind('total_belanja', $data['total_belanja']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nomor_telepon', $data['nomor_telepon']);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('kecamatan', $data['kecamatan']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('kode_pos', $data['kode_pos']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('alamat_detail', $data['alamat_detail']);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('id_order', $idorder);
        $this->db->execute();
    }

    public function gettransaksiadmin()
    {
        $query = "SELECT * FROM tb_transaksi  WHERE status_bayar = 'belum bayar'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getselesaiadmin()
    {
        $query = "SELECT * FROM tb_transaksi  WHERE status_bayar = 'selesai' ORDER BY tanggal_transaksi DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getselesaicustomer()
    {
        $query = "SELECT * FROM tb_transaksi  WHERE status_bayar = 'selesai' AND username=:username ORDER BY tanggal_transaksi DESC";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        return $this->db->resultSet();
    }

    public function getpengirimanadmin()
    {
        $query = "SELECT * FROM tb_transaksi  WHERE status_bayar = 'sudah bayar'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getsedangkirimadmin()
    {
        $query = "SELECT * FROM tb_transaksi  WHERE status_bayar = 'dikirim'";
        $this->db->query($query);
        return $this->db->resultSet();
    }



    public function getAllTransaksi()
    {
        $query = "SELECT * FROM tb_transaksi  WHERE username = :username AND (status_bayar = :sudah_bayar OR status_bayar = :belum_bayar OR status_bayar =:dikirim) ORDER BY length(status_bayar)  ";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('sudah_bayar', 'sudah bayar');
        $this->db->bind('belum_bayar', 'belum bayar');
        $this->db->bind('dikirim', 'dikirim');

        return $this->db->resultSet();
    }

    public function getTransaksi($id_order)
    {
        $query = "SELECT * FROM tb_keranjang a JOIN tb_transaksi b ON a.id_order = b.id_order WHERE a.username = :username AND a.id_order = :id_order";
        $this->db->query($query);
        $this->db->bind('username', $_SESSION['username']);
        $this->db->bind('id_order', $id_order);

        return $this->db->resultSet();
    }

    public function getdetailtransaksiadmin($id_order)
    {
        $query = "SELECT * FROM tb_keranjang a JOIN tb_transaksi b ON a.id_order = b.id_order WHERE a.status ='terbeli' AND a.id_order = :id_order";
        $this->db->query($query);
        $this->db->bind('id_order', $id_order);
        return $this->db->resultSet();
    }

    public function updateSudahBayar($data)
    {

        $query = "UPDATE tb_transaksi SET status_bayar = :status_bayar WHERE username = :username AND id_order = :id_order";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('id_order', $data['id_order']);
        $this->db->bind('status_bayar', 'sudah bayar');
        $this->db->execute();
    }


    public function updateSudahKirim($data)
    {

        $query = "UPDATE tb_transaksi SET status_bayar = :status_bayar,nama_pengirim = :nama_pengirim, nomor_resi = :nomor_resi WHERE username = :username AND id_order = :id_order";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('id_order', $data['id_order']);
        $this->db->bind('nama_pengirim', $data['nama_pengirim']);
        $this->db->bind('nomor_resi', $data['nomor_resi']);
        $this->db->bind('status_bayar', 'dikirim');
        $this->db->execute();
    }

    public function updatetransaksiselesai($data)
    {

        $query = "UPDATE tb_transaksi SET status_bayar = :status_bayar WHERE username = :username AND id_order = :id_order";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('id_order', $data['id_order']);
        $this->db->bind('status_bayar', 'selesai');
        $this->db->execute();
    }
}
