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
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Edit Pendaftaran Dispensasi Kawin</h3>
          <div class="card-tools">
            <a href="<?php echo base_url('pendaftaran/dispensasi_kawin') ?>" class="btn btn-tool"><i class="fas fa-window-close"></i></a>
          </div>
        </div>
        <div class="card-body">
          <!-- batas atas -->               
                <form method="post" action="<?php echo base_url('pendaftaran/proses_update_diska') ?>" enctype="multipart/form-data">
                <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Jenis Dispensasi Kawin</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <div class="row col-12">
                          <label for="jenis_permohonan" class="col-sm-4 col-form-label col-form-label-sm">Anak yang kurang umur</label>
                          <div class="col-sm-8">
                            <select name="jenis_permohonan" class="form-control" value="<?= $data['jenis_permohonan']; ?>" required>
                              <option <?php if ($data['jenis_permohonan'] == "Anak perempuan") {
                                        echo "selected='selected'";
                                      }
                                      echo $data['jenis_permohonan']; ?> value="Anak perempuan">
                                Anak perempuan
                              </option>
                              <option <?php if ($data['jenis_permohonan'] == "Anak laki-Laki") {
                                        echo "selected='selected'";
                                      }
                                      echo $data['jenis_permohonan']; ?> value="Anak laki-Laki">
                                Anak laki-Laki
                              </option>
                              <option <?php if ($data['jenis_permohonan'] == "Anak perempuan dan laki-laki") {
                                        echo "selected='selected'";
                                      }
                                      echo $data['jenis_permohonan']; ?> value="Anak perempuan dan laki-laki">
                                Anak perempuan dan laki-laki
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Pemohon 1</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="nama_p1" class="col-sm-4 col-form-label col-form-label-sm">Nama Pemohon 1</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['nama_p1']; ?>" class="form-control form-control-sm" name="nama_p1" required>
                              <input type="hidden" value="<?= $data['id_diska']; ?>" name="id_diska">
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
                            <label for="nik_p1" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['nik_p1']; ?>" class="form-control form-control-sm" name="nik_p1" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="tgl_nik_p1" class="col-sm-4 col-form-label col-form-label-sm">Tanggal KTP</label>
                            <div class="col-sm-8">
                              <input type="date" value="<?= $data['tgl_nik_p1']; ?>" class="form-control form-control-sm" name="tgl_nik_p1" required>
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
                            <label for="pekerjaan_p1" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['pekerjaan_p1']; ?>" class="form-control form-control-sm" name="pekerjaan_p1" required>
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
                       </div>
                    </div>
                    <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Pemohon 2</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="nama_p2" class="col-sm-4 col-form-label col-form-label-sm">Nama Pemohon 2</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['nama_p2']; ?>" class="form-control form-control-sm" name="nama_p2" required>
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
                            <label for="nik_p2" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['nik_p2']; ?>" class="form-control form-control-sm" name="nik_p2" required>
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
                            <label for="pekerjaan_p2" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['pekerjaan_p2']; ?>" class="form-control form-control-sm" name="pekerjaan_p2" required>
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
                      </div>
                    </div>
                    <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Anak</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="nama_anak" class="col-sm-4 col-form-label col-form-label-sm">Nama Anak</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['nama_anak']; ?>" class="form-control form-control-sm" name="nama_anak" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="jk_anak" class="col-sm-4 col-form-label col-form-label-sm">Jenis Kelamin</label>
                            <div class="col-sm-8">
                              <select name="jk_anak" class="form-control" value="<?= $data['jk_anak']; ?>" required>
                                <option <?php if ($data['jk_anak'] == "Perempuan") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['jk_anak']; ?> value="Perempuan">
                                  Perempuan
                                </option>
                                <option <?php if ($data['jk_anak'] == "Laki-Laki") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['jk_anak']; ?> value="Laki-Laki">
                                  Laki-Laki
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="ttl_anak" class="col-sm-4 col-form-label col-form-label-sm">TTL</label>
                            <div class="col-sm-3">
                              <input type="text" value="<?= $data['tempat_lahir_anak']; ?>" class="form-control form-control-sm" name="tempat_lahir_anak" required>
                            </div>
                            <label class="col-sm-1 col-form-label col-form-label-sm" style="color:#a9a9a9">,</label>
                            <div class="col-sm-4">
                              <input type="date" value="<?= $data['tgl_lahir_anak']; ?>" class="form-control form-control-sm" name="tgl_lahir_anak" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="nik_anak" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['nik_anak']; ?>" class="form-control form-control-sm" name="nik_anak" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="agama_anak" class="col-sm-4 col-form-label col-form-label-sm">Agama</label>
                            <div class="col-sm-8">
                              <select name="agama_anak" class="form-control" value="<?= $data['agama_anak']; ?>" required>
                                <option <?php if ($data['agama_anak'] == "Islam") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_anak']; ?> value="Islam">
                                  Islam
                                </option>
                                <option <?php if ($data['agama_anak'] == "Kristen") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_anak']; ?> value="Kristen">
                                  Kristen
                                </option>
                                <option <?php if ($data['agama_anak'] == "Katolik") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_anak']; ?> value="Katolik">
                                  Katolik
                                </option>
                                <option <?php if ($data['agama_anak'] == "Budha") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_anak']; ?> value="Budha">
                                  Budha
                                </option>
                                <option <?php if ($data['agama_anak'] == "Hindu") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_anak']; ?> value="Hindu">
                                  Hindu
                                </option>
                                <option <?php if ($data['agama_anak'] == "Konghuchu") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_anak']; ?> value="Konghuchu">
                                  Konghuchu
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="pendidikan_anak" class="col-sm-4 col-form-label col-form-label-sm">Pendidikan</label>
                            <div class="col-sm-8">
                              <select name="pendidikan_anak" class="form-control" value="<?= $data['pendidikan_anak']; ?>" required>
                                <option <?php if ($data['pendidikan_anak'] == "Tidak/Belum Sekolah") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="Tidak/Belum Sekolah">
                                  Tidak/Belum Sekolah
                                </option>
                                <option <?php if ($data['pendidikan_anak'] == "Tamat SD/Sederajat") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="Tamat SD/Sederajat">
                                  Tamat SD/Sederajat
                                </option>
                                <option <?php if ($data['pendidikan_anak'] == "SLTP/Sederajat") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="SLTP/Sederajat">
                                  SLTP/Sederajat
                                </option>
                                <option <?php if ($data['pendidikan_anak'] == "SLTA/Sederajat") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="SLTA/Sederajat">
                                  SLTA/Sederajat
                                </option>
                                <option <?php if ($data['pendidikan_anak'] == "Diploma I/II") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="Diploma I/II">
                                  Diploma I/II
                                </option>
                                <option <?php if ($data['pendidikan_anak'] == "Akademi/Diploma III/S. Muda") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="Akademi/Diploma III/S. Muda">
                                  Akademi/Diploma III/S. Muda
                                </option>
                                <option <?php if ($data['pendidikan_anak'] == "ADiploma IV/Strata I") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="ADiploma IV/Strata I">
                                  ADiploma IV/Strata I
                                </option>
                                <option <?php if ($data['pendidikan_anak'] == "Strata II") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="Strata II">
                                  Strata II
                                </option>
                                <option <?php if ($data['pendidikan_anak'] == "Strata III") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_anak']; ?> value="Strata III">
                                  Strata III
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="pekerjaan_anak" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['pekerjaan_anak']; ?>" class="form-control form-control-sm" name="pekerjaan_anak" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="penghasilan_anak" class="col-sm-4 col-form-label col-form-label-sm">Penghasilan Anak</label>
                            <label class="col-sm-1 col-form-label col-form-label-sm">Rp</label>
                            <div class="col-sm-7">
                              <input type="text" value="<?= $data['penghasilan_anak']; ?>" class="form-control form-control-sm" name="penghasilan_anak" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="alamat_anak" class="col-sm-4 col-form-label col-form-label-sm">Alamat</label>
                            <div class="col-sm-8">
                              <textarea class="form-control form-control-sm" name="alamat_anak" required><?= $data['alamat_anak']; ?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Calon</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="nama_calon" class="col-sm-4 col-form-label col-form-label-sm">Nama Calon</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['nama_calon']; ?>" class="form-control form-control-sm" name="nama_calon" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="jk_calon" class="col-sm-4 col-form-label col-form-label-sm">Jenis Kelamin</label>
                            <div class="col-sm-8">
                              <select name="jk_calon" class="form-control" value="<?= $data['jk_calon']; ?>" required>
                                <option <?php if ($data['jk_calon'] == "Perempuan") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['jk_calon']; ?> value="Perempuan">
                                  Perempuan
                                </option>
                                <option <?php if ($data['jk_calon'] == "Laki-Laki") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['jk_calon']; ?> value="Laki-Laki">
                                  Laki-Laki
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="ttl_calon" class="col-sm-4 col-form-label col-form-label-sm">TTL</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['tempat_lahir_calon']; ?>" class="form-control form-control-sm" name="tempat_lahir_calon" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="nik_calon" class="col-sm-4 col-form-label col-form-label-sm">NIK</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['nik_calon']; ?>" class="form-control form-control-sm" name="nik_calon" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="agama_calon" class="col-sm-4 col-form-label col-form-label-sm">Agama</label>
                            <div class="col-sm-8">
                              <select name="agama_calon" class="form-control" value="<?= $data['agama_calon']; ?>" required>
                                <option <?php if ($data['agama_calon'] == "Islam") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_calon']; ?> value="Islam">
                                  Islam
                                </option>
                                <option <?php if ($data['agama_calon'] == "Kristen") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_calon']; ?> value="Kristen">
                                  Kristen
                                </option>
                                <option <?php if ($data['agama_calon'] == "Katolik") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_calon']; ?> value="Katolik">
                                  Katolik
                                </option>
                                <option <?php if ($data['agama_calon'] == "Budha") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_calon']; ?> value="Budha">
                                  Budha
                                </option>
                                <option <?php if ($data['agama_calon'] == "Hindu") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_calon']; ?> value="Hindu">
                                  Hindu
                                </option>
                                <option <?php if ($data['agama_calon'] == "Konghuchu") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['agama_calon']; ?> value="Konghuchu">
                                  Konghuchu
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="pendidikan_calon" class="col-sm-4 col-form-label col-form-label-sm">Pendidikan</label>
                            <div class="col-sm-8">
                              <select name="pendidikan_calon" class="form-control" value="<?= $data['pendidikan_calon']; ?>" required>
                                <option <?php if ($data['pendidikan_calon'] == "Tidak/Belum Sekolah") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="Tidak/Belum Sekolah">
                                  Tidak/Belum Sekolah
                                </option>
                                <option <?php if ($data['pendidikan_calon'] == "Tamat SD/Sederajat") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="Tamat SD/Sederajat">
                                  Tamat SD/Sederajat
                                </option>
                                <option <?php if ($data['pendidikan_calon'] == "SLTP/Sederajat") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="SLTP/Sederajat">
                                  SLTP/Sederajat
                                </option>
                                <option <?php if ($data['pendidikan_calon'] == "SLTA/Sederajat") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="SLTA/Sederajat">
                                  SLTA/Sederajat
                                </option>
                                <option <?php if ($data['pendidikan_calon'] == "Diploma I/II") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="Diploma I/II">
                                  Diploma I/II
                                </option>
                                <option <?php if ($data['pendidikan_calon'] == "Akademi/Diploma III/S. Muda") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="Akademi/Diploma III/S. Muda">
                                  Akademi/Diploma III/S. Muda
                                </option>
                                <option <?php if ($data['pendidikan_calon'] == "ADiploma IV/Strata I") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="ADiploma IV/Strata I">
                                  ADiploma IV/Strata I
                                </option>
                                <option <?php if ($data['pendidikan_calon'] == "Strata II") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="Strata II">
                                  Strata II
                                </option>
                                <option <?php if ($data['pendidikan_calon'] == "Strata III") {
                                          echo "selected='selected'";
                                        }
                                        echo $data['pendidikan_calon']; ?> value="Strata III">
                                  Strata III
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="pekerjaan_calon" class="col-sm-4 col-form-label col-form-label-sm">Pekerjaan</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?= $data['pekerjaan_calon']; ?>" class="form-control form-control-sm" name="pekerjaan_calon" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="alamat_calon" class="col-sm-4 col-form-label col-form-label-sm">Alamat</label>
                            <div class="col-sm-8">
                              <textarea class="form-control form-control-sm" name="alamat_calon" required><?= $data['alamat_calon']; ?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Detail Permohonan Dispensasi Kawin</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="penghasilan_calon" class="col-sm-4 col-form-label col-form-label-sm">Penghasilan Calon</label>
                            <label class="col-sm-1 col-form-label col-form-label-sm">Rp</label>
                            <div class="col-sm-7">
                              <input type="text" value="<?= $data['penghasilan_calon']; ?>" class="form-control form-control-sm" name="penghasilan_calon" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="lama_mengenal_calon" class="col-sm-4 col-form-label col-form-label-sm">Lama Mengenal</label>
                            <div class="col-sm-7">
                              <input type="text" value="<?= $data['lama_mengenal_calon']; ?>" class="form-control form-control-sm" name="lama_mengenal_calon" required>
                            </div>
                            <label class="col-sm-1 col-form-label col-form-label-sm">Tahun</label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="row col-12">
                            <label for="tgl_lamaran" class="col-sm-4 col-form-label col-form-label-sm">Tanggal Lamaran</label>
                            <div class="col-sm-8">
                              <input type="date" value="<?= $data['tgl_lamaran']; ?>" class="form-control form-control-sm" name="tgl_lamaran" required>
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