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
        </div>
        <div class="card-body">
      <!-- Modal Update-->
        <!-- <div class="modal fade" id="update-persyaratan<?= $data['id_persyaratan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
          <!-- <div class="modal-dialog" role="document">
            <div class="modal-content"> -->
              <!-- <div class="modal-header bg-success">
                <h5><i class="fas fa-plus-square"></i> Update Data Persyaratan Berperkara</h5>
              </div> -->
              <form method="post" action="<?php echo base_url('informasi/proses_update_data_persyaratan') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group row">
                    <div class="row col-12">
                      <label for="nama_perkara" class="col-sm-5 col-form-label col-form-label-sm">Nama Perkara</label>
                      <div class="col-sm-7">
                        <input type="text" value="<?= $data['nama_perkara']; ?>" class="form-control form-control-sm" id="nama_perkara" name="nama_perkara" onkeyup="this.value = this.value.toUpperCase()" required>
                        <input type="hidden" value="<?= $data['id_persyaratan']; ?>" id="id_persyaratan" name="id_persyaratan" >
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="row col-12">
                      <label for="syarat_perkara" class="col-sm-5 col-form-label col-form-label-sm">Isi Persyaratan</label>
                      <div class="col-sm-7">
                        <input name="about_edit" type="hidden">
                        <div id="editor-container">
                          <div id="editor_edit"><?= $data['syarat_perkara']; ?></div>
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
            <!-- </div>
          </div> -->
        <!-- </div> -->
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
 

  <!-- Include stylesheet -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <!-- Initialize Quill editor -->
  <script>
    //show data to quill edit
    var container = document.getElementById('editor_edit');
    var editor = new Quill(container, {
      modules: { 
        toolbar: [
                ['bold', 'italic'],
                [{ list: 'ordered' }, { list: 'bullet' }]
              ] 
            },
        theme: 'snow'
    });
    var form_edit = document.querySelector('form');
    form_edit.onsubmit = function() {
      var about_edit = document.querySelector('input[name=about_edit]');
      about_edit.value = JSON.stringify(editor.root.innerHTML);
    };
    
    
  </script>