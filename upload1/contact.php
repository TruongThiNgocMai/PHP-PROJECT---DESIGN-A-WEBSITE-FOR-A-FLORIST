<?php

$con = mysqli_connect("localhost","root","","flowers");
$con->query("SET NAMES 'utf8'");
// Check connection
if (mysqli_connect_error())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if((isset($_POST['name'])) && (isset($_POST['email']))){
 		// require_once("contact_mail.php<strong>");
		$yourName = $_POST['name'];
		$yourEmail = $_POST['email'];
		$yourPhone = $_POST['phone'];
		$comments = $_POST['comments'];
 
		$sql="INSERT INTO contact_form_info(name, email, phone, comments) VALUES ('$yourName', '$yourEmail', '$yourPhone', '$comments')";
		if (mysqli_query($con,$sql)) {
			echo "Thank You For Contacting Us ";
    		
		}else
			die("Couldn't enter data: ".$mysqli->error);
		mysqli_close($con);
	}
}
?>