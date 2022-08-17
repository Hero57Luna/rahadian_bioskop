<?php

namespace App\Controllers;

use App\Models\FilmModel;
use App\Models\TayanganModel;
use App\Models\BioskopModel;

class Ticket extends BaseController
{
    protected $filmModel;
    protected $bioskopModel;
    protected $tayanganModel;

    public function __construct()
    {
        $this->filmModel = new FilmModel();
        $this->bioskopModel = new BioskopModel();
        $this->tayanganModel = new TayanganModel();
    }

    public function index()
    {
        $film = $this->filmModel->findAll();

        $data = [
            'title' => 'Ticket | Rahadian Bioskop',
            'film' => $film,
        ];

        return view('pages/ticket', $data);
    }

    // public function detail($kd_film)
    // {
    //     $tayangan = $this->tay

    //     $data = [
    //         'title' => 'Detail | Rahadian Bioskop',
    //     ];

    //     return view('pages/insert/ticket', $data);
    // }
}
