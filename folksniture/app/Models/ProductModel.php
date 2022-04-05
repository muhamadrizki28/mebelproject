<?php

namespace App\Models;

use CodeIgniter\Model;



class ProductModel extends Model
{
    protected $table = 'tb_gallery'; //nama tablenya
    protected $allowedFields = ['jenis', 'img']; //yang boleh diisi

    public function tampilBangku()
    {
        $query= $this->db->query( "SELECT * FROM `tb_gallery` WHERE jenis = 'bangku'");
		return $query;
    }
    public function tampilLemari()
    {
        $query= $this->db->query( "SELECT * FROM `tb_gallery` WHERE jenis = 'lemari'");
		return $query;
    }
    public function tampilMeja()
    {
        $query= $this->db->query( "SELECT * FROM `tb_gallery` WHERE jenis = 'meja'");
		return $query;
    }
}

