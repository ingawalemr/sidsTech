<?= $this->extend('index') ?>
 
 <?= $this->section('crud') ?>

 <div class="container-fluid bg-dark shadow-sm ">
    <div class="container pt-2 pb-2">
       <div class="text-white h4">CRUD Application in CodeIgniter 4-<span>Insert Records</span></div> 
    </div>
  </div>

<!-- create/insert records form   -->
<div class="container mt-4">
 <form action="" method="post" name="contactForm" id="contactForm">
    <div class="form-group">
    <label for="email">Title</label>
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('title')) ? 'is-invalid' : '' ?>" id="title" name="title" placeholder="Enter Title" value="<?php echo set_value('title')?>">
        <?php
        //print_r($validation);
        if (isset($validation) && $validation->hasError('title')) {
           // echo $validation->getError('title');
           echo "<p class='invalid-feedback'>".$validation->getError('title')."</p>";
        }
        ?>
    </div>
    
    <div class="form-group">
    <label for="email">Author</label>
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('author')) ? 'is-invalid' : '' ?>" id="author" name="author" placeholder="Enter Author"  value="<?php echo set_value('author')?>" >
        <?php
            if (isset($validation) && $validation->hasError('author')) {
                echo "<p class='invalid-feedback'>".$validation->getError('author')."</p>";
            }
        ?> 
    </div>
    <div class="form-group">
    <label for="email">ISBN</label>
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('isbn')) ? 'is-invalid' : '' ?>" id="isbn" name="isbn" placeholder="Enter ISBN"  value="<?php echo set_value('isbn')?>">
        <?php
            if (isset($validation) && $validation->hasError('isbn')) {
                echo "<p class='invalid-feedback'>".$validation->getError('isbn')."</p>";
            }
        ?>
    </div>
    <div class="form-group">
    <label for="email">Mobile No</label>
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('mobile')) ? 'is-invalid' : '' ?>" id="mobile" name="mobile" placeholder="Enter mobile Nos" value="<?php echo set_value('mobile')?>">
        <?php
            if (isset($validation) && $validation->hasError('mobile')) {
                echo "<p class='invalid-feedback'>".$validation->getError('mobile')."</p>";
            }
        ?>
    </div> 
    <button type="submit" class="btn btn-primary">Save</button>
 </form>
</div>

<!-- Back botton -->
<div class="container mt-2">
    <div class="text-right pt-2 pb-3">
      <a href="<?php echo base_url('CrudController/index'); ?>" class="btn btn-primary">Back</a>
    </div>
</div>

 <?= $this->endsection('crud') ?>

