<?php

namespace App\Models;

use CodeIgniter\Model;

class BenefitModel extends Model
{
    protected $table = 'tb_benefit'; //nama tablenya
    protected $allowedFields = ['ben1', 'ben2', 'ben3', 'ben4', 'img_ben1', 'img_ben2', 'img_ben3', 'img_ben4']; //yang boleh diisi

}

