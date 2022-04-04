<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productModel;

    public function __construct()
	{
		$this->productModel = new ProductModel();
	}
    
    public function index()
    {
        $product = $this->productModel->findAll();
        $data = [
            'title'     => 'Product',
            'product'    => $product
        ];
        return view('admin/home/product.php', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Home Admin'
        ];

        return view('admin/home/home_edit.php', $data);
    }

    // insert data
    public function save()
    {
        $this->productModel->save([ //auto save tanpa model
			'judul_1' => $this->request->getVar('judul_1'),
            'judul_2' => $this->request->getVar('judul_2'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'no_Wa' => $this->request->getVar('no_Wa'),
			'img_header' => $this->request->getVar('img_header'),
		]);

		return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/Product');
    }
}
