<?php
require 'header.php';
require 'api/lib.php';
?>
<style type="text/css">
	.hov:hover{
		box-shadow:0px 1px 10px gray;
		transition:all 0.6s ;
	}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
	$result = showSlide();
	while($blog = mysqli_fetch_assoc($result)){		
?>
	<div class="alert alert-light hov">
		<div class="row">
			<?php
				$col = 10;
				if (!empty($blog['thum'])) {
					$col = 8;
			?>
			<div class="col-2">
				<img class="img-thumbnail" src="img/blog/<?php echo $blog['thum']; ?>">
			</div>
		<?php } ?>
			<p><?php  $id = $blog['id'] ?></p>
			<div class="col-<?php echo $col; ?>">
				<h5 style="color:#000000"><?php echo $blog['title']; ?></h5>
				<h6><?php echo $blog['sub_title']; ?></h6>
			</div>

			<div class="col-1 d-flex align-items-center">

				<a title="Edit" href="update_silde.php?key=22&id=<?php echo $id ?>" class="m-2 text-center">
					<i class="text-warning fa fa-edit fa-lg"></i>
				</a>
				
				<a href="api/blog_delete.php?key=22&id=<?php echo $id ?>" class="m-2 text-center">
					<i class="text-danger fa fa-trash-o fa-lg"></i>
				</a>
			</div>
		</div>

		
	</div>
	<div>
		<h2>Our Services</h2>
		</div>
<?php } ?>
<?php require 'footer.php'; ?>