<?= $this->extend('index') ?>

<?= $this->section('userPage') ?>
   <!-- ======= Intro Section ======= -->
  <section id="intro">

    <div class="intro-content">
      <h2>Making <span>your ideas</span><br>happen!</h2>
      <div>
        <a href="#" class="btn-get-started scrollto">Get Started</a>
        <a href="#" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel">
      <div class="item" style="background-image: url('assets/img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('assets/img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('assets/img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('assets/img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('assets/img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- End Intro Section -->
 <br><br>
<?= $this->endSection() ?>