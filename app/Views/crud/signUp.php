<?= $this->extend('index') ?>

<?= $this->Section('signUp') ?>
<h2 class="pt-3">Sign UP Page</h2>

<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <link href="<?php echo base_url('public/assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="<?php echo base_url('CrudController'); ?>">Sign in</a>
  	</p>
  </form>
</body>
</html>

<?= $this->endsection() ?>