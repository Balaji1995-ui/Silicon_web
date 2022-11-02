<?php

	if (isset($_POST['submit'])) {

		require 'conn.php';
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];

		$q = "INSERT INTO `contact` (`name`, `phone`, `email`, `message`) VALUES ('$name', '$phone', '$email', '$msg')";

		$res = mysqli_query($conn,$q);


		if (!$res) {
			header("location:fail.php");
		}else{
			header("location:/success.php");
		}
	}else{
		echo 'Access denied';
	}
?>