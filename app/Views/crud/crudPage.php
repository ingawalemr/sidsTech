 <?= $this->extend('index') ?>
 
 <?= $this->section('crud') ?>

<!-- <h2 class="card" style="backgorund-color=red;">CRUD Application</h2> -->
<h2 class="pt-3">CRUD Application</h2>

<div class="container" >
  <h2>Login Here</h2>
  <div class="row">
    <div class="col-md-6">
        <form action="">
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> View password
            </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>
    <div class="col-md-6">
        <p> SIGN IN with facebook/Gmail</p>
    </div>
  </div>
  
</div>
<br>
<div class="row">
    <div class="col-md-8" style="padding-left:100px;">
        <p>If you have Not having Account? SIGN UP </p>
    </div>
</div> 

 <?= $this->endsection('crud') ?>

