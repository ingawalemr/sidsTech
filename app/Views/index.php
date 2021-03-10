<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SidsTech Digital</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('public/assets/img/favicon.png') ?>" rel="icon">
  <link href="<?php echo base_url('public/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('public/assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal - v2.1.0
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:ingawalemr12@gmail.com">info@sidstechdigital.com</a>
        <i class="fa fa-phone"></i> +91 9970 410 333
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
         <!-- <h1><a href="index.php">sids<span>Tech</span> Digital</a></h1>  -->
        <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?php echo base_url()?>/UserController"><img src="<?php echo base_url('public/assets/img/logo.png') ?>" alt="logo"></a>
       <p>Design meets Digital Solutions</p>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li><a href="<?php echo base_url()?>/UserController">Home</a></li>
        <li><a href="<?php echo base_url()?>/UserController/about">About Us</a></li>
        <li><a href="<?php  echo base_url('UserController/contact');?>">Contact Us</a></li> 
        <li><a href="<?php echo base_url('CrudController/index');?>">CRUD</a></li>
        <li><a href="<?php echo base_url('LoginController/index');?>">Login</a></li>
        <li><a href="<?php echo base_url('/image');?>">ImageUp</a></li> 
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->


 
 <?= $this->renderSection('userPage') ?>
 <?= $this->renderSection('about') ?>
 <?= $this->renderSection('contact') ?>
 <?= $this->renderSection('login') ?>
 <?= $this->renderSection('crud') ?>
 <?= $this->renderSection('signUp') ?>
 <?= $this->renderSection('Homepage') ?>
 <?= $this->renderSection('imageUploadDB') ?>
 <?= $this->renderSection('addToCart') ?>
 <?= $this->renderSection('forgot_pass') ?>
 
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy;  <?php echo date('Y'); ?> &nbsp;<strong>SidsTech</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('public/assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/wow/wow.min.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/jquery-sticky/jquery.sticky.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/superfish/superfish.min.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/hoverIntent/hoverIntent.js') ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('public/assets/js/main.js') ?>"></script>

</body>

</html>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c2f1c7382491369baa071cd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->