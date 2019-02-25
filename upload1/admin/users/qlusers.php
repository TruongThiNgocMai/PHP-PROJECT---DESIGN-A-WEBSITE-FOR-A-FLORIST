<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
</body>
</html>
<?php 
	require("db.php");
?>
<div>
	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		<a href="../../Frontend1.php" style="margin-left: 170px;"><button type="button" class="btn btn-success">Về trang chủ</button></a>
	</div>
	
	<h3>DANH SÁCH NGƯỜI DÙNG</h3>
	

</div>
<table border="1px;" align="center" style="width: 1000px;">
			<thead style="text-align: center;">
	<tr>
		<th>STT</th>
		<th>UserName</th>
		<th>Email</th>
		<th>User_type</th>
		<th>Password</th>
		<th>Action</th>

	</tr>
	<?php 
		$query = mysqli_query($con,"select * from users") ;
		$i = 1;
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row["username"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["user_type"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "<td><a href='add_users.php'><span class='glyphicon glyphicon-plus'></span></a> | 
				<a href='update_users.php?id=".$row['id']."'><span class='glyphicon glyphicon-pencil'></span></a> | 
				<a href='delete_users.php?id=".$row['id']."'><span class='glyphicon glyphicon-trash'></span></a> </td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>
	

