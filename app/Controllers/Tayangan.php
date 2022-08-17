<?php

namespace App\Controllers;

use App\Models\TayanganModel;
use App\Models\BioskopModel;
use App\Models\FilmModel;
use DateTime;

class Tayangan extends BaseController
{
    protected $tayanganModel;
    protected $bioskopModel;
    protected $filmModel;

    public function __construct()
    {
        $this->tayanganModel = new TayanganModel();
        $this->bioskopModel = new BioskopModel();
        $this->filmModel = new FilmModel();
    }

    public function index()
    {
        $bioskop = $this->bioskopModel->findAll();
        $film = $this->filmModel->findAll();

        $data = [
            'title' => 'Insert Data Tayangan',
            'active' => 'true',
            'bioskop' => $bioskop,
            'film' => $film
        ];
        return view('pages/insert/tayangan', $data);
    }

    public function save()
    {
        $bioskop_id = $this->request->getPost('bioskop_id');
        $judul_film = $this->request->getPost('judul_film');
        $kd_tayang = $this->generateKdTayang($bioskop_id, $judul_film);

        $this->tayanganModel->save([
            'bioskop_id' => $this->request->getPost('bioskop_id'),
            'film_id' => $kd_tayang['film_id'],
            'kd_tayang' => $kd_tayang['kd_tayang'],
            'judul_film' => $kd_tayang['judul_film'],
            'tanggal_waktu_tayang' => $this->request->getPost('tanggal_waktu_tayang'),
            'jumlah_kursi' => $this->request->getPost('jumlah_kursi')
        ]);
        return redirect()->to('/ticket');
    }

    public function generateKdTayang($bioskop_id, $film_id)
    {
        $kd_tayang = '';
        $bioskop = $this->bioskopModel->where(['id' => $bioskop_id])->first();
        $film = $this->filmModel->where(['id' => $film_id])->first();
        $amount_of_data = count($this->tayanganModel->findAll()) + 1;
        $tayangan_ke = str_pad($amount_of_data, 4, '0', STR_PAD_LEFT);
        $date = DateTime::createFromFormat('Y-m-d H:i', $this->request->getPost('tanggal_waktu_tayang'));
        $kd_tayang = $bioskop['kd_bioskop'] . $date->format('YmdHi') . $film['kd_film'] . $tayangan_ke;

        return [
            'kd_tayang' => $kd_tayang,
            'film_id' => $film['id'],
            'judul_film' => $film['judul_film']
        ];
    }
}
