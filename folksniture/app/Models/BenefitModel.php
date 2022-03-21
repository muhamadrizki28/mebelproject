<?php

namespace App\Models;

use CodeIgniter\Model;

class BenefitModel extends Model
{
    protected $table = 'tb_header'; //nama tablenya
    protected $allowedFields = ['judul_1', 'judul_2', 'deskripsi', 'no_Wa', 'img_header']; //yang boleh diisi

}

