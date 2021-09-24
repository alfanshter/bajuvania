<?php

class Admin extends Controller
{
    public function index()
    {
        $role = $_SESSION['role'];
        if ($role == 2) {
            $data['nama'] = 'Halmaan utama';
            $data['transaksi'] = $this->model('TransaksiModel')->gettransaksiadmin();
            $this->view('templateadmin/sidebar', $data);
            $this->view('templateadmin/header', $data);
            $this->view('admin/index', $data);
            $this->view('templateadmin/footer', $data);
        } else {
            header('location: ' . base_url . '/admin/login');
        }
    }

    public function pengiriman()
    {
        $role = $_SESSION['role'];
        if ($role == 2) {
            $data['nama'] = 'Halmaan utama';
            $data['transaksi'] = $this->model('TransaksiModel')->getpengirimanadmin();
            $this->view('templateadmin/sidebar', $data);
            $this->view('templateadmin/header', $data);
            $this->view('admin/pengiriman', $data);
            $this->view('templateadmin/footer', $data);
        } else {
            header('location: ' . base_url . '/admin/login');
        }
    }

    public function sedangdikirim()
    {
        $role = $_SESSION['role'];
        if ($role == 2) {
            $data['nama'] = 'Halmaan Sedang Kirim';
            $data['transaksi'] = $this->model('TransaksiModel')->getsedangkirimadmin();
            $this->view('templateadmin/sidebar', $data);
            $this->view('templateadmin/header', $data);
            $this->view('admin/sedangdikirim', $data);
            $this->view('templateadmin/footer', $data);
        } else {
            header('location: ' . base_url . '/admin/login');
        }
    }

    public function detailperjalanan($id_order)
    {
        $data['nama'] = 'Halmaan Cek Data';
        $data['keranjang'] = $this->model('TransaksiModel')->getdetailtransaksiadmin($id_order);
        $this->view('templateadmin/sidebar', $data);
        $this->view('templateadmin/header', $data);
        $this->view('admin/detailperjalanan', $data);
        $this->view('templateadmin/footer', $data);
    }

    public function riwayat()
    {
        $role = $_SESSION['role'];
        if ($role == 2) {
            $data['nama'] = 'Halaman Riwayat';
            $data['transaksi'] = $this->model('TransaksiModel')->getselesaiadmin();
            $this->view('templateadmin/sidebar', $data);
            $this->view('templateadmin/header', $data);
            $this->view('admin/riwayat', $data);
            $this->view('templateadmin/footer', $data);
        } else {
            header('location: ' . base_url . '/admin/login');
        }
    }

    public function lihat($id_order)
    {
        $data['nama'] = 'Halmaan Cek Data';
        $data['keranjang'] = $this->model('TransaksiModel')->getdetailtransaksiadmin($id_order);
        $this->view('templateadmin/sidebar', $data);
        $this->view('templateadmin/header', $data);
        $this->view('admin/lihat', $data);
        $this->view('templateadmin/footer', $data);
    }

    public function detailriwayat($id_order)
    {
        $data['nama'] = 'Halmaan Cek Data';
        $data['keranjang'] = $this->model('TransaksiModel')->getdetailtransaksiadmin($id_order);
        $this->view('templateadmin/sidebar', $data);
        $this->view('templateadmin/header', $data);
        $this->view('admin/detailriwayat', $data);
        $this->view('templateadmin/footer', $data);
    }


    public function kirim($id_order)
    {
        $data['nama'] = 'Halmaan Cek Data';
        $data['keranjang'] = $this->model('TransaksiModel')->getdetailtransaksiadmin($id_order);
        $this->view('templateadmin/sidebar', $data);
        $this->view('templateadmin/header', $data);
        $this->view('admin/kirim', $data);
        $this->view('templateadmin/footer', $data);
    }


    public function proseskirim()
    {

        if ($this->model('TransaksiModel')->updateSudahKirim($_POST)) {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/admin/pengiriman');
        } else {
            Flasher::setMessage('Berhasil', 'ditambah', 'success');
            header('location: ' . base_url . '/admin/pengiriman');
        }
    }

    public function login()
    {
        $data['nama'] = 'Login';
        $this->view('admin/login', $data);
    }

    public function loginproses()
    {
        if ($row = $this->model('UsersModel')->checklogin($_POST)) {
            $role = $row['role'];
            if ($role == 2) {
                $_SESSION['role'] = $row['role'];
                $_SESSION['username'] = $row['username'];
                header('location:' . base_url . '/admin/index');
            } else {
                Flasher::setMessage('Gagal', 'Login', 'danger');
                header('location: ' . base_url . '/admin/login');
            }
        } else {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/admin/asu');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('location:' . base_url . '/admin');
    }


    public function sudahbayar()
    {
        if ($this->model('TransaksiModel')->updateSudahBayar($_POST)) {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/admin');
        } else {
            Flasher::setMessage('Berhasil', 'ditambah', 'success');
            header('location: ' . base_url . '/admin');
        }
    }
}
