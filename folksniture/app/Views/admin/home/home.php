<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Header</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="judul_satu" placeholder="Judul Pertama">
                      </div>
                      <div class="form-group col-md-6">                        
                        <input type="text" class="form-control" id="judul_dua" placeholder="Judul Kedua">
                      </div>
                    </div>        
                    <div class="form-group">
                      <textarea style="height:100px;" class="form-control" placeholder="Keterangan Header"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul_satu" placeholder="Nomor Whatsapp">
                      </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Pilih foto header</label>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h4> Benefit</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <textarea style="height:100px;" class="form-control" placeholder="Benefit 1"></textarea>
                      </div>
                      <div class="form-group col-md-6">                        
                      <textarea style="height:100px;" class="form-control" placeholder="Benefit 2"></textarea>
                      </div>
                    </div>    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <textarea style="height:100px;" class="form-control" placeholder="Benefit 3"></textarea>
                      </div>
                      <div class="form-group col-md-6">                        
                      <textarea style="height:100px;" class="form-control" placeholder="Benefit 4"></textarea>
                      </div>
                    </div>   
                  
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>

            </div>

<?= $this->endSection(); ?> 