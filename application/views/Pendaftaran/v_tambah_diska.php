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
          <h3 class="card-title">Pendaftaran Dispensasi Kawin</h3>
          <div class="card-tools">
            <button data-toggle="modal" data-target="#add-diska" class="btn btn-tool"><i class="fas fa-plus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->
          
                
                <form method="post" action="<?php echo base_url('pendaftaran/proses_input_data_diska') ?>" enctype="multipart/form-data">
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="jenis_permohonan" class="col-sm-4 col-form-label col-form-label-sm">Anak yang kurang umur</label>
                        <div class="col-sm-8">
                          <select class="form-control custom-select" name="jenis_permohonan" required>
                            <option selected disabled>---Pilih---</option>
                            <option>Anak perempuan</option>
                            <option>Anak laki-Laki</option>
                            <option>Anak perempuan dan laki-laki</option>
                          </select>
                        </div>
                      </div>
                    </div>
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
                          <input type="text" placeholder="Nama Jalan / Nama Dusun" class="form-control form-control-sm" name="nama_jalan_p1" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" placeholder="RT" class="form-control form-control-sm" name="rt_p1" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" placeholder="RW" class="form-control form-control-sm" name="rw_p1" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Desa/Kelurahan" class="form-control form-control-sm" name="kelurahan_p1" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Kecamatan" class="form-control form-control-sm" name="kecamatan_p1" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Kota/Kabupaten" class="form-control form-control-sm" name="kota_p1" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Provinsi" class="form-control form-control-sm" name="provinsi_p1" required>
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
                          <input type="text" placeholder="RT" class="form-control form-control-sm" name="rt_p2" required>
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
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="nama_anak" class="col-sm-4 col-form-label col-form-label-sm">Nama Anak</label>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Anak" class="form-control form-control-sm" name="nama_anak" required>
                        </div>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Nama Ayah" class="form-control form-control-sm" name="nama_ayah_anak" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="jk_anak" class="col-sm-4 col-form-label col-form-label-sm">Jenis Kelamin</label>
                        <div class="col-sm-8">
                          <select class="form-control custom-select" name="jk_anak" required>
                            <option selected disabled>---Pilih---</option>
                            <option>Perempuan</option>
                            <option>Laki-Laki</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="ttl_anak" class="col-sm-4 col-form-label col-form-label-sm">TTL</label>
                        <div class="col-sm-3">
                          <input type="text" placeholder="Tempat Lahir" class="form-control form-control-sm" name="tempat_lahir_anak" required>
                        </div>
                        <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control form-control-sm" name="tgl_lahir_anak" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="nik_anak" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="NIK" class="form-control form-control-sm" name="nik_anak" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="agama_anak" class="col-sm-4 col-form-label col-form-label-sm">Agama</label>
                        <div class="col-sm-8">
                          <select class="form-control custom-select" name="agama_anak" required>
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
                        <label for="pendidikan_anak" class="col-sm-4 col-form-label col-form-label-sm">Pendidikan</label>
                        <div class="col-sm-8">
                          <select class="form-control custom-select" name="pendidikan_anak" required>
                            <option selected disabled>---Pilih---</option>
                            <option>Tidak/Belum Sekolah</option>
                            <option>Tamat SD/Sederajat</option>
                            <option>SLTP/Sederajat</option>
                            <option>SLTA/Sederajat</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="pekerjaan_anak" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="Pekerjaan" class="form-control form-control-sm" name="pekerjaan_anak" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="penghasilan_anak" class="col-sm-4 col-form-label col-form-label-sm">Penghasilan Anak</label>
                        <label class="col-sm-1 col-form-label col-form-label-sm">Rp</label>
                        <div class="col-sm-7">
                          <input type="text" placeholder="Penghasilan Anak" class="form-control form-control-sm" name="penghasilan_anak" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="alamat_anak" class="col-sm-12 col-form-label col-form-label-sm">Alamat</label>
                        <div class="col-sm-6">
                          <input type="text" placeholder="Nama Jalan / Nama Dusun" class="form-control form-control-sm" name="nama_jalan_anak" required>
                        </div>
                        <div class="col-sm-3">
                          <input type="text" placeholder="RT" class="form-control form-control-sm" name="rt_anak" required>
                        </div>
                        <div class="col-sm-3">
                          <input type="text" placeholder="RW" class="form-control form-control-sm" name="rw_anak" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Desa/Kelurahan" class="form-control form-control-sm" name="kelurahan_anak" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Kecamatan" class="form-control form-control-sm" name="kecamatan_anak" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Kota/Kabupaten" class="form-control form-control-sm" name="kota_anak" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Provinsi" class="form-control form-control-sm" name="provinsi_anak" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="nama_calon" class="col-sm-4 col-form-label col-form-label-sm">Nama Calon</label>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Anak" class="form-control form-control-sm" name="nama_calon" required>
                        </div>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Nama Ayah" class="form-control form-control-sm" name="nama_ayah_calon" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="jk_calon" class="col-sm-4 col-form-label col-form-label-sm">Jenis Kelamin</label>
                        <div class="col-sm-8">
                          <select class="form-control custom-select" name="jk_calon" required>
                            <option selected disabled>---Pilih---</option>
                            <option>Perempuan</option>
                            <option>Laki-Laki</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="ttl_calon" class="col-sm-4 col-form-label col-form-label-sm">TTL</label>
                        <div class="col-sm-3">
                          <input type="text" placeholder="Tempat Lahir" class="form-control form-control-sm" name="tempat_lahir_calon" required>
                        </div>
                        <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control form-control-sm" name="tgl_lahir_calon" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="nik_calon" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="NIK" class="form-control form-control-sm" name="nik_calon" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="agama_calon" class="col-sm-4 col-form-label col-form-label-sm">Agama</label>
                        <div class="col-sm-8">
                          <select class="form-control custom-select" name="agama_calon" required>
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
                        <label for="pendidikan_calon" class="col-sm-4 col-form-label col-form-label-sm">Pendidikan</label>
                        <div class="col-sm-8">
                          <select class="form-control custom-select" name="pendidikan_calon" required>
                            <option selected disabled>---Pilih---</option>
                            <option>Tidak/Belum Sekolah</option>
                            <option>Tamat SD/Sederajat</option>
                            <option>SLTP/Sederajat</option>
                            <option>SLTA/Sederajat</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="pekerjaan_calon" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="Pekerjaan" class="form-control form-control-sm" name="pekerjaan_calon" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="alamat_calon" class="col-sm-12 col-form-label col-form-label-sm">Alamat</label>
                        <div class="col-sm-6">
                          <input type="text" placeholder="Nama Jalan / Nama Dusun" class="form-control form-control-sm" name="nama_jalan_calon" required>
                        </div>
                        <div class="col-sm-3">
                          <input type="text" placeholder="RT" class="form-control form-control-sm" name="rt_calon" required>
                        </div>
                        <div class="col-sm-3">
                          <input type="text" placeholder="RW" class="form-control form-control-sm" name="rw_calon" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Desa/Kelurahan" class="form-control form-control-sm" name="kelurahan_calon" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Kecamatan" class="form-control form-control-sm" name="kecamatan_calon" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Kota/Kabupaten" class="form-control form-control-sm" name="kota_calon" required>
                        </div>
                        <div class="col-sm-12">
                          <input type="text" placeholder="Provinsi" class="form-control form-control-sm" name="provinsi_calon" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="penghasilan_calon" class="col-sm-4 col-form-label col-form-label-sm">Penghasilan Calon</label>
                        <label class="col-sm-1 col-form-label col-form-label-sm">Rp</label>
                        <div class="col-sm-7">
                          <input type="text" placeholder="Penghasilan Calon" class="form-control form-control-sm" name="penghasilan_calon" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="lama_mengenal_calon" class="col-sm-4 col-form-label col-form-label-sm">Lama Mengenal</label>
                        <div class="col-sm-7">
                          <input type="text" placeholder="Lama Mengenal Calon" class="form-control form-control-sm" name="lama_mengenal_calon" required>
                        </div>
                        <label class="col-sm-1 col-form-label col-form-label-sm">Tahun</label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row col-12">
                        <label for="tgl_lamaran" class="col-sm-4 col-form-label col-form-label-sm">Tanggal Lamaran</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control form-control-sm" name="tgl_lamaran" required>
                        </div>
                      </div>
                    </div>
                  <div class="footer justify-content-between">
                    <button class="btn btn-success btn-lg" type="submit"><i class="fas fa-save"></i></button>
                    <a href="<?php echo base_url('pendaftaran/diska') ?>" class="btn btn-danger btn-lg"><i class="fas fa-window-close"></i></a>
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