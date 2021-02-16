<?= $this->extend('index') ?>
<?= $this->section('login') ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Login Page</h2>
          <ol>
            <li><a href="<?php echo base_url()?>/UserController">Home</a></li>
            <li>Login Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-4">
      <div class="container">
        <div class="container">
        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>

              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
            </div>
            
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?= $this->endsection() ?>