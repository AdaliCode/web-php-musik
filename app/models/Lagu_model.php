<?php
class Lagu_model
{
    private $song = [
        [
            "judul" => "Dia Masa Lalumu, Aku Masa Depanmu",
            "penyanyi" => "Vionita",
            "album" => "Dia Masa Lalumu, Aku Masa Depanmu",
            "release" => "2021-03-05",
            "durasi_menit" => 4,
            "durasi_detik" => 2,
        ],
        [
            "judul" => "May I Love You?",
            "penyanyi" => "UMJI",
            "album" => "Lovely Runner, Pt. 4 (Original Soundtrack)",
            "release" => "2024-04-23",
            "durasi_menit" => 3,
            "durasi_detik" => 18
        ],
        [
            "judul" => "Sudden Shower",
            "penyanyi" => "ECLIPSE",
            "album" => "Lovely Runner, Pt. 1 (Original Soundtrack)",
            "release" => "2024-04-08",
            "durasi_menit" => 3,
            "durasi_detik" => 53
        ],
        [
            "judul" => "Shiny Star (2020)",
            "penyanyi" => "KyoungSeo",
            "album" => "Shiny Star (2020)",
            "release" => "2020-11-14",
            "durasi_menit" => 3,
            "durasi_detik" => 37
        ],
        [
            "judul" => "Niscaya",
            "penyanyi" => "Bilal Indrajaya",
            "album" => "Niscaya",
            "release" => "2021-8-25",
            "durasi_menit" => 4,
            "durasi_detik" => 58
        ]
    ];
    public function getAllLagu()
    {
        return $this->song;
    }
}
