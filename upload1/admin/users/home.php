<?php 
	include('functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<!-- <a href="index.php?logout='1'" style="color: red;">logout</a> -->

						<a href="../../Frontend1.php"><button href="../Frontend1.php" type="button" class="btn btn-success">LOG OUT</button></a>
						&nbsp; 
						<a href="qlusers.php"><button type="button" class="btn btn-success">MANAGE USERS</button></a>
						<a href="../products/select.php"><button type="button" class="btn btn-success">MANAGE PRODUCTS</button></a>
						
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>