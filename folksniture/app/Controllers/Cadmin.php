<?php

namespace App\Controllers;

class Cadmin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Admin'
        ];

        return view('admin/home/v_home_admin', $data);
    }
}
