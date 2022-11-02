<?php 
	function showTitle()
	{
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `meta`");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}

	function fetchSingleSocial(){
		require 'conn.php';
		$result = mysqli_query($conn,"SELECT * FROM `socical_media` ");
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}else{
			return false;
		}
		mysqli_close($conn);
	}

	function updateSocial($facebook,$instagram,$Twitter,$linkedin)
	{
		require 'conn.php';
		$qry = "UPDATE `socical_media` SET `Facebook_link`='$facebook', `Instagram_Link`='$instagram', `Twitter_Link`='$Twitter', `LinkedIn_Link`='$linkedin' ";
		if(mysqli_query($conn,$qry)){
			return true;
		}else{
			return false;
		}
		mysqli_close($conn);
	}
?>