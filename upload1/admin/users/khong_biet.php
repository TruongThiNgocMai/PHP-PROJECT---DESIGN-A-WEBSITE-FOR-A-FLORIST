<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="./css/style.css" />
</head>
<body>
<?php
require('db.php');
   // If form submitted, insert values into the database.
   if (isset($_REQUEST['username'])){
$username = stripslashes($_REQUEST['username']); // removes backslashes
$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($con,$email);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$trn_date = date("Y-m-d H:i:s");

// Kiểm tra username hoặc email có bị trùng hay không
   $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
     
   // Thực thi câu truy vấn
    $result = mysqli_query($con,$query);
     
   // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
   if (mysqli_num_rows($result) > 0)
   {
       // Sử dụng javascript để thông báo
       echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="register.php";</script>';
         
       // Dừng chương trình
       die ();
   }
   else {
       // Ngược lại thì thêm bình thường
       $query = "INSERT into `user` (username, email, password, trn_date) VALUES ('$username', '$email', '".md5($password)."', '$trn_date')";
         
       if (mysqli_query($con, $query)){
           echo '<script language="javascript">alert("Đăng ký thành công"); window.location="index.php";</script>';
       }
   }
   }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="text" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Registration" />

</form>
<br /><br />

</div>
<?php } ?>

</body>
</html>

