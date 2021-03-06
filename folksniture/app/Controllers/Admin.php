<?php

namespace App\Controllers;
use App\Models\HeaderModel;

class Admin extends BaseController
{
    protected $headerModel;

    public function __construct()
	{
		$this->headerModel = new HeaderModel();
	}
    
    public function index()
    {
        $header = $this->headerModel->findAll();
        $data = [
            'title'     => 'Home Admin',
            'header'    => $header
        ];
        return view('admin/home/home.php', $data);
    }

    //edit data
    public function edit($id)
    {
        $header = $this->headerModel->where(['id' => $id])->first();
        $data = [
            'title'     => 'Header',
            'header'    => $header
        ];
        return view('admin/home/header.php', $data);
    }

    public function update($id)
    {
        $this->headerModel->save([ //auto save tanpa model
            'id' => $id,
			'judul_1' => $this->request->getVar('judul_1'),
            'judul_2' => $this->request->getVar('judul_2'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'no_Wa' => $this->request->getVar('no_Wa'),
		]);

        return redirect()->to('admin/edit/'.$id);
    }
    
    public function updateimg($id)
    {
        $validation_foto = $this->validate([
            'img_header' => 'uploaded[img_header]|mime_in[img_header,image/jpg,image/jpeg,image/gif,image/png]|max_size[img_header,4096]'
        ]);

        if ($validation_foto == false){
            return redirect()->to('/Admin')->with('gagal', '<b>DATA GAGAL DIEDIT!</b> Format foto salah');
        } else{
            $upload = $this->request->getFile('img_header');
		    $upload->move('assets/img');

            $this->headerModel->save([ //auto save tanpa model
                'id' => $id,
			    'img_header' => $upload->getName(),
		    ]);
        }
        

        return redirect()->to('admin/edit/'.$id);
    }

    // public function create()
    // {
    //     $data = [
    //         'title' => 'Home Admin'
    //     ];

    //     return view('admin/home/home_edit.php', $data);
    // }

    // // insert data
    // public function save()
    // {
    //     $this->headerModel->save([ //auto save tanpa model
	// 		'judul_1' => $this->request->getVar('judul_1'),
    //         'judul_2' => $this->request->getVar('judul_2'),
	// 		'deskripsi' => $this->request->getVar('deskripsi'),
	// 		'no_Wa' => $this->request->getVar('no_Wa'),
	// 		'img_header' => $this->request->getVar('img_header'),
	// 	]);

	// 	return redirect()->to('/admin');
    // }
}
