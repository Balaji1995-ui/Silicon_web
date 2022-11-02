<?php 
	require 'header.php';
	require 'api/lib.php';

	$msg = "";
	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$sub_title = $_POST['sub_title'];
		$text =$_POST['text'];
		$btn = $_POST['btn_text'];

		$img = $_FILES['img']['name'];

		$check = false;
		if (!empty($_FILES['img'])) {
			$target_dir = "img/service/";
			$target_file = $target_dir . basename($_FILES["img"]["name"]);
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["img"]["tmp_name"]);
		}

		if($check !== false) {
		 	require 'api/conn.php';
			if (mysqli_query($conn,"INSERT INTO `services` (`title`,`sub_title`,`description`,`thum`,`btn_text`) VALUES ('$title','$sub_title','$text','$img','$btn')")) {

				if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
					$msg = '<p class=" text-center alert alert-success">'.'Service Added!'.'</p>';
				}
			}else{
				$msg = '<p class=" text-center alert alert-danger">'."Fail to add service !".'</p>';
			}

		} else {
			$msg = '<p class=" text-center alert alert-danger">'."Image missing !".'</p>';
		}
	}

?>
		<h3>Update Service</h3>

	<div class="row">
		<?php echo $msg; ?>
		<form class="form px-5" action="" method="post" enctype="multipart/form-data" style="width:100%;">
			<div class="form-group">
				<label for="" class="form-label">Service title</label>
				<input  class="form-control" type="text" name="title" placeholder="Title" required>
			</div>

			<div class="form-group">
				<label for="" class="form-label">Service sub title</label>
				<input  class="form-control" type="text" name="sub_title" placeholder="Sub Title" required>
			</div>

			<div class="form-group">
				<label for="" class="form-label">Button Text</label>
				<input  class="form-control" Value="Contact" type="text" name="btn_text" required>
			</div>
			
			<div class="form-group">
				<label for="" class="form-label">Service Description</label>
				<textarea name="text" class="form-control" id="text_box" required>
				
				</textarea>
				<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
				<script>
					 CKEDITOR.replace( 'text_box' );
				</script>
			</div>
			<hr>
			<div>
				<label class="form-label">Thumbnail Image</label>
				<br>
				<input type="file" name="img" required>
			</div>

			<div class="form-group mt-4">
				<input type="submit" class="btn btn-primary" value="Post" name="submit">
			</div>
		</form>
	</div>
<?php require 'footer.php'; ?>