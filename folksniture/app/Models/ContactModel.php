<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'tb_contact'; //nama tablenya
    protected $allowedFields = ['deskripsi', 'no_wa']; //yang boleh diisi

}

