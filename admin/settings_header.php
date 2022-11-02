<?php require 'header.php' ;
require 'api/lib.php';
$msg = "";
if (isset($_POST['submit'])) {
  $header_title = $_POST['header_title'];
  $logo = $_FILES['logo']['name'];
  $check = false;
  if (!empty($_FILES['logo'])) {
    $target_dir = "img/blog/";
    $target_file = $target_dir . basename($_FILES["logo"]["name"]);
    
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["logo"]["tmp_name"]);
  }
  if($check !== false) {
    require 'api/conn.php';
   if (mysqli_query($conn,"UPDATE meta SET `header_title`='$header_title',`logo`='$logo'")) {

    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)){
      $msg = '<p class=" text-center alert alert-success">'.'Header Title Updated!'.'</p>';
    }
      
   
   }else if($logo==""){
     $msg = '<p class=" text-center alert alert-danger">'."Fail to Site Name !".'</p>';
   }

 } else {
   require 'api/conn.php';
   if (mysqli_query($conn,"UPDATE meta SET `header_title`='$header_title', `logo`='$logo' where 'site_title'='$site_title ")) {
     
   }
 }

} ?>
<div class="container mt-3 mb-5">
  <h2>System Settings</h2>
  <ul class="nav nav-tabs mt-4">
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings.php">Meta</a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-muted active" href="settings_header.php">Header</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings_footer.php">Footer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings_social.php">Social media</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings_contect.php">Contect</a>
    </li>
   
  </ul>
  <div class="bg-white p-3">
  <?php echo $msg; ?>
    <form class="form"  method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="form-label">Title</label>
        <input type="text" name="header_title" class="form-control">
      </div>
      <div class="form-group">
        <label class="form-label text-primary font-weight-bold">Logo</label>
        <input type="file" name="logo" class="">
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
      
      
      <button type="submit" name="submit" value="Post" class="btn btn-primary">Save</button>
    </form>
    <!-- <div class="alert alert-warning mt-4">Saved</div> -->
  </div>
</div>
<?php require 'footer.php';?>