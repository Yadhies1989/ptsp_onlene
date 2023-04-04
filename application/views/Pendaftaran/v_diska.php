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
              <li class="breadcrumb-item active">Dispensasi Kawin</li>
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
          <h3 class="card-title">Pendaftaran Dispensasi Kawin</h3>
          <div class="card-tools">
            <!-- <button data-toggle="modal" data-target="#add-diska" class="btn btn-tool"><i class="fas fa-plus"></i></button> -->
            <a href="<?php echo base_url('pendaftaran/add_pendaftaran_diska/') ?>" class="btn btn-tool btn-sm"><i class="fas fa-plus"></i></a>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->

          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="example1">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Wilayah KUA</th>
                  <th scope="col">Anak yang kurang umur</th>
                  <th scope="col">Tanggal Daftar</th>
                  <th scope="col">Nama Pemohon 1</th>
                  <th scope="col">Nama Pemohon 2</th>
                  <th scope="col">Nama Anak</th>
                  <th scope="col">Nama Calon</th>
                  <th scope="col">Download Permohonan</th>
                  <th scope="col">Kelengkapan Dokumen</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($data as $hasil) : ?>
                  <tr>
                    <td><?php echo $no++  ?></td>
                    <td><?php echo $hasil['kode_kua'] ?></td>
                    <td><?php echo $hasil['jenis_permohonan'] ?></td>
                    <td><?php echo tanggal_indonesia_lengkap($hasil['tgl_daftar']); ?></td>
                    <td><?php echo $hasil['nama_p1'] ?></td>
                    <td><?php echo $hasil['nama_p2'] ?></td>
                    <td><?php echo $hasil['nama_anak'] ?></td>
                    <td><?php echo $hasil['nama_calon'] ?></td>
                    <td width="150px">
                        <a href="<?php echo base_url('pendaftaran/print_rtf_diska/' . $hasil['id_diska']) ?>" class="btn btn-primary btn-sm" title="Print Permohonan"><i class="fas fa-print"></i></a>
                    </td>
                    <td width="150px">
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        <?php if($hasil['file_ktp_p1'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_ktp_p2'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_kk'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_akta_anak'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_akta_calon'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_ijazah_anak'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                      </div>
                      KTP P1
                      <?php if($hasil['file_ktp_p1'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_p1/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KTP P1"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_p1/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KTP P1"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      KTP P2
                      <?php if($hasil['file_ktp_p2'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_p2/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KTP P2"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_p2/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KTP P2"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      KK
                      <?php if($hasil['file_kk'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_kk/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_kk/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      Akta Lahir Anak
                      <?php if($hasil['file_akta_anak'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_al_anak/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_al_anak/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      Akta Lahir Calon
                      <?php if($hasil['file_akta_calon'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_al_calon/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_al_calon/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      Ijazah Anak
                      <?php if($hasil['file_ijazah_anak'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_ijazah_anak/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_ijazah_anak/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                    </td>
                    <td width="150px">
                      <a href="<?php echo base_url('pendaftaran/edit_pendaftaran_diska/' .$hasil['id_diska']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      <button data-toggle="modal" data-target="#delete-data<?= $hasil['id_diska']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
  <!-- <div class="modal fade" id="add-diska" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5><i class="fas fa-plus-square"></i> Tambah Pendaftaran Dispensasi Kawin</h5>
        </div>
        <form method="post" action="<?php echo base_url('pendaftaran/proses_input_data_diska') ?>" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group row">
              <div class="row col-12">
                <label for="nama_p1" class="col-sm-4 col-form-label col-form-label-sm">Nama Pemohon 1</label>
                <div class="col-sm-4">
                  <input type="text" placeholder="Pemohon 1" class="form-control form-control-sm" name="nama_p1" required>
                </div>
                <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">bin</label>
                <div class="col-sm-3">
                  <input type="text" placeholder="Nama Ayah" class="form-control form-control-sm" name="nama_ayah_p1" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="ttl_p1" class="col-sm-4 col-form-label col-form-label-sm">TTL</label>
                <div class="col-sm-3">
                  <input type="text" placeholder="Tempat Lahir" class="form-control form-control-sm" name="tempat_lahir_p1" required>
                </div>
                <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                <div class="col-sm-4">
                  <input type="date" class="form-control form-control-sm" name="tgl_lahir_p1" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="nik_p1" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                <div class="col-sm-8">
                  <input type="text" placeholder="NIK" class="form-control form-control-sm" name="nik_p1" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="tgl_nik_p1" class="col-sm-4 col-form-label col-form-label-sm">Tanggal KTP</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control form-control-sm" name="tgl_nik_p1" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="agama_p1" class="col-sm-4 col-form-label col-form-label-sm">Agama</label>
                <div class="col-sm-8">
                  <select class="form-control custom-select" name="agama_p1" required>
                    <option selected disabled>---Pilih---</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Budha</option>
                    <option>Hindu</option>
                    <option>Konghuchu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="pendidikan_p1" class="col-sm-4 col-form-label col-form-label-sm">Pendidikan</label>
                <div class="col-sm-8">
                  <select class="form-control custom-select" name="pendidikan_p1" required>
                    <option selected disabled>---Pilih---</option>
                    <option>Tidak/Belum Sekolah</option>
                    <option>Tamat SD/Sederajat</option>
                    <option>SLTP/Sederajat</option>
                    <option>SLTA/Sederajat</option>
                    <option>Diploma I/II</option>
                    <option>Akademi/Diploma III/S. Muda</option>
                    <option>Diploma IV/Strata I</option>
                    <option>Strata II</option>
                    <option>Strata III</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="pekerjaan_p1" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" placeholder="Pekerjaan" class="form-control form-control-sm" name="pekerjaan_p1" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="alamat_p1" class="col-sm-12 col-form-label col-form-label-sm">Alamat</label>
                <div class="col-sm-12">
                  <input type="text" placeholder="Nama Jalan / Nama Dusun" class="form-control form-control-sm" name="nama_jalan" required>
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="RT" class="form-control form-control-sm" name="rt" required>
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="RW" class="form-control form-control-sm" name="rw" required>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="Desa/Kelurahan" class="form-control form-control-sm" name="kelurahan" required>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="Kecamatan" class="form-control form-control-sm" name="kecamatan" required>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="Kota/Kabupaten" class="form-control form-control-sm" name="kota" required>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="Provinsi" class="form-control form-control-sm" name="provinsi" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="nama_p2" class="col-sm-4 col-form-label col-form-label-sm">Nama Pemohon 2</label>
                <div class="col-sm-4">
                  <input type="text" placeholder="Pemohon 2" class="form-control form-control-sm" name="nama_p2" required>
                </div>
                <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">binti</label>
                <div class="col-sm-3">
                  <input type="text" placeholder="Nama Ayah" class="form-control form-control-sm" name="nama_ayah_p2" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="ttl_p2" class="col-sm-4 col-form-label col-form-label-sm">TTL</label>
                <div class="col-sm-3">
                  <input type="text" placeholder="Tempat Lahir" class="form-control form-control-sm" name="tempat_lahir_p2" required>
                </div>
                <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                <div class="col-sm-4">
                  <input type="date" class="form-control form-control-sm" name="tgl_lahir_p2" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="nik_p2" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                <div class="col-sm-8">
                  <input type="text" placeholder="NIK" class="form-control form-control-sm" name="nik_p2" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="agama_p2" class="col-sm-4 col-form-label col-form-label-sm">Agama</label>
                <div class="col-sm-8">
                  <select class="form-control custom-select" name="agama_p2" required>
                    <option selected disabled>---Pilih---</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Budha</option>
                    <option>Hindu</option>
                    <option>Konghuchu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="pendidikan_p2" class="col-sm-4 col-form-label col-form-label-sm">Pendidikan</label>
                <div class="col-sm-8">
                  <select class="form-control custom-select" name="pendidikan_p2" required>
                    <option selected disabled>---Pilih---</option>
                    <option>Tidak/Belum Sekolah</option>
                    <option>Tamat SD/Sederajat</option>
                    <option>SLTP/Sederajat</option>
                    <option>SLTA/Sederajat</option>
                    <option>Diploma I/II</option>
                    <option>Akademi/Diploma III/S. Muda</option>
                    <option>Diploma IV/Strata I</option>
                    <option>Strata II</option>
                    <option>Strata III</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="pekerjaan_p2" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" placeholder="Pekerjaan" class="form-control form-control-sm" name="pekerjaan_p2" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="alamat_p2" class="col-sm-12 col-form-label col-form-label-sm">Alamat</label>
                <div class="col-sm-12">
                  <input type="text" placeholder="Nama Jalan / Nama Dusun" class="form-control form-control-sm" name="nama_jalan_p2" required>
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="RT" class="form-control form-control-sm" name="rt_p2 required>
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="RW" class="form-control form-control-sm" name="rw_p2" required>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="Desa/Kelurahan" class="form-control form-control-sm" name="kelurahan_p2" required>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="Kecamatan" class="form-control form-control-sm" name="kecamatan_p2" required>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="Kota/Kabupaten" class="form-control form-control-sm" name="kota_p2" required>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="Provinsi" class="form-control form-control-sm" name="provinsi_p2" required>
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
  </div> -->
 
  <!-- Modal Hapus-->
  <?php foreach ($data as $hasil) : ?>
    <div class="modal fade" id="delete-data<?= $hasil['id_diska']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5><i class="fas fa-trash"></i> Hapus Data Ini</h5>
          </div>
          <form class="form-horizontal" action="<?php echo site_url('pendaftaran/delete_data_diska/' . $hasil['id_diska']); ?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <p>Apakah Anda Ingin Menghapus Data <strong><?= $hasil['nama_p1']; ?></strong> ?</p>
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