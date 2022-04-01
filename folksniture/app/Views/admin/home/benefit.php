<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
              <div class="col-12">

              <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('gagal');?>
                </div>
            <?php } ?>

                <form action="/benefit/updateimg1/1" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4> Benefit 1</h4>
                            </div>
                            <div class="card-body" style="display: flex;" > 
                                <div class="card-body" > 
                                    <div class="form-group"> 
                                        <label for="">Keunggulan 1</label>                       
                                        <textarea style="height:200px;" class="form-control" value="<?= $benefit['ben1']; ?>" name="ben1" placeholder=""><?= $benefit['ben1']; ?></textarea> 
                                    </div>
                                </div>
                                <div class="card-body col-md-4" >
                                    <div class="foto-dashboard" style="background-image: url(/assets/img/<?= $benefit['img_ben1']; ?>);">
                                        <!-- <img src="/assets/img/" alt="">  -->
                                    </div>
                                    <div class="form-group" style="width: 100%;" >
                                        <label for="formGroupExampleInput">Ubah Foto</label>
                                        <input type="file" value="<?= $benefit['img_ben1']; ?>" name="img_ben1" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </div>
                </form>

                <form action="/benefit/updateimg2/1" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4> Benefit 2</h4>
                            </div>
                            <div class="card-body" style="display: flex;" > 
                                <div class="card-body" > 
                                    <div class="form-group"> 
                                        <label for="">Keunggulan 2</label>                       
                                        <textarea style="height:200px;" class="form-control" value="<?= $benefit['ben2']; ?>" name="ben2" placeholder=""><?= $benefit['ben2']; ?></textarea> 
                                    </div>
                                </div>
                                <div class="card-body col-md-4" >
                                    <div class="foto-dashboard" style="background-image: url(/assets/img/<?= $benefit['img_ben2']; ?>);">
                                        <!-- <img src="/assets/img/" alt="">  -->
                                    </div>
                                    <div class="form-group" style="width: 100%;" >
                                        <label for="formGroupExampleInput">Ubah Foto</label>
                                        <input type="file" value="<?= $benefit['img_ben2']; ?>" name="img_ben2" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </div>
                </form>

                <form action="/benefit/updateimg3/1" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4> Benefit 3</h4>
                            </div>
                            <div class="card-body" style="display: flex;" > 
                                <div class="card-body" > 
                                    <div class="form-group"> 
                                        <label for="">Keunggulan 3</label>                       
                                        <textarea style="height:200px;" class="form-control" value="<?= $benefit['ben3']; ?>" name="ben3" placeholder=""><?= $benefit['ben3']; ?></textarea> 
                                    </div>
                                </div>
                                <div class="card-body col-md-4" >
                                    <div class="foto-dashboard" style="background-image: url(/assets/img/<?= $benefit['img_ben3']; ?>);">
                                        <!-- <img src="/assets/img/" alt="">  -->
                                    </div>
                                    <div class="form-group" style="width: 100%;" >
                                        <label for="formGroupExampleInput">Ubah Foto</label>
                                        <input type="file" value="<?= $benefit['img_ben3']; ?>" name="img_ben3" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </div>
                </form>

                <form action="/benefit/updateimg4/1" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4> Benefit 4</h4>
                            </div>
                            <div class="card-body" style="display: flex;" > 
                                <div class="card-body" > 
                                    <div class="form-group"> 
                                        <label for="">Keunggulan 4</label>                       
                                        <textarea style="height:200px;" class="form-control" value="<?= $benefit['ben4']; ?>" name="ben4" placeholder=""><?= $benefit['ben4']; ?></textarea> 
                                    </div>
                                </div>
                                <div class="card-body col-md-4" >
                                    <div class="foto-dashboard" style="background-image: url(/assets/img/<?= $benefit['img_ben4']; ?>);">
                                        <!-- <img src="/assets/img/" alt="">  -->
                                    </div>
                                    <div class="form-group" style="width: 100%;" >
                                        <label for="formGroupExampleInput">Ubah Foto</label>
                                        <input type="file" value="<?= $benefit['img_ben4']; ?>" name="img_ben4" class="form-control">
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