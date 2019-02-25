<?php
	$con = mysqli_connect("localhost","root","","flowers");
	    if (mysqli_connect_errno()){
		echo "Kết nối database không được: " . mysqli_connect_error();
		die();
		}

?>