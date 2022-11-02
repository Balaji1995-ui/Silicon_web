<?php require 'header.php' ;
require 'api/lib.php';
$msg = "";
	if (isset($_POST['submit'])) {
		$site_title = $_POST['site_title'];
    $fevicon = $_FILES['fevicon']['name'];
		$check = false;
    if (!empty($_FILES['fevicon'])) {
			$target_dir = "img/blog/";
			$target_file = $target_dir . basename($_FILES["fevicon"]["name"]);
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fevicon"]["tmp_name"]);
		}
    
		if($check !== false) {
      require 'api/conn.php';
     if (mysqli_query($conn,"UPDATE meta SET `site_title`='$site_title',`fevicon`='$fevicon'")) {

      if (move_uploaded_file($_FILES["fevicon"]["tmp_name"], $target_file)){
        $msg = '<p class=" text-center alert alert-success">'.'Site_Name Updated!'.'</p>';
      }
        
     
     }else{
       $msg = '<p class=" text-center alert alert-danger">'."Fail to Site Name !".'</p>';
     }

   } else {
     require 'api/conn.php';
     if (mysqli_query($conn,"UPDATE meta SET `site_title`='$site_title', `fevicon`='$fevicon' where 'site_title'='$site_title ")) {
       
     }
   }
 }
    ?>
    
<div class="container mt-3 mb-5">
<?php echo $msg; ?>
  <h2>System Settings</h2>
  <ul class="nav nav-tabs mt-4">
    <li class="nav-item">
      <a class="nav-link active" href="settings.php">Meta</a>
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
      <a class="nav-link text-muted" href="settings_contect.php">Contect</a>
    </li>
   
  </ul>

  <div class="bg-white p-3">
  	<form class="form" action="" method="post" enctype="multipart/form-data">
  		<div class="form-group">
  			<label class="form-label">Site Title</label>
  			<input type="text" placeholder="Site Title" name="site_title" class="form-control">
  		</div>
  		<div class="form-group">
  			<label class="form-label text-danger">Favicon Icon</label>
  			<input type="file" name="fevicon" class="">
  		</div>
  		
  		<button type="submit" name="submit" value="Post" class="btn btn-primary">Save</button>
  	</form>
  	<!-- <div class="alert alert-warning mt-4">Saved</div> -->
  </div>

</div>

<?php require 'footer.php';?>