<?php

class Riwayat extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Riwayat';
        $data['riwayat'] = $this->model('TransaksiModel')->getselesaicustomer();
        $this->view('templates/header', $data);
        $this->view('riwayat/index', $data);
        $this->view('templates/footer', $data);
    }
}
