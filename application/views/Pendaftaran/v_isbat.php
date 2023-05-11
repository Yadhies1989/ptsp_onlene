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
              <li class="breadcrumb-item active">Sidang Isbat Nikah</li>
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
          <h3 class="card-title">Pendaftaran Sidang Isbat Nikah</h3>
          <div class="card-tools">
            <a href="<?php echo base_url('pendaftaran/add_pendaftaran_isbat/') ?>" class="btn btn-tool">Daftar <i class="fas fa-plus-circle"></i></a>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->

          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="example1">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Daftar</th>
                  <th scope="col">Nama Pemohon 1</th>
                  <th scope="col">Nama Pemohon 2</th>
                  <th scope="col">Download Permohonan</th>
                  <th scope="col">Kelengkapan Dokumen</th>
                  <th scope="col">Catatan PA Bojonegoro</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($data as $hasil) : ?>
                  <tr>
                    <td><?php echo $no++  ?></td>
                    <td><?php echo tanggal_indonesia_lengkap($hasil['tgl_daftar']); ?></td>
                    <td><?php echo $hasil['nama_p1'] ?></td>
                    <td><?php echo $hasil['nama_p2'] ?></td>                    
                    <td width="150px">
                        <a href="<?php echo base_url('pendaftaran/print_rtf_isbat/' . $hasil['id_isbat']) ?>" class="btn btn-primary btn-sm" title="Print Permohonan"><i class="fas fa-print"></i></a>
                    </td>
                    <td width="150px">
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        <?php if($hasil['file_ktp_p1'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_ktp_p2'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_kk'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_ktp_semua_anak'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_ket_kua'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                        <?php if($hasil['file_surat_mati'] != NULL) { ?> <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                      </div>
                      KTP P1
                      <?php if($hasil['file_ktp_p1'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_p1_isbat/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KTP P1"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_p1_isbat/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KTP P1"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      KTP P2
                      <?php if($hasil['file_ktp_p2'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_p2_isbat/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KTP P2"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_p2_isbat/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KTP P2"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      KK
                      <?php if($hasil['file_kk'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_kk_isbat/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_kk_isbat/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      KTP Semua Anak
                      <?php if($hasil['file_ktp_semua_anak'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_semua_anak/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_ktp_semua_anak/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                     Ket KUA
                      <?php if($hasil['file_ket_kua'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_ket_kua/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_ket_kua/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      Surat Kematian (*)
                      <?php if($hasil['file_surat_mati'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_surat_mati/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_surat_mati/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                      <br>
                      Permohonan
                      <?php if($hasil['file_permohonan_isbat'] == NULL) { ?>
                      <a href="<?php echo base_url('pendaftaran/upload_permohonan_isbat/' .$hasil['kode']) ?>" class="btn btn-danger btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php }else{?>
                      <a href="<?php echo base_url('pendaftaran/upload_permohonan_isbat/' .$hasil['kode']) ?>" class="btn btn-success btn-xs" title="KK"><i class="fas fa-upload"></i></a>
                      <?php } ?>
                    </td>
                    <td><i style="color:red;"><?php echo $hasil['catatan_pa'] ?></i style="color:red;"></td>
                    <td width="150px">
                      <?php if($user{'role_id'} == 1){?>
                        <button data-toggle="modal" data-target="#catatan<?= $hasil['id_isbat']; ?>" class="btn btn-secondary btn-sm"><i class="fas fa-list"></i></button>
                      <?php }?>
                      <a href="<?php echo base_url('pendaftaran/edit_isbat/' .$hasil['kode']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      <button data-toggle="modal" data-target="#delete-data<?= $hasil['id_isbat']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
  <!-- Modal Catatan-->
  <?php foreach ($data as $hasil) : ?>
    <div class="modal fade" id="catatan<?= $hasil['id_isbat']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5><i class="fas fa-trash"></i> Tambahkan Catatan</h5>
          </div>
          <form class="form-horizontal" action="<?php echo site_url('pendaftaran/catatan_isbat/' . $hasil['id_isbat']); ?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group row">
                <div class="row col-12">
                  <label for="catatan_pa" class="col-sm-12 col-form-label col-form-label-sm">Catatan PA</label>
                  <div class="col-sm-12">
                    <textarea class="form-control form-control-sm" name="catatan_pa" required></textarea>
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
  <!-- Modal -->
 
  <!-- Modal Hapus-->
  <?php foreach ($data as $hasil) : ?>
    <div class="modal fade" id="delete-data<?= $hasil['id_isbat']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5><i class="fas fa-trash"></i> Hapus Data Ini</h5>
          </div>
          <form class="form-horizontal" action="<?php echo site_url('pendaftaran/delete_data_isbat/' . $hasil['id_isbat']); ?>" method="post" enctype="multipart/form-data" role="form">
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