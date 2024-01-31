<?php

class About extends Controller
{

    public function index($name = "Hasrul", $job = "Backend-Developer", $email = "hs.rhul@gmail.com")
    {
        $data['name'] = $name;
        $data['job'] = $job;
        $data['email'] = $email;
        $data['title'] = "About me";
        $this->view('layouts/header', $data);
        $this->view('about/index', $data);
        $this->view('layouts/footer');
    }
    public function create()
    {
        $data['title'] = 'pages';
        $this->view('layouts/header', $data);
        $this->view('about/page');
        $this->view('layouts/footer');
    }
}
