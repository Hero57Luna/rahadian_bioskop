<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table = 'film';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kd_film',
        'judul_film',
        'tgl_launc',
        'synopys'
    ];
}
