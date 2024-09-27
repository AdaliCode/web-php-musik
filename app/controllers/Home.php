<?php
class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['penyanyi'] = $this->model('Singer_model')->getAllSinger();
        $data['album'] = $this->model('Album_model')->getAllAlbum();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
