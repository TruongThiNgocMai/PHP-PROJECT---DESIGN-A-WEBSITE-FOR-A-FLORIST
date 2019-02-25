<!DOCTYPE html>
<html>
<head>
	<title>VIEW</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		session_start(); 
	 ?>
		<?php
		 	$connect = mysqli_connect('localhost', 'root', '', 'flowers');
		 	mysqli_set_charset($connect,"utf8");
			$sql = "SELECT * FROM products";
			$query = mysqli_query($connect,$sql);
		?>
		
		<table border="1px;" align="center" style="width: 1000px;">
			<thead style="text-align: center;">
				<tr>
					<td bgcolor="pink">ID</td>
					<td bgcolor="pink">Hình ảnh</td>
					<td bgcolor="pink">Tên sản phẩm</td>
					<td bgcolor="pink">Code</td>
					<td bgcolor="pink">Giá</td>
					<td bgcolor="pink">Mô tả</td>
					<td bgcolor="pink">Loại sản phẩm</td>
					<td bgcolor="pink">Nút khác</td>
				<tr>
			</thead>
			<tbody>
			<?php 
				while ( $data = mysqli_fetch_array($query) ) {
					$i = 1;
					$id = $data['id'];
			?>
				<tr>
					<td style="text-align: center;width: 30px;"><?php echo $id; ?></td>
					<td style="padding-left: 10px;"><img class=" img-thumbnail float" src="<?php echo './img/'.$data['image'] ?>" alt="" height="100px" width="100px"></td>
					<td style="padding-left: 10px;"><?php echo $data['product_name']; ?></td>
					<td style="padding-left: 10px;"><?php echo $data['code']; ?></td>
					<td style="padding-left: 10px;"> <?php echo $data['price']; ?> vnđ</td>
					<td style="padding-left: 10px;"><?php echo ($data['description']);?></td>
					<td style="text-align: center;"><?php echo ($data['category_id']); ?></td>
					<td style="text-align: center;width: 100px;">
						<a href="update.php?id=<?php echo $id;?>" title = "chỉnh sửa sản phẩm"> <span class='glyphicon glyphicon-pencil'></span></a>&emsp; &emsp;
						<a href="delete.php?id=<?php echo $id;?>" title = "xóa sản phẩm"> <span class='glyphicon glyphicon-trash'></span></a>

					</td>
				</tr>
			<?php 
					$i++;
				}
			?>
			</tbody>
	</table>
	<br><br>
	<p style="padding-left: 550px;">
		<span class='glyphicon glyphicon-pencil'><u>Ghi chú:</u> <br>ID = 1 -> Hoa Đào <br> ID = 2 -> Hoa Mai <br> ID = 3 -> Các loại hoa khác</span>
	</p>
	<br>
	<button style="margin-left: 550px;"><a href="add.php">Thêm sản phẩm</a></button>
	<button type="button"><a href="../../Frontend1.php">Về trang chủ</a></button>
	

</body>
</html>


