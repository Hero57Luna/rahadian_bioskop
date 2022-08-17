<?php

namespace App\Models;

use CodeIgniter\Model;

class BioskopModel extends Model
{
    protected $table = 'bioskop';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kd_bioskop',
        'nama_bioskop',
        'alamat_bioskop',
        'kota'
    ];
}
