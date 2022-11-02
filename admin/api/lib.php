<?php 
	function getBlogCategory()
	{
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `blogcategory`");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}

	function showBlogs()
	{
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `blog_post` ORDER BY `id` DESC");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}

	function fetchBlog(){
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `blog_post` ORDER BY `id` DESC LIMIT 10");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}
	
	function fetchBlog1(){
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `dashboard` ORDER BY `id` DESC LIMIT 10");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}
	

	function fetchSingleBlog($id){
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `blog_post` WHERE `id` = '$id'");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}
	function updateBlog($id,$title,$sub_title,$author,$category,$text)
	{
		require 'conn.php';
		$qry = "UPDATE `blog_post` SET `title`='$title', `sub_title`='$sub_title', `author`='$author', `category`='$category',`blog_text`='$text' WHERE `id`='$id'";
		if(mysqli_query($conn,$qry)){
			return true;
		}else{
			return false;
		}
		mysqli_close($conn);
	}




//////////////////////////

	function addService($value='')
	{
		require 'conn.php';
		
		mysqli_close($conn);
	}

	function fetchSingleService($id){
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `services` WHERE `id` = '$id'");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}
	function showSlide()
	{
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `Dashboard` ORDER BY `id` DESC");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}
	function fetchSingleSlide($id){
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `Dashboard` WHERE `id` = '$id'");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}

	function updateSlide($id,$title,$sub_title,$title1,$title2)
	{
		require 'conn.php';
		$qry = "UPDATE `dashboard` SET `title`='$title', `sub_title`='$sub_title', `title1`='$title1', `title2`='$title2' WHERE `id`='$id'";
		if(mysqli_query($conn,$qry)){
			return true;
		}else{
			return false;
		}
		mysqli_close($conn);
	}


 ?>