<?php

class Cart extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Keranjang';
        $data['keranjang'] = $this->model('KeranjangModel')->getKeranjang();
        $data['total_keranjang'] = $this->model('KeranjangModel')->totalkeranjang();
        $this->view('templates/header', $data);
        $this->view('cart/index', $data);
        $this->view('templates/footer', $data);
    }

    public function tambahkeranjang()
    {

        $role = $_SESSION['role'];
        if ($role == 0 || $role == 2) {
            Flasher::setMessage('Berhasil', 'ditambah', 'success');
            header('location: ' . base_url . '/login');
        } else {

            if ($this->model('KeranjangModel')->checkkeranjang($_POST)) {
                if ($this->model('KeranjangModel')->updatejumlahkeranjang($_POST)) {
                    Flasher::setMessage('Gagal', 'Login', 'danger');
                    header('location: ' . base_url . '/home');
                } else {
                    Flasher::setMessage('Berhasil', 'ditambah', 'success');
                    header('location: ' . base_url . '/cart');
                }
            } else {
                if ($this->model('KeranjangModel')->tambahkeranjang($_POST) > 0) {
                    Flasher::setMessage('Gagal', 'ditambah', 'danger');
                    header('location: ' . base_url . '/home');
                } else {
                    Flasher::setMessage('Berhasil', 'ditambah', 'success');
                    header('location: ' . base_url . '/cart');
                }
            }
        }
    }

    public function hapusbarang($slug_barang)
    {
        if ($this->model('KeranjangModel')->hapusbarang($slug_barang) > 0) {
            Flasher::setMessage('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/cart');
        } else {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/cart');
        }
    }

    public function pluscart($slug_barang)
    {
        if ($this->model('KeranjangModel')->pluskeranjang($slug_barang)) {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/cart');
        } else {
            Flasher::setMessage('Berhasil', 'ditambah', 'success');
            header('location: ' . base_url . '/cart');
        }
    }

    public function minuscart($slug_barang)
    {
        $jumlah = $this->model('KeranjangModel')->checkjumlah($slug_barang);
        if ($jumlah['jumlah_barang'] == '0') {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/cart');
        } else {
            if ($this->model('KeranjangModel')->mineskeranjang($slug_barang)) {
                Flasher::setMessage('Gagal', 'Login', 'danger');
                header('location: ' . base_url . '/cart');
            } else {
                Flasher::setMessage('Berhasil', 'ditambah', 'success');
                header('location: ' . base_url . '/cart');
            }
        }
    }

    public function checkout()
    {
        $idorder = date('dmYHis');


        if ($this->model('TransaksiModel')->updateidorder($idorder)) {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/cart');
        } else {
            if ($this->model('TransaksiModel')->tambahtransaksi($_POST, $idorder)) {
                Flasher::setMessage('Gagal', 'Login', 'success');
                header('location: ' . base_url . '/cart');
            } else {
                Flasher::setMessage('Gagal', 'Login', 'danger');
                header('location: ' . base_url . '/checkout/' . $idorder);
            }
        }
    }
}
