<?php

namespace App\Controllers;
use App\Models\BenefitModel;

class Benefit extends BaseController
{
    protected $benefitModel;

    public function __construct()
	{
		$this->benefitModel = new BenefitModel();
	}
    
    public function index()
    {
        $benefit = $this->benefitModel->findAll();
        $data = [
            'title'     => 'Benefit Admin',
            'benefit'    => $benefit
        ];
        return view('admin/home/benefit', $data);
    }

    //edit data
    public function edit($id)
    {
        $benefit = $this->benefitModel->where(['id' => $id])->first();
        $data = [
            'title'     => 'Benefit Admin',
            'benefit'    => $benefit
        ];
        return view('admin/home/benefit.php', $data);
    }
   
}
