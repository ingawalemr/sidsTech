 <?= $this->extend('index') ?>
 
 <?= $this->section('crud') ?>

<div class="container-fluid bg-dark shadow-sm ">
    <div class="container pt-2 pb-2">
       <div class="text-white h4">CRUD Application in CodeIgniter 4</div> 
    </div>
</div>

<!-- craete botton -->
<div class="container mt-2">
    <div class="text-right pt-2 pb-3">
      <a href="<?php echo base_url('CrudController/create'); ?>" class="btn btn-primary">Create</a>
    </div>
</div>

<!-- session display -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if (!empty($session->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                      <?php echo $session->getFlashdata('success'); ?>
                    </div>
        <?php   }   ?>

        <?php
                if (!empty($session->getFlashdata('fail'))) { ?>
                    <div class="alert alert-danger">
                      <?php echo $session->getFlashdata('fail'); ?>
                    </div>
        <?php   }   ?>
        </div>
    </div>
</div>

<!--display record  -->
<div class="card">
    <div class="card-body">
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Mobile Nos </th>
            <th>Action </th>
        </tr>
        <tr>
        <?php
        //if (!empty($books)) { 
            foreach ($books as $book) { ?>
            <th><?php echo $book['id'] ; ?></th>
            <th><?php echo $book['title'] ; ?></th>
            <th><?php echo $book['author'] ; ?></th>
            <th><?php echo $book['isbn'] ; ?></th>
            <th><?php echo $book['mobile'] ; ?></th>
            <th>
                <a href="<?php echo base_url('CrudController/edit/'.$book['id']); ?>" class="btn btn-success btn-sm">Edit</a>
               
                <a href="#" onclick="deleteConfirm(<?php echo $book['id'] ?>)" class="btn btn-danger btn-sm">Delete</a>
               
                <!-- <a href="<?php //echo base_url('CrudController/delete/'.$book['id']); ?>" class="btn btn-danger btn-sm">Delete</a> -->
            </th>
        </tr>
      <?php  }          ?>
        
    </table>
  </div>
</div>
<br>

    <script>
    function deleteConfirm(id) {
        //alert(id);
        if (confirm('do you want delete?')) {
            window.location.href="<?php echo base_url('CrudController/delete/') ?>/"+id;
            // window.location.href="<?php echo base_url('CrudController/delete/') .'/'?>"+id;
        }
    }
    </script>

 <?= $this->endsection('crud') ?>

