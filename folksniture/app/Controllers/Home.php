<?php

namespace App\Controllers;
use App\Models\HeaderModel;
use App\Models\BenefitModel;
use App\Models\ContactModel;
use App\Models\ProductModel;
use App\Models\JudproductModel;
use App\Models\SectionModel;

class Home extends BaseController
{
	// ini dipake kalo buat banyak function aja
	protected $headerModel;
	protected $benefitModel;
	protected $contactModel;
	protected $productModel;
	protected $judproductModel;
	protected $sectionModel;

    public function __construct()
	{
		$this->headerModel = new HeaderModel();
		$this->benefitModel = new BenefitModel();
		$this->contactModel = new ContactModel();
		$this->productModel = new ProductModel();
		$this->judproductModel = new JudproductModel();
		$this->sectionModel = new SectionModel();
	}

	public function index()
	{
		
		$header = $this->headerModel->where(['id' => 1])->first();
		$benefit = $this->benefitModel->where(['id' => 1])->first();
		$judproduct = $this->judproductModel->where(['id' => 1])->first();
		$pro_bangku = $this->productModel->tampilBangku()->getResultArray();
		$pro_lemari = $this->productModel->tampilLemari()->getResultArray();
		$pro_meja = $this->productModel->tampilMeja()->getResultArray();
		$section = $this->sectionModel->where(['id' => 1])->first();
		$contact = $this->contactModel->where(['id' => 1])->first();

		$data = [
            'title'     	=> 'Home Admin',
            'header'    	=> $header,
            'benefit'    	=> $benefit,
            'judproduct'   	=> $judproduct,
			'pro_bangku'	=> $pro_bangku,
			'pro_lemari'	=> $pro_lemari,
			'pro_meja'		=> $pro_meja,
			'section'		=> $section,
			'contact'		=> $contact
        ];
       

		return view('index.php', $data);
	}
}
