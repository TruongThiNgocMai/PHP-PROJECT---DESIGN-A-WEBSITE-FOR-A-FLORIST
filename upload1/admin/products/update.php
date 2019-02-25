<?php
// Kết nối database
 $connect = new mysqli('localhost', 'root', '', 'flowers');

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $connect->connect_error);
    exit();
}
mysqli_set_charset($connect,"utf8");

//Lấy dữ liệu từ view.php bằng phương thức GET.
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql     = "SELECT * FROM products WHERE id='$id'";
    $ket_qua = $connect->query($sql);

    while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
        $product_name       = $row['product_name'];
        $code       = $row['code'];
        $price        = $row['price'];
        $description = $row['description'];
        $category_id     = $row['category_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Truyền dữ liệu vào form. -->
        <center>
            <form action="process.php" method="post" enctype="multipart/form-data" style="border: 1px solid red; width: 350px;">
                <legend>UPDATE SẢN PHẨM</legend>
            
                <div class="form-group" style="width: 300px;">
                    <label for="">Bạn đang chỉnh sửa dòng có ID = </label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>"><?php echo $id; ?>
                    <br>
                    <img class=" img-thumbnail float" src="<?php echo './img/'.$row['image'] ?>" alt="" height="100px" width="100px">
                    <br>
                    <label for="">TÊN SẢN PHẨM</label>
                    <input type="text" name="product_name" class="form-control" value="<?php echo $product_name; ?>">
                    <br>
                    <label for="">CODE</label>
                    <input type="text" name="code" class="form-control" value="<?php echo $code; ?>">
                    <br>
                    <label for="">GIÁ</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $price; ?>">
                    <br>
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                    <br>
                    <label for="">LOẠI</label> 
                    <input type="number" name="category_id" class="form-control" value="<?php echo $category_id; ?>">
                </div>
                <div style="padding-bottom: 10px;">
                    <button type="submit" class="btn btn-danger">Gửi</button>
                    <button type="button" class="btn btn-danger"><a href="/upload/select.php">Thoát</a></button>
                    <button type="button" class="btn btn-danger"><a href="./home/Frontend1.php">Về trang chủ</a></button>
                </div>

            </form>
        </center>
    </body>
</html>

<?php 
        } //Đóng vòng lặp while.
    } //Đóng câu lệnh if.

    //Đóng kết nối database tintuc
    $connect->close();
?>