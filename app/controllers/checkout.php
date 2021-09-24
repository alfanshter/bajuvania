<?php

class Checkout extends Controller
{
    public function index($id_order)
    {

        $data['title'] = 'Halaman Transaksi';
        $data['keranjang'] = $this->model('TransaksiModel')->getTransaksi($id_order);
        $this->view('templates/header', $data);
        $this->view('checkout/index', $data);
        $this->view('templates/footer', $data);
    }

    public function pluscart($slug_barang)
    {
        if ($this->model('KeranjangModel')->pluskeranjang($slug_barang)) {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/checkout');
        } else {
            Flasher::setMessage('Berhasil', 'ditambah', 'success');
            header('location: ' . base_url . '/checkout');
        }
    }

    public function minuscart($slug_barang)
    {
        $jumlah = $this->model('KeranjangModel')->checkjumlah($slug_barang);
        if ($jumlah['jumlah_barang'] == '0') {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/checkout');
        } else {
            if ($this->model('KeranjangModel')->mineskeranjang($slug_barang)) {
                Flasher::setMessage('Gagal', 'Login', 'danger');
                header('location: ' . base_url . '/checkout');
            } else {
                Flasher::setMessage('Berhasil', 'ditambah', 'success');
                header('location: ' . base_url . '/checkout');
            }
        }
    }

    public function hapusbarang($slug_barang)
    {
        if ($this->model('KeranjangModel')->hapusbarang($slug_barang) > 0) {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/checkout');
        } else {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/checkout');
        }
    }
}
