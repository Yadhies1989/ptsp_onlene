  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4><?php echo $title ?></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Petugas PTSP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"> </div>
      <div class="nama-menu" data-namamenu="<?php echo $this->session->flashdata('nama_menu')  ?>"></div>
      <!-- Default box -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Team Pelayanan Terpadu Satu Pintu</h3>
          <div class="card-tools">
            <button data-toggle="modal" data-target="#add-petugas" class="btn btn-tool"><i class="fas fa-plus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->

          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="example1">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Loket</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($data as $hasil) : ?>
                  <tr>
                    <td><?php echo $no++  ?></td>
                    <td><?php echo $hasil['nama'] ?></td>
                    <td><?php echo $hasil['loket'] ?></td>
                    <td><?php echo $hasil['deskripsi'] ?></td>
                    <td><img src="<?php echo base_url('assets/img/profile/') . $hasil['image']; ?>" height="100"></td>
                    <td>
                      <button data-toggle="modal" data-target="#update-data<?= $hasil['id_petugas']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                      <button data-toggle="modal" data-target="#delete-data<?= $hasil['id_petugas']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </td>

                  </tr>
                <?php endforeach;  ?>
              </tbody>
            </table>
          </div>
          <!-- batas bawah -->
        </div>
        <!-- /.card-body -->
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
  <div class="modal fade" id="add-petugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5><i class="fas fa-plus-square"></i> Tambah Data Petugas PTSP</h5>
        </div>
        <form method="post" action="<?php echo base_url('petugas/proses_input_data_ptgs') ?>" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group row">
              <div class="row col-12">
                <label for="nama" class="col-sm-5 col-form-label col-form-label-sm">Nama Petugas PTSP</label>
                <div class="col-sm-7">
                  <input type="text" placeholder="Nama Petugas PTSP" class="form-control form-control-sm" id="nama" name="nama" onkeyup="this.value = this.value.toUpperCase()" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="loket" class="col-sm-5 col-form-label col-form-label-sm">Nama Loket</label>
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
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="deskripsi" class="col-sm-5 col-form-label col-form-label-sm">Deskripsi Tugas</label>
                <div class="col-sm-7">
                  <textarea class="form-control form-control-sm" name="deskripsi" id="deskripsi" rows="3"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="image" class="col-sm-5 col-form-label col-form-label-sm">Upload Foto</label>
                <div class="col-sm-7">
                  <input type="file" class="form-control form-control-sm" id="image" name="image" required>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button class="btn btn-success btn-lg" type="submit"><i class="fas fa-save"></i></button>
            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Update-->
  <?php foreach ($data as $hasil) : ?>
    <div class="modal fade" id="update-data<?= $hasil['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5><i class="fas fa-plus-square"></i> Update Data Petugas PTSP</h5>
          </div>
          <form method="post" action="<?php echo base_url('petugas/proses_update_data_ptgs') ?>" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group row">
                <div class="row col-12">
                  <label for="nama" class="col-sm-5 col-form-label col-form-label-sm">Foto Petugas</label>
                  <div class="col-sm-7">
                    <img src="<?php echo base_url('assets/img/profile/') . $hasil['image']; ?>" class="img-thumbnail" width="100" height="200">
                    <input type="hidden" name="id_petugas" value="<?= $hasil['id_petugas']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="row col-12">
                  <label for="nama" class="col-sm-5 col-form-label col-form-label-sm">Nama Petugas PTSP</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $hasil['nama']; ?>" class="form-control form-control-sm" id="nama" name="nama" onkeyup="this.value = this.value.toUpperCase()" required>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="row col-12">
                  <label for="loket" class="col-sm-5 col-form-label col-form-label-sm">Nama Loket</label>
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
              </div>
              <div class="form-group row">
                <div class="row col-12">
                  <label for="deskripsi" class="col-sm-5 col-form-label col-form-label-sm">Deskripsi Tugas</label>
                  <div class="col-sm-7">
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"><?= $hasil['deskripsi']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="row col-12">
                  <label for="image" class="col-sm-5 col-form-label col-form-label-sm">Upload Foto</label>
                  <div class="col-sm-7">
                    <input type="file" class="form-control form-control-sm" id="image" name="image" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button class="btn btn-success btn-lg" type="submit"><i class="fas fa-save"></i></button>
              <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
            </div>
          </form>
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
            <h5><i class="fas fa-trash"></i> Hapus Data Petugas PTSP</h5>
          </div>
          <form class="form-horizontal" action="<?php echo site_url('petugas/delete_data/' . $hasil['id_petugas']); ?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <p>Apakah Anda Ingin Menghapus Data <strong><?= $hasil['nama']; ?></strong> ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button class="btn btn-danger btn-lg" type="submit"><i class="fas fa-trash"></i></button>
              <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach;  ?>
  <!-- Modal -->