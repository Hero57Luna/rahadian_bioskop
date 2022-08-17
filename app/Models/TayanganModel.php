<?php

namespace App\Models;

use CodeIgniter\Model;

class TayanganModel extends Model
{
    protected $table = 'tayangan';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'bioskop_id',
        'film_id',
        'kd_tayang',
        'judul_film',
        'tanggal_waktu_tayang',
        'jumlah_kursi'
    ];
}
