<?php
class Album extends Controller
{
    public function detail($id)
    {
        $data['judul'] = 'Detail Album';
        $data['album'] = $this->model('Album_model')->getAlbumById($id);
        $data['lagu'] = $this->model('Lagu_model')->getAllLagu();
        $this->view('templates/header', $data);
        $this->view('album/detail', $data);
        $this->view('templates/footer');
    }
}
