<?php
  error_reporting(1);
  session_start();
 
  //check if product is already in the cart
  if(!in_array($_GET['id'], $_SESSION['cart'])){
    array_push($_SESSION['cart'], $_GET['id']);
    $_SESSION['message'] = 'Sản phẩm đã được đưa vào giỏ';
  }
  else{
    $_SESSION['message'] = 'Sản phẩm đã tồn tại, xin vui lòng xem trong giỏ hàng';
  }
 
  header('location: index.php');
?>