  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Blank Page</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Petugas PTSP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Team Pelayanan Terpadu Satu Pintu</h3>
          <div class="card-tools">
            <button  data-toggle="modal" data-target="#tambah-data" class="btn btn-tool"><i class="fas fa-plus"></i></button>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button> -->
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->
              
              <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Loket</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Created</th>
                      <th scope="col">Updated</th>
                      <th scope="col">Aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php  
                  $no=1;
                  foreach ($data as $hasil) : ?>
                    <tr>
                      <td><?php echo $no++  ?></td>
                      <td><img src="<?php echo base_url('assets/img/profile/') . $hasil['image']; ?>" height="100"></td>
                      <td><?php echo $hasil['nama']?></td>
                      <td><?php echo $hasil['loket']?></td>
                      <td><?php echo $hasil['deskripsi']?></td>
                      <td><?php echo $hasil['created_at']?></td>
                      <td><?php echo $hasil['updated_at']?></td>
                      <td>
                        <button  data-toggle="modal" data-target="#update-data<?=$hasil['id_petugas'];?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <button  data-toggle="modal" data-target="#delete-data<?=$hasil['id_petugas'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                      
                    </tr>
                  <?php endforeach;  ?>
                  </tbody>
                  </table>   
              </div>
         <!-- batas bawah -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</body>
</html>
<!-- Modal Add-->
<div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5><i class="fas fa-id-card"></i> Tambah Petugas PTSP</h5>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url('petugas/add') ?>" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group row">
              <label for="nama" class="col-sm-5 col-form-label">Nama</label>
              <div class="col-sm-7">
                  <input type="text" class="form-control" id="nama" placeholder="Nama Petugas" name="nama" onkeyup="this.value = this.value.toUpperCase()" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="loket" class="col-sm-5 col-form-label">Loket</label>
              <div class="col-sm-7">
                  <select name="loket" class="form-control" required>
                      <option value="">--PILIH--</option>
                      <option value="Produk Pengadilan">Produk Pengadilan</option>
                      <option value="Kasir">Kasir</option>
                      <option value="Pendaftaran">Pendaftaran</option>
                      <option value="Informasi dan Pengaduan">Informasi dan Pengaduan</option>
                      <option value="eCourt">eCourt</option>
                  </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="deskripsi" class="col-sm-5 col-form-label">Deskripsi</label>
              <div class="col-sm-7">
                  <textarea type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi"></textarea>
              </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button class="btn btn-success btn-lg" type="submit"><i class="fas fa-save"></i></button>
        </div>
    </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
<!-- Modal Update-->
<?php foreach ($data as $hasil) : ?>
<div class="modal fade bd-example-modal-lg" id="update-data<?=$hasil['id_petugas'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5><i class="fas fa-id-card"></i> Update Petugas PTSP</h5>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url('petugas/update') ?>" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group row">
              <div class="col-sm-2"><strong>Picture</strong></div>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="<?php echo base_url('assets/img/profile/') . $hasil['image']; ?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="image">Pilih Gambar</label>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-5 col-form-label">Nama</label>
              <div class="col-sm-7">
                  <input type="text" class="form-control" id="nama" placeholder="Nama Petugas" name="nama" onkeyup="this.value = this.value.toUpperCase()" value="<?= $hasil['nama']; ?>" required>
                  <input type="hidden" name="id_petugas" value="<?=$hasil['id_petugas'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="loket" class="col-sm-5 col-form-label">Loket</label>
              <div class="col-sm-7">
                  <select name="loket" class="form-control" value="<?= $hasil['loket']; ?>" required>
                      <option <?php if ($hasil['loket'] == "Produk Pengadilan") {
                                  echo "selected='selected'";
                              }
                              echo $hasil['loket']; ?> value="Produk Pengadilan">
                          Produk Pengadilan
                      </option>
                      <option <?php if ($hasil['loket'] == "Kasir") {
                                  echo "selected='selected'";
                              }
                              echo $hasil['loket']; ?> value="Kasir">
                          Kasir
                      </option>
                      <option <?php if ($hasil['loket'] == "Pendaftaran") {
                                  echo "selected='selected'";
                              }
                              echo $hasil['loket']; ?> value="Pendaftaran">
                          Pendaftaran
                      </option>
                      <option <?php if ($hasil['loket'] == "Informasi dan Pengaduan") {
                                  echo "selected='selected'";
                              }
                              echo $hasil['loket']; ?> value="Informasi dan Pengaduan">
                          Informasi dan Pengaduan
                      </option>
                      <option <?php if ($hasil['loket'] == "eCourt") {
                                  echo "selected='selected'";
                              }
                              echo $hasil['loket']; ?> value="eCourt">
                          eCourt
                      </option>
                  </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="deskripsi" class="col-sm-5 col-form-label">Deskripsi</label>
              <div class="col-sm-7">
                  <textarea type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi"><?= $hasil['deskripsi']; ?></textarea>
              </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button class="btn btn-success btn-lg" type="submit"><i class="fas fa-save"></i></button>
        </div>
    </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
<?php endforeach;  ?>
<!-- Modal Hapus-->
<?php foreach ($data as $hasil) : ?>
        <div class="modal fade" id="delete-data<?= $hasil['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5><i class="fas fa-trash"></i> Hapus Data</h5>
                    </div>
                    <form class="form-horizontal" action="<?php echo site_url('petugas/delete/' . $hasil['id_petugas']); ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body">
                            <p>Apakah Anda Ingin Menghapus Data <strong><?php echo $hasil['nama']; ?></strong> ?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button class="btn btn-danger btn-lg" type="submit"><i class="fas fa-trash"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach;  ?>
<!-- Modal -->
