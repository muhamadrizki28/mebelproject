<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Admin'
        ];

        return view('admin/home/home', $data);
    }
}
