<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Utama";
        $data['name'] = "Hasrul";
        $this->view('layouts/header', $data);
        $this->view('home/index', $data);
        $this->view('layouts/footer');
    }
}
