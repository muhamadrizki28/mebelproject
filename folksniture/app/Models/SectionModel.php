<?php

namespace App\Models;

use CodeIgniter\Model;

class SectionModel extends Model
{
    protected $table = 'tb_section'; //nama tablenya
    protected $allowedFields = ['judul', 'deskripsi', 'img']; //yang boleh diisi

}

