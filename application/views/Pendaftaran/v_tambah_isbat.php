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
          <h3 class="card-title">Pendaftaran Sidang Isbat</h3>
          <div class="card-tools">
            <a href="<?php echo base_url('pendaftaran/sidang_isbat') ?>" class="btn btn-tool"><i class="fas fa-window-close"></i></a>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->
          <form method="post" action="<?php echo base_url('pendaftaran/proses_input_data_isbat') ?>" enctype="multipart/form-data">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Pemohon 1</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nama_p1" class="col-sm-4 col-form-label col-form-label-sm">Nama Lengkap</label>
                    <div class="col-sm-4">
                      <input type="text" placeholder="Pemohon 1" class="form-control form-control-sm" name="nama_p1" required>
                    </div>
                    <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">bin/binti</label>
                    <div class="col-sm-3">
                      <input type="text" placeholder="Nama Ayah" class="form-control form-control-sm" name="nama_ayah_p1" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="jk_p1" class="col-sm-4 col-form-label col-form-label-sm">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control custom-select" name="jk_p1" required>
                        <option selected disabled>---Pilih---</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
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
                    <label for="pekerjaan_p1" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="Pekerjaan" class="form-control form-control-sm" name="pekerjaan_p1" required>
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
                    <label for="status_p1" class="col-sm-4 col-form-label col-form-label-sm">Status Sebelum Nikah</label>
                    <div class="col-sm-8">
                      <select class="form-control custom-select" name="status_p1" required>
                        <option selected disabled>---Pilih---</option>
                        <option>Perawan</option>
                        <option>Perjaka</option>
                        <option>Janda</option>
                        <option>Duda</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                    
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Pemohon 2</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                    <div class="row col-12">
                      <label for="nama_p2" class="col-sm-4 col-form-label col-form-label-sm">Nama Pemohon</label>
                      <div class="col-sm-4">
                        <input type="text" placeholder="Pemohon 2" class="form-control form-control-sm" name="nama_p2" required>
                      </div>
                      <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">bin/binti</label>
                      <div class="col-sm-3">
                        <input type="text" placeholder="Nama Ayah" class="form-control form-control-sm" name="nama_ayah_p2" required>
                      </div>
                    </div>
                  </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="jk_p2" class="col-sm-4 col-form-label col-form-label-sm">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control custom-select" name="jk_p2" required>
                        <option selected disabled>---Pilih---</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
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
                    <label for="pekerjaan_p2" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="Pekerjaan" class="form-control form-control-sm" name="pekerjaan_p2" required>
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
                    <label for="status_p2" class="col-sm-4 col-form-label col-form-label-sm">Status Sebelum Nikah</label>
                    <div class="col-sm-8">
                      <select class="form-control custom-select" name="status_p2" required>
                        <option selected disabled>---Pilih---</option>
                        <option>Perawan</option>
                        <option>Perjaka</option>
                        <option>Janda</option>
                        <option>Duda</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Detail Pernikahan</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="tgl_nikah" class="col-sm-4 col-form-label col-form-label-sm">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control form-control-sm" name="tgl_nikah" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="tempat_nikah" class="col-sm-4 col-form-label col-form-label-sm">Tempat</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="Tempat Nikah" class="form-control form-control-sm" name="tempat_nikah" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nama_imam" class="col-sm-4 col-form-label col-form-label-sm">Imam/Petugas</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="Nama Imam/Petugas" class="form-control form-control-sm" name="nama_imam" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="tipe_wali" class="col-sm-4 col-form-label col-form-label-sm">Wali</label>
                    <div class="col-sm-8">
                      <select class="form-control custom-select" name="tipe_wali" required>
                        <option selected disabled>---Pilih---</option>
                        <option>Bapak Kandung</option>
                        <option>Kakek (bapak dari bapak)</option>
                        <option>Bapak Dari Kakek (buyut)</option>
                        <option>Saudara Laki-Laki Sebapak Seibu</option>
                        <option>Saudara Laki-Laki Sebapak</option>
                        <option>Anak Laki-Laki Dari Saudara Laki-Laki Sebapak Seibu</option>
                        <option>Anak Laki-Laki Dari Saudara Laki-Laki Sebapak</option>
                        <option>Paman (saudara laki-Laki bapak sebapak seibu)</option>
                        <option>Paman Sebapak (saudara laki-Laki bapak sebapak seibu)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="alasan_tipe_wali" class="col-sm-4 col-form-label col-form-label-sm">Alasan jika wali bukan Bapak Kandung (*)</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="Alasan" class="form-control form-control-sm" name="alasan_tipe_wali">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nama_wali" class="col-sm-4 col-form-label col-form-label-sm">Nama Wali</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="Nama Wali" class="form-control form-control-sm" name="nama_wali" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="maskawin" class="col-sm-4 col-form-label col-form-label-sm">Maskawin</label>
                    <div class="col-sm-8">
                      <textarea class="form-control form-control-sm" name="maskawin" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="alamat_akad" class="col-sm-4 col-form-label col-form-label-sm">Alamat Akad Nikah</label>
                    <div class="col-sm-8">
                      <textarea class="form-control form-control-sm" name="alamat_akad" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">Saksi 1</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nama_saksi1" class="col-sm-4 col-form-label col-form-label-sm">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="Nama Saksi 1" class="form-control form-control-sm" name="nama_saksi1" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="ttl_saksi1" class="col-sm-4 col-form-label col-form-label-sm">TTL Saksi 1</label>
                    <div class="col-sm-3">
                      <input type="text" placeholder="Tempat Lahir" class="form-control form-control-sm" name="tempat_lahir_saksi1" required>
                    </div>
                    <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control form-control-sm" name="tgl_lahir_saksi1" required>
                    </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="agama_saksi1" class="col-sm-4 col-form-label col-form-label-sm">Agama Saksi 1</label>
                    <div class="col-sm-8">
                      <select class="form-control custom-select" name="agama_saksi1" required>
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
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Saksi 2</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nama_saksi2" class="col-sm-4 col-form-label col-form-label-sm">Nama Saksi 2</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="Nama Saksi 2" class="form-control form-control-sm" name="nama_saksi2" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="ttl_saksi2" class="col-sm-4 col-form-label col-form-label-sm">TTL Saksi 2</label>
                    <div class="col-sm-3">
                      <input type="text" placeholder="Tempat Lahir" class="form-control form-control-sm" name="tempat_lahir_saksi2" required>
                    </div>
                    <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control form-control-sm" name="tgl_lahir_saksi2" required>
                    </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="agama_saksi2" class="col-sm-4 col-form-label col-form-label-sm">Agama Saksi 2</label>
                    <div class="col-sm-8">
                      <select class="form-control custom-select" name="agama_saksi2" required>
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
              </div>
            </div>
              </div>
            </div>

            

            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Detail Selama Menikah</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="alamat_selama_nikah" class="col-sm-4 col-form-label col-form-label-sm">Alamat Selama Nikah</label>
                    <div class="col-sm-8">
                      <textarea class="form-control form-control-sm" name="alamat_selama_nikah" required></textarea>
                    </div>
                  </div>
                  </div>
                  <div class="form-group row">
                    <div class="row col-12">
                      <label for="jumlah_anak" class="col-sm-4 col-form-label col-form-label-sm">Jumlah Anak</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="Jumlah Anak" class="form-control form-control-sm" name="jumlah_anak" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="row col-12">
                      <label for="nama_anak" class="col-sm-4 col-form-label col-form-label-sm">Nama Anak-Anak</label>
                      <div class="col-sm-8">
                        <textarea class="form-control form-control-sm" name="nama_anak" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer justify-content-between">
                <button class="btn btn-success btn-lg" type="submit"><i class="fas fa-save"></i></button>
                <a href="<?php echo base_url('pendaftaran/dispensasi_kawin') ?>" class="btn btn-danger btn-lg"><i class="fas fa-window-close"></i></a>
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