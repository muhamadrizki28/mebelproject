<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
              <div class="col-12">
                
                <form action="/admin/update/1" method="POST"> 
                  <?= csrf_field(); ?> 
                <div class="card">

                  <div class="card-header ">
                    <h4>Header</h4>
                  </div>
                  
                  <div class="card-body" >
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="hidden" value="<?= $header['id']; ?>">
                        <label for="">Judul 1</label>
                        <input type="text" class="form-control" id="judul_1" name="judul_1" value="<?= $header['judul_1']; ?>">
                      </div>
                      <div class="form-group col-md-6">       
                      <label for="">Judul 2</label>                 
                        <input type="text" class="form-control" id="judul_2" name="judul_2" value="<?= $header['judul_2']; ?>">
                      </div>
                    </div>        
                    <div class="form-group">
                    <label for="">Deskripsi</label>
                      <textarea style="height:100px;" class="form-control" id="deskripsi" name="deskripsi" value="<?= $header['deskripsi']; ?>"><?= $header['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group">
                    <label for="">Nomor Whatsapp</label>
                        <input type="text" class="form-control" id="no_wa" name="no_Wa" value="<?= $header['no_wa']; ?>">
                      </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  </div>
                </div>
                </form>

                <form action="/admin/updateimg/1" method="POST" enctype="multipart/form-data">
                <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('gagal');?>
                </div>
            <?php } ?>

                  <div class="card">
                    <div class="card-header">
                      <h4>Header Image</h4>
                    </div>
                    <div class="card-body" style="display: flex;">
                      <div class="foto-dashboard-header" style="background-image: url(/assets/img/<?= $header['img_header']; ?>);">
                        <!-- <img src="/assets/img/" alt="">  -->
                      </div>
                      <div class="form-group" style="width: 100%;" >
                          <label for="formGroupExampleInput">Ubah Foto*</label>
                          <input type="file" value="<?= $header['img_header']; ?>" name="img_header" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                  </div>
                </form>

            </div>

<?= $this->endSection(); ?> 