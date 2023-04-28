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
          <h3 class="card-title">Edit Pendaftaran Sidang Isbat</h3>
          <div class="card-tools">
            <a href="<?php echo base_url('pendaftaran/sidang_isbat') ?>" class="btn btn-tool"><i class="fas fa-window-close"></i></a>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->
          <form method="post" action="<?php echo base_url('pendaftaran/proses_update_isbat') ?>" enctype="multipart/form-data">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Pemohon 1</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nama_p1" class="col-sm-4 col-form-label col-form-label-sm">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['nama_p1']; ?>" class="form-control form-control-sm" name="nama_p1" required>
                      <input type="hidden" value="<?= $data['id_isbat']; ?>" name="id_isbat">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="jk_p1" class="col-sm-4 col-form-label col-form-label-sm">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select name="jk_p1" class="form-control" value="<?= $data['jk_p1']; ?>" required>
                        <option <?php if ($data['jk_p1'] == "Perempuan") {
                                  echo "selected='selected'";
                                }
                                echo $data['jk_p1']; ?> value="Perempuan">
                          Perempuan
                        </option>
                        <option <?php if ($data['jk_p1'] == "Laki-Laki") {
                                  echo "selected='selected'";
                                }
                                echo $data['jk_p1']; ?> value="Laki-Laki">
                          Laki-Laki
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nik_p1" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['nik_p1']; ?>" class="form-control form-control-sm" name="nik_p1" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="ttl_p1" class="col-sm-4 col-form-label col-form-label-sm">TTL</label>
                    <div class="col-sm-3">
                      <input type="text" value="<?= $data['tempat_lahir_p1']; ?>" class="form-control form-control-sm" name="tempat_lahir_p1" required>
                    </div>
                    <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                    <div class="col-sm-4">
                      <input type="date" value="<?= $data['tgl_lahir_p1']; ?>" class="form-control form-control-sm" name="tgl_lahir_p1" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="agama_p1" class="col-sm-4 col-form-label col-form-label-sm">Agama</label>
                    <div class="col-sm-8">
                      <select name="agama_p1" class="form-control" value="<?= $data['agama_p1']; ?>" required>
                        <option <?php if ($data['agama_p1'] == "Islam") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p1']; ?> value="Islam">
                          Islam
                        </option>
                        <option <?php if ($data['agama_p1'] == "Kristen") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p1']; ?> value="Kristen">
                          Kristen
                        </option>
                        <option <?php if ($data['agama_p1'] == "Katolik") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p1']; ?> value="Katolik">
                          Katolik
                        </option>
                        <option <?php if ($data['agama_p1'] == "Budha") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p1']; ?> value="Budha">
                          Budha
                        </option>
                        <option <?php if ($data['agama_p1'] == "Hindu") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p1']; ?> value="Hindu">
                          Hindu
                        </option>
                        <option <?php if ($data['agama_p1'] == "Konghuchu") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p1']; ?> value="Konghuchu">
                          Konghuchu
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="pekerjaan_p1" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['pekerjaan_p1']; ?>" class="form-control form-control-sm" name="pekerjaan_p1" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="pendidikan_p1" class="col-sm-4 col-form-label col-form-label-sm">Pendidikan</label>
                    <div class="col-sm-8">
                      <select name="pendidikan_p1" class="form-control" value="<?= $data['pendidikan_p1']; ?>" required>
                        <option <?php if ($data['pendidikan_p1'] == "Tidak/Belum Sekolah") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="Tidak/Belum Sekolah">
                          Tidak/Belum Sekolah
                        </option>
                        <option <?php if ($data['pendidikan_p1'] == "Tamat SD/Sederajat") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="Tamat SD/Sederajat">
                          Tamat SD/Sederajat
                        </option>
                        <option <?php if ($data['pendidikan_p1'] == "SLTP/Sederajat") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="SLTP/Sederajat">
                          SLTP/Sederajat
                        </option>
                        <option <?php if ($data['pendidikan_p1'] == "SLTA/Sederajat") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="SLTA/Sederajat">
                          SLTA/Sederajat
                        </option>
                        <option <?php if ($data['pendidikan_p1'] == "Diploma I/II") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="Diploma I/II">
                          Diploma I/II
                        </option>
                        <option <?php if ($data['pendidikan_p1'] == "Akademi/Diploma III/S. Muda") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="Akademi/Diploma III/S. Muda">
                          Akademi/Diploma III/S. Muda
                        </option>
                        <option <?php if ($data['pendidikan_p1'] == "ADiploma IV/Strata I") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="ADiploma IV/Strata I">
                          ADiploma IV/Strata I
                        </option>
                        <option <?php if ($data['pendidikan_p1'] == "Strata II") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="Strata II">
                          Strata II
                        </option>
                        <option <?php if ($data['pendidikan_p1'] == "Strata III") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p1']; ?> value="Strata III">
                          Strata III
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="alamat_p1" class="col-sm-4 col-form-label col-form-label-sm">Alamat</label>
                    <div class="col-sm-8">
                      <textarea class="form-control form-control-sm" name="alamat_p1" required><?= $data['alamat_p1']; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="status_p1" class="col-sm-4 col-form-label col-form-label-sm">Status Sebelum Nikah</label>
                    <div class="col-sm-8">
                      <select name="status_p1" class="form-control" value="<?= $data['status_p1']; ?>" required>
                        <option <?php if ($data['status_p1'] == "Perawan") {
                                  echo "selected='selected'";
                                }
                                echo $data['status_p1']; ?> value="Perawan">
                          Perawan
                        </option>
                        <option <?php if ($data['status_p1'] == "Perjaka") {
                                  echo "selected='selected'";
                                }
                                echo $data['status_p1']; ?> value="Perjaka">
                          Perjaka
                        </option>
                        <option <?php if ($data['status_p1'] == "Janda") {
                                  echo "selected='selected'";
                                }
                                echo $data['status_p1']; ?> value="Janda">
                          Janda
                        </option>
                        <option <?php if ($data['status_p1'] == "Duda") {
                                  echo "selected='selected'";
                                }
                                echo $data['status_p1']; ?> value="Duda">
                          Duda
                        </option>
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
                      <div class="col-sm-8">
                      <input type="text" value="<?= $data['nama_p2']; ?>" class="form-control form-control-sm" name="nama_p2" required>
                      </div>
                    </div>
                  </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="jk_p2" class="col-sm-4 col-form-label col-form-label-sm">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select name="jk_p2" class="form-control" value="<?= $data['jk_p2']; ?>" required>
                        <option <?php if ($data['jk_p2'] == "Perempuan") {
                                  echo "selected='selected'";
                                }
                                echo $data['jk_p2']; ?> value="Perempuan">
                          Perempuan
                        </option>
                        <option <?php if ($data['jk_p2'] == "Laki-Laki") {
                                  echo "selected='selected'";
                                }
                                echo $data['jk_p2']; ?> value="Laki-Laki">
                          Laki-Laki
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nik_p2" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['nik_p2']; ?>" class="form-control form-control-sm" name="nik_p2" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="ttl_p2" class="col-sm-4 col-form-label col-form-label-sm">TTL</label>
                    <div class="col-sm-3">
                      <input type="text" value="<?= $data['tempat_lahir_p2']; ?>" class="form-control form-control-sm" name="tempat_lahir_p2" required>
                    </div>
                    <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                    <div class="col-sm-4">
                      <input type="date" value="<?= $data['tgl_lahir_p2']; ?>" class="form-control form-control-sm" name="tgl_lahir_p2" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="agama_p2" class="col-sm-4 col-form-label col-form-label-sm">Agama</label>
                    <div class="col-sm-8">
                      <select name="agama_p2" class="form-control" value="<?= $data['agama_p2']; ?>" required>
                        <option <?php if ($data['agama_p2'] == "Islam") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p2']; ?> value="Islam">
                          Islam
                        </option>
                        <option <?php if ($data['agama_p2'] == "Kristen") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p2']; ?> value="Kristen">
                          Kristen
                        </option>
                        <option <?php if ($data['agama_p2'] == "Katolik") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p2']; ?> value="Katolik">
                          Katolik
                        </option>
                        <option <?php if ($data['agama_p2'] == "Budha") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p2']; ?> value="Budha">
                          Budha
                        </option>
                        <option <?php if ($data['agama_p2'] == "Hindu") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p2']; ?> value="Hindu">
                          Hindu
                        </option>
                        <option <?php if ($data['agama_p2'] == "Konghuchu") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_p2']; ?> value="Konghuchu">
                          Konghuchu
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="pekerjaan_p2" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['pekerjaan_p2']; ?>" class="form-control form-control-sm" name="pekerjaan_p2" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="pendidikan_p2" class="col-sm-4 col-form-label col-form-label-sm">Pendidikan</label>
                    <div class="col-sm-8">
                      <select name="pendidikan_p2" class="form-control" value="<?= $data['pendidikan_p2']; ?>" required>
                        <option <?php if ($data['pendidikan_p2'] == "Tidak/Belum Sekolah") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="Tidak/Belum Sekolah">
                          Tidak/Belum Sekolah
                        </option>
                        <option <?php if ($data['pendidikan_p2'] == "Tamat SD/Sederajat") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="Tamat SD/Sederajat">
                          Tamat SD/Sederajat
                        </option>
                        <option <?php if ($data['pendidikan_p2'] == "SLTP/Sederajat") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="SLTP/Sederajat">
                          SLTP/Sederajat
                        </option>
                        <option <?php if ($data['pendidikan_p2'] == "SLTA/Sederajat") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="SLTA/Sederajat">
                          SLTA/Sederajat
                        </option>
                        <option <?php if ($data['pendidikan_p2'] == "Diploma I/II") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="Diploma I/II">
                          Diploma I/II
                        </option>
                        <option <?php if ($data['pendidikan_p2'] == "Akademi/Diploma III/S. Muda") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="Akademi/Diploma III/S. Muda">
                          Akademi/Diploma III/S. Muda
                        </option>
                        <option <?php if ($data['pendidikan_p2'] == "ADiploma IV/Strata I") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="ADiploma IV/Strata I">
                          ADiploma IV/Strata I
                        </option>
                        <option <?php if ($data['pendidikan_p2'] == "Strata II") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="Strata II">
                          Strata II
                        </option>
                        <option <?php if ($data['pendidikan_p2'] == "Strata III") {
                                  echo "selected='selected'";
                                }
                                echo $data['pendidikan_p2']; ?> value="Strata III">
                          Strata III
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="alamat_p2" class="col-sm-4 col-form-label col-form-label-sm">Alamat</label>
                    <div class="col-sm-8">
                      <textarea class="form-control form-control-sm" name="alamat_p2" required><?= $data['alamat_p2']; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="status_p2" class="col-sm-4 col-form-label col-form-label-sm">Status Sebelum Nikah</label>
                    <div class="col-sm-8">
                      <select name="status_p2" class="form-control" value="<?= $data['status_p2']; ?>" required>
                        <option <?php if ($data['status_p2'] == "Perawan") {
                                  echo "selected='selected'";
                                }
                                echo $data['status_p2']; ?> value="Perawan">
                          Perawan
                        </option>
                        <option <?php if ($data['status_p2'] == "Perjaka") {
                                  echo "selected='selected'";
                                }
                                echo $data['status_p2']; ?> value="Perjaka">
                          Perjaka
                        </option>
                        <option <?php if ($data['status_p2'] == "Janda") {
                                  echo "selected='selected'";
                                }
                                echo $data['status_p2']; ?> value="Janda">
                          Janda
                        </option>
                        <option <?php if ($data['status_p2'] == "Duda") {
                                  echo "selected='selected'";
                                }
                                echo $data['status_p2']; ?> value="Duda">
                          Duda
                        </option>
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
                      <input type="date" value="<?= $data['tgl_nikah']; ?>" class="form-control form-control-sm" name="tgl_nikah" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="tempat_nikah" class="col-sm-4 col-form-label col-form-label-sm">Tempat</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['tempat_nikah']; ?>" class="form-control form-control-sm" name="tempat_nikah" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nama_imam" class="col-sm-4 col-form-label col-form-label-sm">Imam/Petugas</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['nama_imam']; ?>" class="form-control form-control-sm" name="nama_imam" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="tipe_wali" class="col-sm-4 col-form-label col-form-label-sm">Wali</label>
                    <div class="col-sm-8">
                      <select name="tipe_wali" class="form-control" value="<?= $data['tipe_wali']; ?>" required>
                        <option <?php if ($data['tipe_wali'] == "Bapak Kandung") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Bapak Kandung">
                          Bapak Kandung
                        </option>
                        <option <?php if ($data['tipe_wali'] == "Kakek (bapak dari bapak)") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Kakek (bapak dari bapak)">
                          Kakek (bapak dari bapak)
                        </option>
                        <option <?php if ($data['tipe_wali'] == "Bapak Dari Kakek (buyut)") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Bapak Dari Kakek (buyut)">
                          Bapak Dari Kakek (buyut)
                        </option>
                        <option <?php if ($data['tipe_wali'] == "Saudara Laki-Laki Sebapak Seibu") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Saudara Laki-Laki Sebapak Seibu">
                          Saudara Laki-Laki Sebapak Seibu
                        </option>
                        <option <?php if ($data['tipe_wali'] == "Saudara Laki-Laki Sebapak") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Saudara Laki-Laki Sebapak">
                          Saudara Laki-Laki Sebapak
                        </option>
                        <option <?php if ($data['tipe_wali'] == "Anak Laki-Laki Dari Saudara Laki-Laki Sebapak Seibu") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Anak Laki-Laki Dari Saudara Laki-Laki Sebapak Seibu">
                          Anak Laki-Laki Dari Saudara Laki-Laki Sebapak Seibu
                        </option>
                        <option <?php if ($data['tipe_wali'] == "Anak Laki-Laki Dari Saudara Laki-Laki Sebapak") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Anak Laki-Laki Dari Saudara Laki-Laki Sebapak">
                          Anak Laki-Laki Dari Saudara Laki-Laki Sebapak
                        </option>
                        <option <?php if ($data['tipe_wali'] == "Paman (saudara laki-Laki bapak sebapak seibu)") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Paman (saudara laki-Laki bapak sebapak seibu)">
                          Paman (saudara laki-Laki bapak sebapak seibu)
                        </option>
                        <option <?php if ($data['tipe_wali'] == "Paman Sebapak (saudara laki-Laki bapak sebapak seibu)") {
                                  echo "selected='selected'";
                                }
                                echo $data['tipe_wali']; ?> value="Paman Sebapak (saudara laki-Laki bapak sebapak seibu)">
                          Paman Sebapak (saudara laki-Laki bapak sebapak seibu)
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="alasan_tipe_wali" class="col-sm-4 col-form-label col-form-label-sm">Alasan jika wali bukan Bapak Kandung (*)</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['alasan_tipe_wali']; ?>" class="form-control form-control-sm" name="alasan_tipe_wali">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="nama_wali" class="col-sm-4 col-form-label col-form-label-sm">Nama Wali</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?= $data['nama_wali']; ?>" class="form-control form-control-sm" name="nama_wali" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="maskawin" class="col-sm-4 col-form-label col-form-label-sm">Maskawin</label>
                    <div class="col-sm-8">
                      <textarea class="form-control form-control-sm" name="maskawin" required><?= $data['maskawin']; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="alamat_akad" class="col-sm-4 col-form-label col-form-label-sm">Alamat Akad Nikah</label>
                    <div class="col-sm-8">
                      <textarea class="form-control form-control-sm" name="alamat_akad" required><?= $data['alamat_akad']; ?></textarea>
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
                      <input type="text" value="<?= $data['nama_saksi1']; ?>" class="form-control form-control-sm" name="nama_saksi1" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="ttl_saksi1" class="col-sm-4 col-form-label col-form-label-sm">TTL Saksi 1</label>
                    <div class="col-sm-3">
                      <input type="text" value="<?= $data['tempat_lahir_saksi1']; ?>" class="form-control form-control-sm" name="tempat_lahir_saksi1" required>
                    </div>
                    <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                    <div class="col-sm-4">
                      <input type="date" value="<?= $data['tgl_lahir_saksi1']; ?>"  class="form-control form-control-sm" name="tgl_lahir_saksi1" required>
                    </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="agama_saksi1" class="col-sm-4 col-form-label col-form-label-sm">Agama Saksi 1</label>
                    <div class="col-sm-8">
                      <select name="agama_saksi1" class="form-control" value="<?= $data['agama_saksi1']; ?>" required>
                        <option <?php if ($data['agama_saksi1'] == "Islam") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi1']; ?> value="Islam">
                          Islam
                        </option>
                        <option <?php if ($data['agama_saksi1'] == "Kristen") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi1']; ?> value="Kristen">
                          Kristen
                        </option>
                        <option <?php if ($data['agama_saksi1'] == "Katolik") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi1']; ?> value="Katolik">
                          Katolik
                        </option>
                        <option <?php if ($data['agama_saksi1'] == "Budha") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi1']; ?> value="Budha">
                          Budha
                        </option>
                        <option <?php if ($data['agama_saksi1'] == "Hindu") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi1']; ?> value="Hindu">
                          Hindu
                        </option>
                        <option <?php if ($data['agama_saksi1'] == "Konghuchu") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi1']; ?> value="Konghuchu">
                          Konghuchu
                        </option>
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
                      <input type="text" value="<?= $data['nama_saksi2']; ?>" class="form-control form-control-sm" name="nama_saksi2" required>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="ttl_saksi2" class="col-sm-4 col-form-label col-form-label-sm">TTL Saksi 2</label>
                    <div class="col-sm-3">
                      <input type="text" value="<?= $data['tempat_lahir_saksi2']; ?>" class="form-control form-control-sm" name="tempat_lahir_saksi2" required>
                    </div>
                    <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                    <div class="col-sm-4">
                      <input type="date" value="<?= $data['tgl_lahir_saksi2']; ?>" class="form-control form-control-sm" name="tgl_lahir_saksi2" required>
                    </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="row col-12">
                    <label for="agama_saksi2" class="col-sm-4 col-form-label col-form-label-sm">Agama Saksi 2</label>
                    <div class="col-sm-8">
                      <select name="agama_saksi2" class="form-control" value="<?= $data['agama_saksi2']; ?>" required>
                        <option <?php if ($data['agama_saksi2'] == "Islam") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi2']; ?> value="Islam">
                          Islam
                        </option>
                        <option <?php if ($data['agama_saksi2'] == "Kristen") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi2']; ?> value="Kristen">
                          Kristen
                        </option>
                        <option <?php if ($data['agama_saksi2'] == "Katolik") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi2']; ?> value="Katolik">
                          Katolik
                        </option>
                        <option <?php if ($data['agama_saksi2'] == "Budha") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi2']; ?> value="Budha">
                          Budha
                        </option>
                        <option <?php if ($data['agama_saksi2'] == "Hindu") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi2']; ?> value="Hindu">
                          Hindu
                        </option>
                        <option <?php if ($data['agama_saksi2'] == "Konghuchu") {
                                  echo "selected='selected'";
                                }
                                echo $data['agama_saksi2']; ?> value="Konghuchu">
                          Konghuchu
                        </option>
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
                      <textarea class="form-control form-control-sm" name="alamat_selama_nikah" required><?= $data['alamat_selama_nikah']; ?></textarea>
                    </div>
                  </div>
                  </div>
                  <div class="form-group row">
                    <div class="row col-12">
                      <label for="jumlah_anak" class="col-sm-4 col-form-label col-form-label-sm">Jumlah Anak</label>
                      <div class="col-sm-8">
                        <input type="text" value="<?= $data['jumlah_anak']; ?>" class="form-control form-control-sm" name="jumlah_anak" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="row col-12">
                      <label for="nama_anak" class="col-sm-4 col-form-label col-form-label-sm">Nama Anak-Anak</label>
                      <div class="col-sm-8">
                        <textarea class="form-control form-control-sm" name="nama_anak" required><?= $data['nama_anak']; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer justify-content-between">
                <button class="btn btn-success btn-lg" type="submit"><i class="fas fa-save"></i></button>
                <a href="<?php echo base_url('pendaftaran/sidang_isbat') ?>" class="btn btn-danger btn-lg"><i class="fas fa-window-close"></i></a>
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