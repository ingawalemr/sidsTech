<?= $this->extend('index') ?>
 
 <?= $this->section('forgot_pass') ?>

<!-- <h2 class="card" style="backgorund-color=red;">CRUD Application</h2> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php 
        $session = \Config\Services::session($config);
        if (!empty($session->getFlashdata('success'))) {  ?>
            <div class="alert alert-success">
                <?php echo $session->getFlashdata('success'); ?>
            </div>
        <?php  }  ?>
        </div>
    </div>
</div>

<div class="header">    <h2>Forgot Password</h2> </div>
    <form method="post" action="<?php //echo base_url('LoginController/forgot_password'); ?>" >
        <div class="form-group">
            <label for="pwd">Enter Password</label>
            <input type="password" class="form-control <?php echo (isset($validation) && $validation->hasError('pass')) ? 'is-invalid' : ''?>" name="pass" id="pass">
            <?php
            if (isset($validation) && $validation->hasError('pass')) {
                echo  "<p class='invalid-feedback'>".$validation->getError('pass')."</p>";
            } ?>
        </div>

        <div class="form-group">
            <label for="pwd">Confirm Password</label>
            <input type="password" class="form-control <?php echo (isset($validation) && $validation->hasError('Cpass')) ? 'is-invalid' : '' ?>" name="Cpass" id="Cpass">
            <?php
            if (isset($validation) && $validation->hasError('Cpass')) {
                echo  "<p class='invalid-feedback'>".$validation->getError('Cpass')."</p>";
            } ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Update and Save</button>       <br>
    </form>
<br>

 <?= $this->endsection('crud') ?>

