<?= $this->extend('index') ?>
 
 <?= $this->section('crud') ?>

 <div class="container-fluid bg-dark shadow-sm ">
    <div class="container pt-2 pb-2">
       <div class="text-white h4">CRUD Application in CodeIgniter 4 - <span>Update Records</span></div> 
    </div>
  </div>

<!-- create/insert records form   -->
<div class="container mt-4">
 <form action="" method="post" name="contactForm" id="contactForm">
    <div class="form-group">
    <label for="email">Title</label>
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('title')) ? 'is-invalid' : '' ?>" id="title" name="title" placeholder="Enter Title" value="<?php echo set_value('title', $book['title']);?>">
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
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('author')) ? 'is-invalid' : '' ?>" id="author" name="author" placeholder="Enter Author"  value="<?php echo set_value('author', $book['author'])?>" >
        <?php
            if (isset($validation) && $validation->hasError('author')) {
                echo "<p class='invalid-feedback'>".$validation->getError('author')."</p>";
            }
        ?> 
    </div>
    <div class="form-group">
    <label for="email">ISBN</label>
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('isbn')) ? 'is-invalid' : '' ?>" id="isbn" name="isbn" placeholder="Enter ISBN"  value="<?php echo set_value('isbn', $book['isbn'])?>">
        <?php
            if (isset($validation) && $validation->hasError('isbn')) {
                echo "<p class='invalid-feedback'>".$validation->getError('isbn')."</p>";
            }
        ?>
    </div>
    <div class="form-group">
    <label for="email">Mobile No</label>
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('mobile')) ? 'is-invalid' : '' ?>" id="mobile" name="mobile" placeholder="Enter mobile Nos" value="<?php echo set_value('mobile', $book['mobile'])?>">
        <?php
            if (isset($validation) && $validation->hasError('mobile')) {
                echo "<p class='invalid-feedback'>".$validation->getError('mobile')."</p>";
            }
        ?>
    </div> 
    <div class="form-group">
    <label for="email">Location</label>
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('destination_name')) ? 'is-invalid' : '' ?>" id="destination_name" name="destination_name" placeholder="Select  Location" value="<?php echo set_value('destination_name', $book['destination_name'])?>" >
        <?php
            if (isset($validation) && $validation->hasError('destination_name')) {
                echo "<p class='invalid-feedback'>".$validation->getError('destination_name')."</p>";
            }
        ?>
    </div>
    <div class="form-group">
    <label for="email">Select Image</label>
        <input type="file" id="photo" name="photo" class=" <?php echo (isset($validation) && $validation->hasError('photo')) ? 'is-invalid' : '' ?>" value="" >
        <?php
            if (isset($validation) && $validation->hasError('photo')) {
                echo "<p class='invalid-feedback'>".$validation->getError('photo')."</p>";
            }
        ?>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
 </form>
</div>

<!-- Back botton -->
<div class="container mt-2">
    <div class="text-right pt-2 pb-3">
      <a href="<?php echo base_url('CrudController/index'); ?>" class="btn btn-primary">Back</a>
    </div>
</div>

<!-- search by loaction script -->
<script type="text/javascript">
  function destinationBySearch() {
    var destination_name = $("#destination_name").val();
      if (destination_name) {
        window.location.href="<?php echo base_url('UserController') ?>"+ btoa(destination_name);
      } else {
        window.location.href='<?php echo base_url('UserController') ?>';
      }
    }
  </script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyA-WodmP1JT1rDgPv3L2WPCMjvms4oNwfQ" type="text/javascript"></script>

<script type="text/javascript">
    function initialize() {
           var input = document.getElementById('destination_name');
           var autocomplete = new google.maps.places.Autocomplete(input);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
 <?= $this->endsection('crud') ?>

