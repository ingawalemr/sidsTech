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
					<h4>Single Image Upload in CodeIgniter 4 with MySQL
						<a href="<?php echo base_url('/image/create'); ?>"  class="btn btn-primary btn-sm float-end">Add Single Image</a>
					</h4>
				</div>
				<br><br>
				<div class="card-header">
					<h4>Multiple Image Upload in CodeIgniter 4
						<a href="<?php echo base_url('/image/createMultipleImg'); ?>"  class="btn btn-primary btn-sm float-end">Add Multiple Image</a>
					</h4>
				</div>
				<br><br>
				<div class="card-header">
					<h4>Video Upload in CodeIgniter 4
						<a href="<?php echo base_url('/video/create'); ?>"  class="btn btn-primary btn-sm float-end">Add Video</a>
					</h4>
				</div>
			</div>

		</div>
	</div>
</div>
<br>
<?= $this->endsection() ?>