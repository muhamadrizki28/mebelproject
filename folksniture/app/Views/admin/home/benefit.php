<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
              <div class="col-12">

              <form action="">
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
                        </div>
                    </div>
              </form>

                

            </div>

<?= $this->endSection(); ?> 