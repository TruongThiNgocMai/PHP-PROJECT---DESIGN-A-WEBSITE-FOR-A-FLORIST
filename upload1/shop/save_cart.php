<?php
	error_reporting(1);
	session_start();
	if(isset($_POST['save'])){
		foreach($_POST['indexes'] as $key){
			$_SESSION['qty_array'][$key] = $_POST['qty_'.$key];
		}
 
		$_SESSION['message'] = 'Giỏ hàng được cập nhật thành công';
		header('location: view_cart.php');
	}
?>