<?php 
	$id = $_GET['id'];
	$con = mysqli_connect("localhost","root","","flowers");
	$query = mysqli_query($con,"select * from users where id = '$id'") or die("Loi truy van");
	$rows = mysqli_fetch_array($query);
	print_r($rows);
?>
<head>
	<title>Registration system PHP and MySQL - Update user</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - update user</h2>
	</div>
<form action="xl_update_users.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $rows['username'];?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $rows['email'];?>">
		</div>
 		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="<?php echo $rows['password'];?>">
		</div>
	<input type="submit" value="Update Users">
</form>
</body>