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
        $validation_foto = $this->validate([
            'img' => 'uploaded[img]|mime_in[img,image/jpg,image/jpeg,image/gif,image/png]|max_size[img,10000]'       
        ]);

        if ($validation_foto == false){
            return redirect()->to('/product')->with('gagal', '<b>Foto Gagal di upload');
        } else{
            $upload = $this->request->getFile('img');
		    $upload->move('assets/img');

            $this->productModel->save([ //auto save tanpa model
			    'jenis' => $this->request->getVar('jenis'),
                'img' => $upload->getName()
                
		    ]);
        return redirect()->to('/product');
        }
        
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/Product');
    }
}
