<?php
class Singer_model
{
    private $singer = [
        [
            "nama" => "Vionita",
            "asal" => "Indonesia",
        ],
        [
            "nama" => "UMJI",
            "asal" => "Korea Selatan",
        ],
        [
            "nama" => "ECLIPSE",
            "asal" => "Korea Selatan",
        ],
        [
            "nama" => "KyoungSeo",
            "asal" => "Korea Selatan",
        ],
        [
            "nama" => "Bilal Indrajaya",
            "asal" => "Indonesia",
        ]
    ];
    public function getAllSinger()
    {
        return $this->singer;
    }
    public function getSingerById($id)
    {
        return $this->singer[$id - 1];
    }
}
