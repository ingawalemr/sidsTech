
<?= $this->extend('index') ?>

<?= $this->section('videoUpload') ?>


<div class="container mt-4">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="text-center"> Go Back
					<a href="<?php echo base_url('/image'); ?>"  class="btn btn-danger btn-sm float-end">Back</a>
					</h4>
				</div>

				<div class="card-body">
				<!-- <form action="<?php //echo base_url('ImageController/storeMultipleImg'); ?>" method="post" enctype="multipart/form-data"> -->
					<!-- or we can take action  as below  -->
				<form action="<?= base_url('video-store'); ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group mb-2">
							 <label>Select Video : </label>
							 <input name="video" type="file" class="form-control">
							</div>
						</div>
						<div class="col-md-12"><br>
							<button type="submit" class="btn btn-primary">Save</button> 
						</div>
					</div>
				</form>
				</div>

			</div>
		</div>
	</div>
</div>
<br>
<?= $this->endsection() ?>