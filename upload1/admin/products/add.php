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
	<center>
	<form action="add.php" method="POST" role="form" enctype="multipart/form-data" style="border: 1px solid red; width: 350px;">
		<legend>UPLOAD SẢN PHẨM</legend>
	
		<div class="form-group" style="width: 300px;">
			<input type="file" name="upload"/>
			<br>
			<label for="">Tên sản phẩm:</label>
			<input type="text" class="form-control" name="product_name">
			<br>
			<label for="">Code:</label>
			<input type="text" class="form-control" name="code">
			<br>
			<label for="">Giá:</label>
			<input type="number" class="form-control" name="price">
			<br>
			<label for="">Mô tả sản phẩm:</label>
			<input type="text" class="form-control" name="description">
			<br>
			<label for="">Loại sản phẩm:</label>
			<input type="number" class="form-control" name="category_id">
			<br>
		</div>
	
		<button type="submit" name="submit">Upload</button>

		<?php  
			error_reporting(1);
			if (isset($_POST["submit"])){

				$file_part = $_FILES["upload"]["name"];

				move_uploaded_file($_FILES["upload"]["tmp_name"], "img/".$file_part);

				$connect = new mysqli("localhost","root","", "flowers") or die ("khong the ket not");
				mysqli_set_charset($connect,"utf8");
				$name = $_POST["product_name"];
				$code = $_POST["code"];
				$price = $_POST["price"];
				$description = $_POST["description"];
				$id = $_POST["category_id"];


				$sql = "INSERT INTO products(image, product_name, code, price, description, category_id) VALUES ('$file_part', '$name', '$code', '$price', '$description', '$id')";
				
				if ($connect->query($sql)) {
					echo "<img src = 'img/$file_part' width = '100px' height = '100px'/>".$name."&ensp;".$code."&ensp;".$price."&ensp;".$description."&ensp;".$id."<br>";
					echo "<br> Upload sản phẩm thành công";
				}else {
					echo "Upload sản phẩm không thành công";
				}

				
			}
		?>


	</form>
	<br>   

	<button type="button"><a href="select.php">Xem sản phẩm</a></button>
	<button type="button"><a href="../../Frontend1.php">Về trang chủ</a></button>

	<center>       
         

</body>
</html>
