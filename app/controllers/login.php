<?php

class Login extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Login';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer', $data);
    }

    public function proseslogin()
    {
        if ($row = $this->model('UsersModel')->checklogin($_POST)) {
            $role = $row['role'];
            if ($role == "1") {
                $_SESSION['role'] = $row['role'];
                $_SESSION['username'] = $row['username'];
                header('location:' . base_url . '/home');
            } else if ($role == "2") {
                $_SESSION['role'] = $row['role'];
                $_SESSION['username'] = $row['username'];
                header('location:' . base_url . '/home');
            }
        } else {
            Flasher::setMessage('Gagal', 'Login', 'danger');
            header('location: ' . base_url . '/login');
        }
    }

    public function prosesdaftar()
    {

        $data['checkusername'] = $this->model('UsersModel')->checkusername($_POST);
        if ($data['checkusername'] == true) {
            Flasher::setMessage('email', 'Sudah terdaftar', 'danger');
            header('location: ' . base_url . '/login');
        } else {

            if ($this->model('UsersModel')->daftarCustomer($_POST) > 0) {
                if ($row = $this->model('UsersModel')->checklogin($_POST)) {
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['username'] = $row['username'];
                    header('location:' . base_url . '/home');
                } else {
                    Flasher::setMessage('Gagal', 'Login', 'danger');
                    header('location: ' . base_url . '/login');
                }
            } else {
                Flasher::setMessage('Berhasil', 'didaftarkan', 'danger');
                header('location: ' . base_url . '/login');
            }
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('location:' . base_url . '/home');
    }
}
