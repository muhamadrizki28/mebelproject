<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tb_gallery'; //nama tablenya
    protected $allowedFields = ['jenis', 'img']; //yang boleh diisi

}

