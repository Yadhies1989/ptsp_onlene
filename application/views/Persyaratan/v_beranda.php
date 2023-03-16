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
              <li class="breadcrumb-item active">Manajemen Persyaratan Berperkara</li>
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
          <h3 class="card-title">Persyaratan Berperkara PA Bojonegoro</h3>
          <div class="card-tools">
            <button data-toggle="modal" data-target="#add-persyaratan" class="btn btn-tool"><i class="fas fa-plus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->

          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="example1">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Perkara</th>
                  <th scope="col">Syarat Berperkara</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($data as $hasil) : ?>
                  <tr>
                    <td><?php echo $no++  ?></td>
                    <td><?php echo $hasil['nama_perkara'] ?></td>
                    <td><?php echo $hasil['syarat_perkara'] ?></td>
                    <td>
                      <a href="<?php echo base_url('informasi/edit_update_data_persyaratan/' .$hasil['id_persyaratan']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      <button data-toggle="modal" data-target="#delete-data<?= $hasil['id_persyaratan']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
  <div class="modal fade" id="add-persyaratan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h5><i class="fas fa-plus-square"></i> Tambah Data Persyaratan Berperkara</h5>
        </div>
        <form method="post" action="<?php echo base_url('informasi/proses_input_data_persyaratan') ?>" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group row">
              <div class="row col-12">
                <label for="nama_perkara" class="col-sm-5 col-form-label col-form-label-sm">Nama Perkara</label>
                <div class="col-sm-7">
                  <input type="text" placeholder="Nama Perkara" class="form-control form-control-sm" id="nama_perkara" name="nama_perkara" onkeyup="this.value = this.value.toUpperCase()" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="row col-12">
                <label for="syarat_perkara" class="col-sm-5 col-form-label col-form-label-sm">Isi Persyaratan</label>
                <div class="col-sm-7">
                  <input name="about" type="hidden">
                  <div id="editor-container">
                    <div id="editor"></div>
                  </div>
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
 
  <!-- Modal Hapus-->
  <?php foreach ($data as $hasil) : ?>
    <div class="modal fade" id="delete-data<?= $hasil['id_persyaratan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5><i class="fas fa-trash"></i> Hapus Data Persyaratan Berperkara</h5>
          </div>
          <form class="form-horizontal" action="<?php echo site_url('informasi/delete_data_persyaratan/' . $hasil['id_persyaratan']); ?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <p>Apakah Anda Ingin Menghapus Data <strong><?= $hasil['nama_perkara']; ?></strong> ?</p>
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

  <!-- Include stylesheet -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <!-- Initialize Quill editor -->
  <script>
    var quill = new Quill('#editor', {
      modules: {
        toolbar: [
          ['bold', 'italic'],
          [{ list: 'ordered' }, { list: 'bullet' }]
        ]
      },
      placeholder: 'Masukkan detail persyaratan..',
      theme: 'snow'
    });
    var form = document.querySelector('form');
    form.onsubmit = function() {
      var about = document.querySelector('input[name=about]');
      about.value = JSON.stringify(quill.root.innerHTML);
    };
    
  </script>