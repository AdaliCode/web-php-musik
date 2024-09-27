<?php
class Album_model
{
    private $album = [
        [
            "nama" => "Dia Masa Lalumu, Aku Masa Depanmu",
            "rilis" => "2021-03-05",
        ],
        [
            "nama" => "Lovely Runner, Pt. 4 (Original Soundtrack)",
            "rilis" => "2024-04-23",
        ],
        [
            "nama" => "Lovely Runner, Pt. 1 (Original Soundtrack)",
            "rilis" => "2024-04-08",
        ],
        [
            "nama" => "Shiny Star (2020)",
            "rilis" => "2020-11-14",
        ],
        [
            "nama" => "Niscaya",
            "rilis" => "2021-8-25",
        ]
    ];
    public function getAllAlbum()
    {
        return $this->album;
    }
    public function getAlbumById($id)
    {
        return $this->album[$id - 1];
    }
}
