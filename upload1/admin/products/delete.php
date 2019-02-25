<?php
	$connect = mysqli_connect('localhost', 'root', '', 'flowers');

	if($connect === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	mysqli_set_charset($connect,"utf8");
	if(isset($_POST["id"])){

	    // Prepare a delete statement
	    $id = $_POST['id'];

	    $sql = "DELETE FROM products WHERE id = '$id'";
	   	if(mysqli_query($connect,$sql)){
           // Records deleted successfully. Redirect to landing page
           header("location: select.php");
           exit();
       } else{
           echo "Oops! Something went wrong. Please try again later.";
       }

	    //Close connection
	    mysqli_close($connect);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DELETE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
	       <div class="alert alert-danger fade in" style="width: 300px;">
	           <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
	           <p>Bạn có chắc muốn xóa dòng này không?</p><br>
	           <p> <input type="submit" value="Yes" class="btn btn-danger">
	           <button type="button" class="btn btn-default"><a href="select.php">Cancel</a></button></p>
	       </div>
	    </form> 
	</center>
</body>
</html>