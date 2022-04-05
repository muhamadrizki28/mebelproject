<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
             <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('gagal');?>
                    </div>
                  <?php } ?>
            
              <div class="col-12">
                
                
                <form action="/product/update/1" method="POST"> 
                  <?= csrf_field(); ?> 
                <div class="card">

                  <div class="card-header ">
                    <h4>Judul Product</h4>
                  </div>
                  
                  <div class="card-body" >
                  <div class="form-group">
                    <label for="">judul</label>
                    <input type="hidden" value="<?= $judproduct['id']; ?>">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $judproduct['judul']; ?>">
                    </div>
                    <div class="form-group">
                    <label for="">deskripsi</label>
                      <textarea style="height:100px;" class="form-control" id="deskripsi" name="deskripsi" value="<?= $judproduct['deskripsi']; ?>"><?= $judproduct['deskripsi']; ?></textarea>
                    </div>
                    
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  </div>
                </div>
                </form>


                  <div class="row">
                    <?php foreach ($product as $h) : ?>
                      <div class="col-12 col-md-6 col-lg-3">
                        <div class="card card-primary">
                          <div class="card-header galleryy">
                            <h4><?= $h['jenis']; ?></h4>
                            <a href="/Product/delete/<?= $h['id'] ?> "><abbr title="Hapus"><img src="/assets/img/icon/delete.png" alt=""></abbr></a>
                          </div>
                          <div class="card-body gal" style="background-image: url(/assets/img/<?= $h['img']; ?>);">
                            
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>

                  <form action="/product/save" method="POST" enctype="multipart/form-data">
                        <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                              <label>Jenis </label>
                              <select class="form-control form-control-sm" name="jenis" required>
                                <option  value="Bangku">Bangku</option>
                                <option value="Lemari">Lemari</option>
                                <option value="Meja">Meja</option>
                                <option value="lainnya">lainnya</option>
                              </select>
                            </div>
                            <div class="form-group" style="width: 100%;" >
                                <label for="formGroupExampleInput">Ubah Foto</label>
                                <input type="file" value="" name="img" class="form-control">
                            </div>
                          </div>
                          <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </div>
                  </form>
                
               

        </div>


<?= $this->endSection(); ?> 