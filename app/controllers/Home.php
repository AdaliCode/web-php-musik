<?php
class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['lagu'] = $this->model('Lagu_model')->getAllLagu();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
