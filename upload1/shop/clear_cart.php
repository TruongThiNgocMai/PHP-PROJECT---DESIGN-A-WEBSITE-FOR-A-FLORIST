<?php
	error_reporting(1);
	session_start();
	unset($_SESSION['cart']);
	$_SESSION['message'] = 'Giỏ hàng đã được xóa thành công';
	header('location: index.php');
?>