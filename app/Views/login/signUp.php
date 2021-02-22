<?= $this->extend('index') ?>

<?= $this->Section('signUp') ?>

<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <link href="<?php echo base_url('public/assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
  <div class="header class="pt-3"">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="<?php //echo base_url('LoginController/signUp'); ?>">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="" class="<?php echo (isset($validation) && $validation->hasError('username')) ? 'is-invalid' : ''?>">
		<?php
		if (isset($validation) && $validation->hasError('username')) {
			//echo  $validation->getError('username');
			echo  "<p class='invalid-feedback'>".$validation->getError('username')."</p>";
		}
		?>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="" class="<?php echo (isset($validation) && $validation->hasError('email')) ? 'is-invalid' : ''?>">
		<?php
		if (isset($validation) && $validation->hasError('email')) {
			echo  "<p class='invalid-feedback'>".$validation->getError('email')."</p>";
		}
		?>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="pass" class="<?php echo (isset($validation) && $validation->hasError('pass')) ? 'is-invalid' : ''?>">
		<?php
		if (isset($validation) && $validation->hasError('pass')) {
			echo  "<p class='invalid-feedback'>".$validation->getError('pass')."</p>";
		} ?>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="Cpass" class="<?php echo (isset($validation) && $validation->hasError('Cpass')) ? 'is-invalid' : ''?>">
		<?php
		if (isset($validation) && $validation->hasError('Cpass')) {
			echo  "<p class='invalid-feedback'>".$validation->getError('Cpass')."</p>";
		}
		?>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>Already a member? <a href="<?php echo base_url('LoginController/login'); ?>">Sign in</a></p>
	<p>Sig In With  <i class="fa fa-facebook-official" aria-hidden="true"></i> 
            <i class="fa fa-google-plus-official" aria-hidden="true"></i>
	</p>
  	
  </form>
</body>
</html>

<?= $this->endsection() ?>