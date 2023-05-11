<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Inovasi Kami</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>
    <div class="row">
      <?php foreach ($data_inovasi as $hasil) : ?>
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="d-flex justify-content-center">
              <img src="<?php echo base_url('assets/img/inovasi/') . $hasil['image']; ?>" width="75" height="100" class="img-fluid" alt="">
            </div>
            <h4 class="d-flex justify-content-center"><a href=""><?= $hasil['nama_inovasi'] ?></a></h4>
            <p class="d-flex justify-content-center"><?= $hasil['deskripsi'] ?></p>
          </div>
        </div>
      <?php endforeach;  ?>
    </div>
  </div>
</section><!-- End Services Section -->