<?php require 'header.php'; require 'api/lib.php'; $msg = ""; ?>

<?php
	if (isset($_POST['submit'])) {
			$title = $_POST['title'];
			$sub_title = $_POST['sub_title'];
			$author = $_POST['author'];
			$category = $_POST['category'];
			$text = $_POST['blog_text'];
			$id = $_GET['id'];
			$flag = updateBlog($id,$title,$sub_title,$author,$category,$text);
			if ($flag) {
				$msg = '<p class=" text-center alert alert-success">'.'Blog Updated!'.'</p>';
			}else{
				$msg = '<p class=" text-center alert alert-danger">'."Fail to Update Blog !".'</p>';
			}

		}
?>

<h3>Edit Blog</h3>
<?php echo $msg; ?>
	<div class="row">
		<?php

			if (!empty($_GET['key'] == 22)) {
				$id = $_GET['id'];
				
				$result = fetchSingleBlog($id);
				if ($result !== false) {
					$result = mysqli_fetch_assoc($result);
					$img = $result['thum'];
		?>
		<form class="form px-5" action="" method="post" enctype="multipart/form-data" style="width:100%;">
			<div class="form-group">
				<label for="" class="form-label">Blog title</label>
				<input  class="form-control" type="text" name="title" value="<?php echo $result['title']?>" required>
			</div>

			<div class="form-group">
				<label for="" class="form-label">Blog sub title</label>
				<input  class="form-control" type="text" name="sub_title" value="<?php echo $result['sub_title']?>" required>
			</div>

			<div class="form-group">
				<label for="" class="form-label">Author Name</label>
				<input  class="form-control" type="text" name="author" value="<?php echo $result['author']?>" required>
			</div>

			<div class="form-group" style="width:50%;">
				<select name="category" class="form-control" required>
					<option value="<?php echo $result['category']; ?>"><?php echo $result['category']; ?></option selected>
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
					 
					
					 CKEDITOR.replace('text_box');
					 CKEDITOR.instances['text_box'].setData();
				</script>
			</div>
			<div>
				<?php if(!empty($img)){ ?>
				<input type="file" name="img">
				
				<img class="img-thumbnail" style="width:100px;" src="img/blog/<?php echo $img; ?>">
			<?php } ?>
			</div>
			
			<div class="form-group mt-4">
				<input type="submit" class="btn btn-success" value="Save" name="submit">
			</div>
			
		</form>
		<?php
			}
		}
		?>
	</div>



<?php require 'footer.php'; ?>