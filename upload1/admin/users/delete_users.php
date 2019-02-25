<?php 
	$id = $_GET['id'];
	$con = mysqli_connect("localhost","root","","flowers");
	$query = mysqli_query($con,"delete from users where id = '$id'") or die("Loi truy van");
	if($query) {
		header("location: qlusers.php");
	}
 ?>