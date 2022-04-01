<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
              <div class="col-12">

                <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                  <div class="alert alert-danger">
                      <?php echo session()->getFlashdata('gagal');?>
                  </div>
                <?php } ?>

                <form action="/section/update/1" method="POST"> 
                  <?= csrf_field(); ?> 
                  <div class="card">
                    <div class="card-header ">
                      <h4>Section</h4>
                    </div>
                    <div class="card-body" >
                        <div class="form-group">
                          <input type="hidden" value="<?= $section['id']; ?>">
                          <label for="">Judul</label>
                          <input type="text" class="form-control" id="judul" name="judul" value="<?= $section['judul']; ?>">
                        </div>
                      <div class="form-group">
                      <label for="">Deskripsi</label>
                        <textarea style="height:100px;" class="form-control" id="deskripsi" name="deskripsi" value="<?= $section['deskripsi']; ?>"><?= $section['deskripsi']; ?></textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                  </div>
                </form>

                <form action="/section/updateimg/1" method="POST" enctype="multipart/form-data">
                  <div class="card">
                    <div class="card-header">
                      <h4>Section Image</h4>
                    </div>
                    <div class="card-body" style="display: flex;">
                    <!-- css ngikutin header juga -->
                      <div class="foto-dashboard-header" style="background-image: url(/assets/img/<?= $section['img']; ?>);"> 
                        <!-- <img src="/assets/img/" alt="">  -->
                      </div>
                      <div class="form-group" style="width: 100%;" >
                          <label for="formGroupExampleInput">Ubah Foto*</label>
                          <input type="file" value="<?= $section['img']; ?>" name="img" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                  </div>
                </form>

                <form action="/section/updatecontact/1" method="POST"> 
                  <?= csrf_field(); ?> 
                  <div class="card">
                    <div class="card-header ">
                      <h4>Section</h4>
                    </div>
                    <div class="card-body" >
                      <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea style="height:100px;" class="form-control" id="deskripsi" name="deskripsi" value="<?= $section['deskripsi']; ?>"><?= $section['deskripsi']; ?></textarea>
                      </div>
                      <div class="form-group">
                          <input type="hidden" value="<?= $section['id']; ?>">
                          <label for="">Nomor Whatsapp</label>
                          <input type="text" class="form-control" id="no_wa" name="no_wa" value="<?= $section['no_wa']; ?>">
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                  </div>
                </form>

            </div>

<?= $this->endSection(); ?> 