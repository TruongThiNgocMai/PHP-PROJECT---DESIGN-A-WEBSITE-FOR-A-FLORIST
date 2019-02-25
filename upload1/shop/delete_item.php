<?php
	error_reporting(1);
	session_start();
 
	//remove the id from our cart array
	$key = array_search($_GET['id'], $_SESSION['cart']);	
	unset($_SESSION['cart'][$key]);
 
	unset($_SESSION['qty_array'][$_GET['index']]);
	//rearrange array after unset
	$_SESSION['qty_array'] = array_values($_SESSION['qty_array']);
 
	$_SESSION['message'] = "Sản phẩm đã xóa khỏi giỏ hàng";
	header('location: view_cart.php');
?>