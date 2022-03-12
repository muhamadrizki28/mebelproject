<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
              <div class="col-12">
                <div class="card">
                <div class="card">
                  <div class="card-header">
                    <h4>Header</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="judul_satu" placeholder="Judul Pertama">
                      </div>
                      <div class="form-group col-md-6">                        
                        <input type="email" class="form-control" id="judul_dua" placeholder="Judul Kedua">
                      </div>
                    </div>        
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea style="height:100px;" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
                  
                </div>
              </div>
            </div>

<?= $this->endSection(); ?> 