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

    //edit data
    public function edit($id)
    {
        $benefit = $this->benefitModel->where(['id' => $id])->first();
        $data = [
            'title'     => 'Benefit',
            'benefit'    => $benefit
        ];
        return view('admin/home/benefit.php', $data);
    }
   
    public function updateimg1($id)
    {
        $validation_foto = $this->validate([
            'img_ben1' => 'uploaded[img_ben1]|mime_in[img_ben1,image/jpg,image/jpeg,image/gif,image/png]|max_size[img_ben1,4096]'       
        ]);

        if ($validation_foto == false){
            $this->benefitModel->save([ //auto save tanpa model
                'id' => $id,
			    'ben1' => $this->request->getVar('ben1')
                
		    ]);
            return redirect()->to('/Benefit/edit/'.$id)->with('gagal', '<b>Data berhasil diubah namun foto tidak terubah!</b> Foto belum di upload atau format foto salah');
        } else{
            $upload = $this->request->getFile('img_ben1');
		    $upload->move('assets/img');

            $this->benefitModel->save([ //auto save tanpa model
                'id' => $id,
			    'ben1' => $this->request->getVar('ben1'),
                'img_ben1' => $upload->getName()
                
		    ]);
        return redirect()->to('benefit/edit/'.$id);
        }
        
    }

    public function updateimg2($id)
    {
        $validation_foto = $this->validate([
            'img_ben2' => 'uploaded[img_ben2]|mime_in[img_ben2,image/jpg,image/jpeg,image/gif,image/png]|max_size[img_ben2,4096]'       
        ]);

        if ($validation_foto == false){
            $this->benefitModel->save([ //auto save tanpa model
                'id' => $id,
			    'ben2' => $this->request->getVar('ben2')
                
		    ]);
            return redirect()->to('/Benefit/edit/'.$id)->with('gagal', '<b>Data berhasil diubah namun foto tidak terubah!</b> Foto belum di upload atau format foto salah');
        } else{
            $upload = $this->request->getFile('img_ben2');
		    $upload->move('assets/img');

            $this->benefitModel->save([ //auto save tanpa model
                'id' => $id,
			    'ben2' => $this->request->getVar('ben2'),
                'img_ben2' => $upload->getName()
                
		    ]);
        return redirect()->to('benefit/edit/'.$id);
        }
        
    }

    public function updateimg3($id)
    {
        $validation_foto = $this->validate([
            'img_ben3' => 'uploaded[img_ben3]|mime_in[img_ben3,image/jpg,image/jpeg,image/gif,image/png]|max_size[img_ben3,4096]'       
        ]);

        if ($validation_foto == false){
            $this->benefitModel->save([ //auto save tanpa model
                'id' => $id,
			    'ben3' => $this->request->getVar('ben3')
                
		    ]);
            return redirect()->to('/Benefit/edit/'.$id)->with('gagal', '<b>Data berhasil diubah namun foto tidak terubah!</b> Foto belum di upload atau format foto salah');
        } else{
            $upload = $this->request->getFile('img_ben3');
		    $upload->move('assets/img');

            $this->benefitModel->save([ //auto save tanpa model
                'id' => $id,
			    'ben3' => $this->request->getVar('ben3'),
                'img_ben3' => $upload->getName()
                
		    ]);
        return redirect()->to('benefit/edit/'.$id);
        }
        
    }

    public function updateimg4($id)
    {
        $validation_foto = $this->validate([
            'img_ben4' => 'uploaded[img_ben4]|mime_in[img_ben4,image/jpg,image/jpeg,image/gif,image/png]|max_size[img_ben4,4096]'       
        ]);

        if ($validation_foto == false){
            $this->benefitModel->save([ //auto save tanpa model
                'id' => $id,
			    'ben4' => $this->request->getVar('ben4')
                
		    ]);
            return redirect()->to('/Benefit/edit/'.$id)->with('gagal', '<b>Data berhasil diubah namun foto tidak terubah!</b> Foto belum di upload atau format foto salah');
        } else{
            $upload = $this->request->getFile('img_ben4');
		    $upload->move('assets/img');

            $this->benefitModel->save([ //auto save tanpa model
                'id' => $id,
			    'ben4' => $this->request->getVar('ben4'),
                'img_ben4' => $upload->getName()
                
		    ]);
        return redirect()->to('benefit/edit/'.$id);
        }
        
    }

}
