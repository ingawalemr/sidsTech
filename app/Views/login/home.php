<?= $this->extend('index') ?>

<?= $this->section('Homepage') ?>
<div class="container">
    <h2>Home Page</h2>
</div>

 <!-- session display , after login -->
 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
      $session = \Config\Services::session($config); //The $config parameter is optiona
        if (!empty($session->getFlashdata('msg'))) { ?>
          <div class="alert alert-success">
            <?php echo $session->getFlashdata('msg'); ?>
          </div>
  <?php   }   ?>
        </div>
    </div>
</div>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('LoginController/logout'); ?>">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php      // session show for login page
    $session = \Config\Services::session($config); 
    echo "Welcome ".$session->get('admin'); 
  ?>
<br><br>
<?= $this->endsection() ?>