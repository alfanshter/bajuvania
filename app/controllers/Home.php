<?php

class Home extends Controller
{
    public function index()
    {

        $data['title'] = 'Halaman Jadwal';
        $data['slider'] = $this->model('SliderModel')->getSlider();
        $data['bestseller'] = $this->model('BarangModel')->getBestSeller();
        $data['kaos'] = $this->model('BarangModel')->getKaos();
        $data['baju'] = $this->model('BarangModel')->getBaju();
        $data['celana'] = $this->model('BarangModel')->getCelana();
        $data['terbaru'] = $this->model('BarangModel')->getTerbaru();
        $this->view('templates/header', $data);
        $this->view('templates/slider', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}
