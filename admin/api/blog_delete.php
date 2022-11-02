<?php
	if ($_GET['key'] == 22) {
		$id = $_GET['id'];
		require 'conn.php';
		if(mysqli_query($conn,"DELETE FROM `blog_post` WHERE `id` = '$id';")){
			echo "Deleted successfully";
		}else{
			echo "Delete fail";
		}
	}else{
		echo "<h1>"."Access denied"."</h1>";
	}
?>