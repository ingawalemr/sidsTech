<?= $this->extend('index') ?>
 
 <?= $this->section('login') ?>

<!-- <h2 class="card" style="backgorund-color=red;">CRUD Application</h2> -->

    <div class="header">
        <h2>Login Here</h2>
    </div>

    <form action="">
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> View password
            </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
<br>

    <p style="padding-left:150px;">If you have Not having Account? <a href="<?php echo base_url('LoginController/signUp'); ?>">SIGN UP</a> &nbsp;&nbsp;&nbsp; SIGN IN with facebook/Gmail </p>

 <?= $this->endsection('crud') ?>

