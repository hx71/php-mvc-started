<?php

class Users extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['title'] = 'list users';
        $data['users'] = $this->model('UsersModel')->getAll();
        $this->view('layouts/header', $data);
        $this->view('users/index', $data);
        $this->view('layouts/footer');
    }

    public function create()
    {
        $this->view('layouts/header');
        $this->view('users/create');
        $this->view('layouts/footer');
    }

    public function save()
    {
        $row = $this->model('UsersModel')->cekUsername();
        if ($row) {
            header('location: ' . BASEURL . '/users/create');
            exit;
        } else {
            if ($this->model('UsersModel')->save($_POST) > 0) {
                header('location: ' . BASEURL . '/users');
                exit;
            } else {
                header('location: ' . BASEURL . '/users');
                exit;
            }
        }
    }
    public function edit($id)
    {
        $data = $this->model('UsersModel')->getByID($id);
        $this->view('layouts/header');
        $this->view('users/create', $data);
        $this->view('layouts/footer');
    }

    public function update()
    {
        if ($this->model('UsersModel')->update($_POST) > 0) {
            header('Location: ' . BASEURL . '/users');
            exit;
        } else {
            header('Location: ' . BASEURL . '/users');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('UsersModel')->destroy($id) > 0) {
            header('Location: ' . BASEURL . '/users');
            exit;
        } else {
            header('Location: ' . BASEURL . '/users');
            exit;
        }
    }

    public function cari()
    {
        $data['mhs'] = $this->model('UsersModel')->cariDataMahsiswa();
        $this->view('layouts/header', $data);
        $this->view('users/index', $data);
        $this->view('layouts/footer');
    }
}
