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
      <a class="nav-link text-muted" href="settings_footer.php">Footer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings_social.php">Social media</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted active" href="settings_contect.php">Contect</a>
    </li>
   
  </ul>
  <div class="bg-white p-3">
    <form class="form">

      <div class="form-group">
        <label class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control">
      </div>

       <div class="form-group">
        <label class="form-label">Contect Number</label>
        <input type="number" name="phone" class="form-control">
      </div>

       <div class="form-group">
        <label class="form-label">Contect Address</label>
        <textarea class="form-control">
          
        </textarea>
      </div>

      <div class="form-group">
        <label class="form-label">Google Map</label>
        <textarea class="form-control">
          
        </textarea>
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <div class="alert alert-warning mt-4">Saved</div>
  </div>
</div>
<?php require 'footer.php';?>