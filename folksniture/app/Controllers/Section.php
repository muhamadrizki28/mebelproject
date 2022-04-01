<?php

namespace App\Controllers;
use App\Models\SectionModel;
use App\Models\ContactModel;

class Section extends BaseController
{
    protected $sectionModel;
    protected $contactModel;

    public function __construct()
	{
		$this->sectionModel = new SectionModel();
        $this->contactModel = new ContactModel();
	}

    //edit data
    public function edit($id)
    {
        $section = $this->sectionModel->where(['id' => $id])->first();
        $contact = $this->contactModel->where(['id' => $id])->first();
        $data = [
            'title'     => 'Section',
            'section'    => $section,
            'contact'    => $contact
        ];
        return view('Admin/home/section.php', $data);
    }

    public function update($id)
    {
        $this->sectionModel->save([ //auto save tanpa model
            'id' => $id,
			'judul' => $this->request->getVar('judul'),
			'deskripsi' => $this->request->getVar('deskripsi'),
		]);

        return redirect()->to('Section/edit/'.$id);
    }
    
    public function updateimg($id)
    {
        $validation_foto = $this->validate([
            'img' => 'uploaded[img]|mime_in[img,image/jpg,image/jpeg,image/gif,image/png]|max_size[img,4096]'
        ]);

        if ($validation_foto == false){
            return redirect()->to('/Section/edit/'.$id)->with('gagal', '<b>DATA GAGAL DIEDIT!</b> Format foto salah');
        } else{
            $upload = $this->request->getFile('img');
		    $upload->move('assets/img');

            $this->sectionModel->save([ //auto save tanpa model
                'id' => $id,
			    'img' => $upload->getName(),
		    ]);
        }
        
        return redirect()->to('Section/edit/'.$id);
    }

    public function updatecontact($id)
    {
        $this->contactModel->save([ //auto save tanpa model
            'id' => $id,
			'deskripsi' => $this->request->getVar('deskripsi'),
            'no_wa' => $this->request->getVar('no_wa')
		]);

        return redirect()->to('Section/edit/'.$id);
    }

}
