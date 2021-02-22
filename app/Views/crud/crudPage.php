 <?= $this->extend('index') ?>
 
 <?= $this->section('crud') ?>

<div class="container-fluid bg-dark shadow-sm ">
    <div class="container pt-2 pb-2">
       <div class="text-white h4">CRUD Application in CodeIgniter 4</div> 
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('CrudController/create'); ?>" class="btn btn-primary"" style="color:red;">Add new Record</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

 <!-- search and create botton -->
<div class="container mt-2">
    <div class="text-right pt-2 pb-3">
        <div class="row">
            <!-- search botton -->
            <div class="col-md-6">
                <form id="searchFrm" name="searchFrm" method="get" action="">
                    <input type="text" id="q" name="q" value="" class="form-control" placeholder="search">
                    <button type="submit">Search</button>
                </form>
        </div>
        <!-- create botton -->
        <div class="col-md-6">
            <a href="<?php echo base_url('CrudController/create'); ?>" class="btn btn-primary">Create</a>
        </div>
      </div>
    </div>
</div>

<!-- session display -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $session = \Config\Services::session($config); //The $config parameter is optiona
                if (!empty($session->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                      <?php echo $session->getFlashdata('success'); ?>
                    </div>
        <?php   }   ?>

        <?php
        $session = \Config\Services::session($config);  //The $config parameter is optiona
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
            <th>Location </th>
            <th>Image </th>
            <th>Action </th>
        </tr>
        <tr>
        <?php
        if (!empty($books)) { 
            foreach ($books as $book) { ?>
            <th><?php echo $book['id'] ; ?></th>
            <th><?php echo $book['title'] ; ?></th>
            <th><?php echo $book['author'] ; ?></th>
            <th><?php echo $book['isbn'] ; ?></th>
            <th><?php echo $book['mobile'] ; ?></th>
            <th><?php echo $book['destination_name'] ; ?></th>
            <th><img src="<?php echo base_url().'./public/assets/img/'.$book['photo'] ?>" alt="" width="20" heigth="20" class="w-100"></th>
            <th>
                <a href="<?php echo base_url('CrudController/edit/'.$book['id']); ?>" class="btn btn-success btn-sm">Edit</a>
               
                <a href="#" onclick="deleteConfirm(<?php echo $book['id'] ?>)" class="btn btn-danger btn-sm">Delete</a>
               
                <!-- <a href="<?php //echo base_url('CrudController/delete/'.$book['id']); ?>" class="btn btn-danger btn-sm">Delete</a> -->
            </th>
        </tr>
      <?php  }     }   else {  ?>
            <tr>
            <th colspan="8">No Record Found</th>
            </tr>
      <?php } ?>
        
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

