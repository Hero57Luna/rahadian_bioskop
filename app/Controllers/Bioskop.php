<?php

namespace App\Controllers;

use App\Models\BioskopModel;

class Bioskop extends BaseController
{
    protected $bioskopModel;

    public function __construct()
    {
        $this->bioskopModel = new BioskopModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Insert Bioskop Data'
        ];

        return view('pages/insert/bioskop', $data);
    }

    public function save()
    {
        $this->bioskopModel->save([
            'kd_bioskop' => $this->request->getPost('kd_bioskop'),
            'nama_bioskop' => $this->request->getPost('nama_bioskop'),
            'alamat_bioskop' => $this->request->getPost('alamat_bioskop'),
            'kota' => $this->request->getPost('kota')
        ]);

        return redirect()->to('/ticket');
    }
}
