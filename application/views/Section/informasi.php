 <!-- ======= Why Us Section ======= -->
 <section id="informasi" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
      <div class="section-title">
        <h2>Persyaratan Berperkara</h2>
        <p>Selamat datang di layanan Informasi PTSP Online Pengadilan Agama Bojonegoro!</p>
      </div>
        <div class="row">

          <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
            <div class="accordion-list">
              <ul>
                <?php foreach ($data_persyaratan_berperkara as $hasil): ?>
                  <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-<?=$hasil['id_persyaratan']?>" class="collapsed"><?=$hasil['nama_perkara']?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-<?=$hasil['id_persyaratan']?>" class="collapse" data-bs-parent=".accordion-list">
                    <ul>
                      <div id="syarat_perkara-<?=$hasil['id_persyaratan'];?>"></div>
                    </ul>
                  </div>
                </li>
                <script>
                  var syarat_perkara<?=$hasil['id_persyaratan'];?> = <?php echo(json_encode($hasil['syarat_perkara'])); ?>;
                  document.getElementById("syarat_perkara-<?=$hasil['id_persyaratan'];?>").innerHTML = syarat_perkara<?=$hasil['id_persyaratan'];?>;
                </script>
                <?php endforeach;  ?>
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->