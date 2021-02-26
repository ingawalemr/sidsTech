<?= $this->extend('index') ?>

<?= $this->section('contact') ?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact Us</h2>
          <ol>
            <li><a href="<?php echo base_url()?>/UserController">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-4">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Shirwal, Maharashtra 412801, (India)</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+919970410333">+91 9970 410 333</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@sidstechdigital.com"> info@sidstechdigital.com </a></p>
            </div>
          </div>

        </div>
      </div>
      
      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7690417.123181869!2d75.7138884!3d19.7514798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2f636125dfadd%3A0xdbcf38f75c09fbda!2sShirwal!5e0!3m2!1sen!2sin!4v1614058889173!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen loading="lazy"></iframe>
      </div>
      <div class="container">
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <?php 
              $session = session();
              if (!empty($session->getFlashdata('success'))) { ?>
                <div class="alert alert-success">
                  <?php
                      echo  $session->getFlashdata('success');
                    }
                  ?>
                </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
            </div>
          </div>

         </div>
       </div>

      <div class="container">
        <div class="form">
          <form action="<?php echo base_url('UserController/contact')?>" method="post" >
            <?= csrf_field(); ?>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control <?php echo (isset($validation) && $validation->hasError('name')) ? 'is-invalid' : '';?>" id="name" placeholder="Your Name" />
                <?php  
                if (isset($validation) && $validation->hasError('name')) {
                  echo "<p class='invalid-feedback'>".$validation->getError('name')."</p>";
                }    ?>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control <?php echo (isset($validation) && $validation->hasError('email')) ? 'is-invalid' : '';?>" name="email" id="email" placeholder="Your Email" />
                <?php  
                if (isset($validation) && $validation->hasError('email')) {
                  echo "<p class='invalid-feedback'>".$validation->getError('email')."</p>";
                }    ?>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('subject')) ? 'is-invalid' : '';?>" name="subject" id="subject" placeholder="Subject" />
              <?php  
                if (isset($validation) && $validation->hasError('subject')) {
                  echo "<p class='invalid-feedback'>".$validation->getError('subject')."</p>";
                }    ?>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            </div>

            <div class="text-center">
              <input type="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?= $this->endSection() ?>