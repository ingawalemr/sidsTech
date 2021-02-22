<?= $this->extend('index') ?>

<?= $this->section('userPage') ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 mb-3 bg-dark text-white text-center">
      Single Image Upload
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-6 mb-3">
      <label>Select Image : </label>
      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('UserController/upload'); ?>">
        <input class="file" id="photo" name="photo" type="file" class="form-control"><br><br>

        <!-- Error -->
        <?php
        if (isset($validation) && $validation->hasError('photo')) { ?>
          <div class='alert alert-danger mt-2'>
            <?php echo $validation->getError('photo'); ?>
          </div>
        <?php   } ?>
        <input type="submit" name="upload" value="upload">
      </form>
    </div>
  </div>
  <br><br>

  <?= $this->endSection() ?>