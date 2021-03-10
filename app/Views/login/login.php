<?= $this->extend('index') ?>
 
 <?= $this->section('login') ?>

<!-- <h2 class="card" style="backgorund-color=red;">CRUD Application</h2> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php 
        $session = \Config\Services::session($config);
        if (!empty($session->getFlashdata('msg'))) {  ?>
            <div class="alert alert-success">
                <?php echo $session->getFlashdata('msg'); ?>
            </div>
        <?php  }  ?>
        </div>
    </div>
</div>
<!-- flashdata for login fail -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php 
        $session = \Config\Services::session($config);
        if (!empty($session->getFlashdata('fail'))) {  ?>
            <div class="alert alert-danger">
                <?php echo $session->getFlashdata('fail'); ?>
            </div>
        <?php  }  ?>
        </div>
    </div>
</div>


<div class="header">    <h2>Login Here</h2> </div>
    <form method="post" action="<?php echo base_url('LoginController/login'); ?>" >
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control <?php echo (isset($validation) && $validation->hasError('email')) ? 'is-invalid' : ''?>" name="email" id="email" placeholder="Enter email"  >
                <?php
                if (isset($validation) && $validation->hasError('email')) {
                    echo  "<p class='invalid-feedback'>".$validation->getError('email')."</p>";
                } ?>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control <?php echo (isset($validation) && $validation->hasError('pass')) ? 'is-invalid' : ''?>" name="pass" id="pass" placeholder="Enter password" >
                <?php
                if (isset($validation) && $validation->hasError('pass')) {
                    echo  "<p class='invalid-feedback'>".$validation->getError('pass')."</p>";
                } ?>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="view_password" id="view_password" onclick="myFunction()">Show Password
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button> &nbsp;&nbsp;&nbsp;
            
            <a href="<?php echo base_url('LoginController/forgot_password'); ?>">
                Forgot Password
            </a>
            
            <p class="pt-2">If you have Not having Account? <a href="<?php echo base_url('LoginController/signUp'); ?>">SIGN UP</a></p>
            
            <a href="#" class="btn btn-block btn-primary">Sign in using Facebook
            <i class="fa fa-facebook "></i>  </a>
           
            <?php if (!isset($loginButton)) : ?>
           <a href="<?= $loginButton; ?>" class="btn btn-block btn-danger">Sign in using Google+
            <i class="fa fa-google-plus "></i>  </a>
            <?php endif;?>
    </form>
<br>
<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";    // show text of password
  } else {
    x.type = "password";    // show invisible text of password
  }
}
</script>
 <?= $this->endsection('crud') ?>

