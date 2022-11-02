<?php require 'header.php'; require 'api/lib.php'; $msg = ""; ?>

<?php
	if (isset($_POST['submit'])) {
			$title = $_POST['title'];
			$title1 = $_POST['title1'];
			$title2 = $_POST['title2'];
			$sub_title = $_POST['sub_title'];
			$id = $_GET['id'];
			$flag = updateSlide($id,$title,$sub_title,$title1,$title2);
			if ($flag) {
				$msg = '<p class=" text-center alert alert-success">'.'Slide Updated!'.'</p>';
			}else{
				$msg = '<p class=" text-center alert alert-danger">'."Fail to Update Slide !".'</p>';
			}

		}
?>

<h3>Edit Slide</h3>
<?php echo $msg; ?>
	<div class="row">
		<?php

			if (!empty($_GET['key'] == 22)) {
				$id = $_GET['id'];
				
				$result = fetchSingleSlide($id);
				if ($result !== false) {
					$result = mysqli_fetch_assoc($result);
					
		?>
		<form class="form px-5" action="" method="post" enctype="multipart/form-data" style="width:100%;">
			<div class="form-group">
				<label for="" class="form-label">Slide title</label>
				<input  class="form-control" type="text" name="title" value="<?php echo $result['title']?>" required>
			</div>

			<div class="form-group">
				<label for="" class="form-label">Slide Title 1</label>
				<input  class="form-control" type="text" name="title1" value="<?php echo $result['title1']?>" required>
			</div>
			<div class="form-group">
				<label for="" class="form-label">Slide Title 2</label>
				<input  class="form-control" type="text" name="title2" value="<?php echo $result['title2']?>" required>
			</div>
			<div class="form-group">
				<label for="" class="form-label">Slide_Sub Title</label>
				<input  class="form-control" type="text" name="sub_title" value="<?php echo $result['sub_title']?>" required>
			</div>

			

			<!-- <div class="form-group">
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
			</div> -->
			
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