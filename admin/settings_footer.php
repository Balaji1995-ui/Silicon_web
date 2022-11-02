<?php require 'header.php' ?>
<div class="container mt-3 mb-5">
  <h2>System Settings</h2>
  <ul class="nav nav-tabs mt-4">
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings.php">Meta</a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-muted" href="settings_header.php">Header</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted active" href="settings_footer.php">Footer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings_social.php">Social media</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings_contect.php">Contect</a>
    </li>
   
  </ul>
  <div class="bg-white p-3">
    <form class="form">
      <div class="row">
      	<div class="col-8 d-flex align-items-center">
      		<h5>Footer Menu</h5>
      	</div>
      	<div class="col-4">
      		<select class="form-control">
      			<option>ON</option>
      			<option>OFF</option>
      		</select>
      	</div>
      </div>

      <hr>

      <div class="row">
      	<div class="col-8 d-flex align-items-center">
      		<h5>Footer social Link</h5>
      	</div>
      	<div class="col-4">
      		<select class="form-control">
      			<option>ON</option>
      			<option>OFF</option>
      		</select>
      	</div>
      </div>
      
      <hr>

       <div class="row">
      	<div class="col-8 d-flex align-items-center">
      		<h5>News latter</h5>
      	</div>
      	<div class="col-4">
      		<select class="form-control">
      			<option>ON</option>
      			<option>OFF</option>
      		</select>
      	</div>
      </div>

      <hr>
      <input class="btn btn-primary" type="submit" value="Save" name="">
    </form>
    <div class="alert alert-warning mt-4">Saved</div>
  </div>
</div>
<?php require 'footer.php';?>