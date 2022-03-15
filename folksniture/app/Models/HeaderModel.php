<?php

namespace App\Models;

use CodeIgniter\Model;

class HeaderModel extends Model
{
    protected $table = 'tb_header'; //nama tablenya
    protected $useTimestamps = true; //biar tanggal created_at dan updated_at nya otomatis keisi tanpa ditulis
    protected $allowedFields = ['judul_1', 'judul_2', 'deskripsi', 'no_Wa', 'img_header']; //yang boleh diisi

}

