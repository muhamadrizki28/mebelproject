<?= $this->extend('admin/template/v_template_admin'); ?>

<?= $this->section('content_admin'); ?>

<div class="row">
    
              <div class="col-12">
                
                <form action="/admin/save" method="POST"> 
                  <?= csrf_field(); ?> 
                <div class="card">
                  <div class="card-header">
                    <h4>Header</h4>
                  </div>
                  
                  <div class="card">
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($header as $h) : ?>
                        <tr>
                          <th scope="row">1</th>
                          <td><?= $h['judul_1']; ?></td>
                          <td><?= $h['judul_2']; ?></td>
                          <td><a href="/admin/edit/<?= $h['id'] ?> "><b>EDIT</b></a></td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>

                
                  </div>
                 
                </div>

            </div>

<?= $this->endSection(); ?> 