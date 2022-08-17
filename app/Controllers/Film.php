<?php

namespace App\Controllers;

use Config\Database;
use App\Models\FilmModel;
use App\Models\TayanganModel;

class Film extends BaseController
{
    protected $filmModel;

    public function __construct()
    {
        $this->filmModel = new FilmModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Rahadian Bioskop',
            'active' => 'true'
        ];
        return view('pages/home', $data);
    }


    public function film()
    {
        $data = [
            'title' => 'Insert Data'
        ];

        return view('pages/insert/film', $data);
    }

    public function save()
    {
        $kd_film = $this->generateKdTicket($this->request->getPost('judul'));

        $this->filmModel->save([
            'kd_film' => $kd_film,
            'judul_film' => $this->request->getPost('judul'),
            'tgl_launc' => $this->request->getPost('tgl_launc'),
            'synopys' => $this->request->getPost('synopys')
        ]);

        return redirect()->to('/ticket');
    }

    public function generateKdTicket($judul)
    {
        $amount_of_film = count($this->filmModel->findAll()) + 1;

        $judul = strtoupper($judul);

        $vowel = ['A', 'I', 'U', 'E', '0'];

        $judulExp = explode(' ', $judul);

        $final = [];

        $data_final = '';

        if (count($judulExp) == 2) {
            foreach (str_split($judulExp[0]) as $je) {
                if (!in_array($je, $vowel)) {
                    array_push($final, $je);
                    break;
                }
            }
            foreach (str_split($judulExp[1]) as $je) {
                if (!in_array($je, $vowel)) {
                    array_push($final, $je);
                    break;
                }
            }
        } elseif (count($judulExp) > 2) {
            foreach (str_split($judulExp[0]) as $je) {
                if (!in_array($je, $vowel)) {
                    array_push($final, $je);
                    break;
                }
            }
            foreach (str_split(end($judulExp)) as $je) {
                if (!in_array($je, $vowel)) {
                    array_push($final, $je);
                    break;
                }
            }
        } else {
            foreach (str_split($judulExp[0]) as $je) {
                if (!in_array($je, $vowel)) {
                    if (count($final) != 2) {
                        array_push($final, $je);
                    } else {
                        break;
                    }
                }
            }
            if (count($final) == 1) {
                array_push($final, strtoupper(str_split($judul)[1]));
            }
        }
        foreach ($final as $fn) {
            $data_final .= $fn;
        }
        return $data_final . str_pad($amount_of_film, 3, '0', STR_PAD_LEFT);
    }
}
