<?php
	require 'header.php';
	require 'api/liba.php';
	$msg = "";
	if (isset($_POST['submit'])) {
		$facebook = $_POST['Facebook_Link'];
		$instagram = $_POST['Instagram_Link'];
		$Twitter = $_POST['Twitter_Link'];
		$linkedin = $_POST['LinkedIn_Link'];
   $flag= updateSocial($facebook,$instagram,$Twitter,$linkedin);

       if ($facebook !=="" && $linkedin !=="" ) {
        
        $msg = '<p class=" text-center alert alert-success">'.'Social Link Updated!'.'</p>';
       }
     
   else{
    $msg = '<p class=" text-center alert alert-danger">'."Are you want to Update Social Link ?".'</p>'; 
    }
					}

?>


 
<div class="container mt-3 mb-5">


  <h2>System Settings</h2>
  <?php echo $msg; ?>
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
      <a class="nav-link text-muted active" href="settings_social.php? key=22&id=<?php echo $id ?> ">Social media</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" href="settings_contect.php">Contect</a>
    </li>
   
  </ul>
  <div class="bg-white p-3">

  
    <form class="form" method="post"  action="" enctype="multipart/form-data">

      <div class="form-group">
        <label class="form-label">Facebook Link</label>
        <input placeholder="Enter your facebook URL" type="text" name="Facebook_Link"  class="form-control">
      </div>

       <div class="form-group">
        <label class="form-label">Instagram Link</label>
        <input placeholder="Enter your instagram URL" type="text"    name="Instagram_Link" class="form-control">
      </div>

       <div class="form-group">
        <label class="form-label">Twitter Link</label>
        <input placeholder="Enter your twitter URL" type="text" name="Twitter_Link" class="form-control">
      </div>

       <div class="form-group">
        <label class="form-label">LinkedIn Link</label>
        <input placeholder="Enter your linkedin URL" type="text" name="LinkedIn_Link"  class="form-control">
      </div>
      
      <input type="submit" class="btn btn-success" value="Save" name="submit">
      <input type="reset" class="btn btn-danger" value="Clear" name="reset">
    </form>
    <!-- <div class="alert alert-warning mt-4">Saved</div> -->
  </div>
 
</div>
<?php require 'footer.php';?>