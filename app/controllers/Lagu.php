<?php
class Lagu extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Musik';
        $data['lagu'] = $this->model('Lagu_model')->getAllLagu();
        $this->view('templates/header', $data);
        $this->view('lagu/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Lagu';
        $data['lagu'] = $this->model('Lagu_model')->getLaguById($id);
        $this->view('templates/header', $data);
        $this->view('lagu/detail', $data);
        $this->view('templates/footer');
    }
}
