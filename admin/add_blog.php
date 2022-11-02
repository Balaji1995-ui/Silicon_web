<?php
	require 'header.php';
	require 'api/lib.php';
	$msg = "";
	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$sub_title = $_POST['sub_title'];
		$author = $_POST['author'];
		$category = $_POST['category'];
		$blog_text =$_POST['blog_text'];
		$img = $_FILES['img']['name'];
		$check = false;
		if (!empty($_FILES['img'])) {
			$target_dir = "img/blog/";
			$target_file = $target_dir . basename($_FILES["img"]["name"]);
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["img"]["tmp_name"]);
		}

		if($check !== false) {
		 	require 'api/conn.php';
			if (mysqli_query($conn,"INSERT INTO `blog_post` (`title`,`sub_title`,`author`,`category`,`blog_text`,`thum`) VALUES ('$title','$sub_title','$author','$category','$blog_text','$img')")) {

				if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
					$msg = '<p class=" text-center alert alert-success">'.'Blog Created!'.'</p>';
				}
			}else{
				$msg = '<p class=" text-center alert alert-danger">'."Fail to Create Blog !".'</p>';
			}

		} else {
			require 'api/conn.php';
			if (mysqli_query($conn,"INSERT INTO `blog_post` (`title`,`sub_title`,`author`,`category`,`blog_text`,`thum`) VALUES ('$title','$sub_title','$author','$category','$blog_text','$img')")) {
				
			}
		}
	}
?>
		<h3>Add Blog</h3>

	<div class="row">
		<?php echo $msg; ?>
		<form class="form px-5" action="" method="post" enctype="multipart/form-data" style="width:100%;">
			<div class="form-group">
				<label for="" class="form-label">Blog title</label>
				<input  class="form-control" type="text" name="title" placeholder="Title" required>
			</div>

			<div class="form-group">
				<label for="" class="form-label">Blog sub title</label>
				<input  class="form-control" type="text" name="sub_title" placeholder="Sub Title">
			</div>

			<div class="form-group">
				<label for="" class="form-label">Author Name</label>
				<input  class="form-control" type="text" name="author" placeholder="Author Name" required>
			</div>

			<div class="form-group" style="width:50%;">
				<select name="category" class="form-control" required>

					<?php 
						$result = getBlogCategory(); 
						while ($value = mysqli_fetch_assoc($result)) {
					?>

					<option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="" class="form-label">Blog Description</label>
				<textarea class="form-control" id="text_box" name="blog_text" required>
				
				</textarea>
				<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
				<script>
					 CKEDITOR.replace( 'text_box' );
				</script>
			</div>
			<div>
				<input type="file" name="img">
			</div>

			<div class="form-group mt-4">
				<input type="submit" class="btn btn-primary" value="Post" name="submit">
			</div>
			
		</form>
	</div>

<?php require 'footer.php'; ?>