<?php

namespace App\Models;

use CodeIgniter\Model;

class JudproductModel extends Model
{
    protected $table = 'tb_product'; //nama tablenya
    protected $allowedFields = ['judul', 'deskripsi']; //yang boleh diisi

   
}

