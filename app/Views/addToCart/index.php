
<?= $this->extend('index') ?>

<?= $this->Section('addToCart') ?>

<h1>add to cart page</h1>
<div class="container mt-4">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4> Add Images
					<a href="<?php echo base_url('/image'); ?>"  class="btn btn-danger btn-sm float-end">Back</a>
					</h4>
				</div>

				<div class="card-body">
				<form action="<?= base_url('image-store'); ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group mb-2">
							 <label> Name </label>
							 <input id="name" name="name" type="text" placeholder="Enter Product Name" class="form-control">								
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group mb-2">
							 <label> Price </label>
							 <input id="price" name="price" type="text" placeholder="Enter Product Price" class="form-control">								
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group mb-2">
							 <label> Status : </label>&nbsp;
							 <input name="status" value="1" type="radio" id="statusActive">
		              		<label for="statusActive">Active</label>
		              		&nbsp;&nbsp;&nbsp;
		              		 <input name="status" value="0" type="radio" id="inActive">
		              		<label for="inActive">In-Active</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group mb-2">
							 <label> Description </label>
							 <textarea class="textarea" name="description" id="description" rows="3"></textarea>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group mb-2">
							 <label>Select Image : </label>
							 <input  id="image" name="image" type="file" class="form-control">
							</div>
						</div>
						<div class="col-md-12"><br>
							<button type="submit" class="btn btn-primary">
								Save
							</button> 
						</div>
					</div>
				</form>
				</div>

			</div>
		</div>
	</div>
</div>
<br>

<?= $this->endsection('addToCart') ?>