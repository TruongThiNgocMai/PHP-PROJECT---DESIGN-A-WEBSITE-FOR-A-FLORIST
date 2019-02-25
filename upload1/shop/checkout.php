<?php
	error_reporting(1);
	session_start();
	//user needs to login to checkout
	$_SESSION['message'] = 'Bạn cần phải đăng nhập để kiểm tra';
	header('location: /upload1/upload1/admin/users/login.php');

?>