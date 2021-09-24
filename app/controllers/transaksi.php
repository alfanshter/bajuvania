<?php

class Transaksi extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Transaksi';
        $data['transaksi'] = $this->model('TransaksiModel')->getAllTransaksi();
        $this->view('templates/header', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/footer', $data);
    }

    public function transaksiselesai()
    {

        if ($this->model('TransaksiModel')->updatetransaksiselesai($_POST)) {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/transaksi');
        } else {
            Flasher::setMessage('Berhasil', 'ditambah', 'success');
            header('location: ' . base_url . '/riwayat');
        }
    }
}
