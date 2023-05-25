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
              <li class="breadcrumb-item active">Pendaftaran</li>
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
          <h3 class="card-title">KTP Pemohon 2</h3>
          <div class="card-tools">
            <button data-toggle="modal" data-target="#add-isbat" class="btn btn-tool"><i class="fas fa-plus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->
          <form id="form-file" method="POST" action="<?php echo base_url('pendaftaran/proses_upload_ktp_p2_isbat/') ?>" enctype="multipart/form-data">
            <div class="card-header">
                <h5 class="card-title m-0">--Form Upload File--</h5>
                <div class="card-tools">
                    <button type="submit" class="btn btn-success btn-sm active" role="button" aria-pressed="true"><i class="fas fa-save"></i> Simpan</button>
                    <a href="<?php echo base_url('pendaftaran/sidang_isbat') ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"><i class="fas fa-backward"></i> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <?php if ($isbat['file_ktp_p2'] == NULL) : ?>
                                          <label for="image"><span style="color:red;">KTP Pemohon 2 Masih Kosong, Silahkan Upload Dengan Klik Tombol Di Bawah!</span></label>
                                        <?php else : ?>
                                            <strong> File : </strong>
                                            <a href="<?php echo base_url() . 'uploads/' . $isbat['file_ktp_p2']; ?>" target="_blank">
                                                Lihat File
                                            </a>
                                        <?php endif; ?>
                                        <br>
                                        Tipe: pdf,jpg,jpeg,JPG,JPEG atau png
                                        <br>
                                        Maks: 2Mb
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image">
                                            <input type="hidden" name="id_isbat" value="<?= $isbat['id_isbat']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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