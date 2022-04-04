<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
              <div class="col-12">
                
                  <?= csrf_field(); ?> 

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
                              <select class="form-control form-control-sm">
                                <option value="Bangku">Bangku</option>
                                <option value="Lemari">Lemari</option>
                                <option value="Meja">Meja</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                            </div>
                            <div class="form-group" style="width: 100%;" >
                                <label for="formGroupExampleInput">Ubah Foto</label>
                                <input type="file" value="" name="img_ben1" class="form-control">
                            </div>
                            
                          </div>
                          <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </div>
                </form>
                
                </div>

        </div>


<?= $this->endSection(); ?> 