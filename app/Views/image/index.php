<?= $this->extend('index') ?>

<?= $this->section('imageUploadDB') ?>


<div class="container mt-4">
	<div class="row justify-content-center">
		<div class="col-md-12">
			 <?php
            $session = \Config\Services::session($config); //The $config parameter is optiona
                if (!empty($session->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                      <?php echo $session->getFlashdata('success'); ?>
                    </div>
       		 <?php   }   ?>

       		 
			<div class="card">
				<div class="card-header">
					<h4>Image Upload in CodeIgniter 4 with MySQL
						<a href="<?php echo base_url('/image/create'); ?>"  class="btn btn-primary btn-sm float-end">Add</a>
					</h4>
				</div>

				<div class="card-body">

				</div>
			</div>
		</div>
	</div>
</div>
<br>
<?= $this->endsection() ?>