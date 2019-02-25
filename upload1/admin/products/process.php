<?php
// Kết nối database tintuc
 $connect = new mysqli('localhost', 'root', '', 'flowers');

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $connect->connect_error);
    exit();
}
mysqli_set_charset($connect,"utf8");

$id          = $_POST['id'];
$product_name       = $_POST['product_name'];
$code       = $_POST['code'];
$price = $_POST['price'];
$description     = $_POST['description'];
$category_id     = $_POST['category_id'];

//Code xử lý, update dữ liệu vào table dựa theo điều kiện WHERE tại id = 1
$sql = "UPDATE products SET product_name='$product_name', code = '$code', price='$price', description='$description', category_id = $category_id WHERE id=$id";


if ($connect->query($sql) === TRUE) {
    //Nếu kết quả kết nối thành công, trở về trang view.
    header('Location: select.php');
} else {
    //Nếu kết quả kết nối không được thì trở về update.php đồng thời gán giá trị error=1, dựa theo giá trị này trang update.php có thể thông báo lỗi cần thiết.
    header('Location: update.php?error=1');
}

//Đóng kết nối database tintuc
$connect->close();
?>