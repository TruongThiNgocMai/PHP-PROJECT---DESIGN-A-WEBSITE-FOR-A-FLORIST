<?php
    error_reporting(1);
    session_start();
    //initialize cart if not set or is unset
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
 
    //unset quantity
    unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GIỎ HÀNG</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .product_image{
            height:200px;
        }
        .product_name{
            height:80px; 
            padding-left:20px; 
            padding-right:20px;
        }
        .product_footer{
            padding-left:20px; 
            padding-right:20px;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">THÔNG BÁO</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- left nav here -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="view_cart.php"><span class="badge"><?php echo count($_SESSION['cart']); ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <a href="../Frontend1.php" class="btn btn-info"><span class="glyphicon glyphicon-home"></span>Trang chủ</a><br>
    <?php
        //info message
        if(isset($_SESSION['message'])){
            ?>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="alert alert-info text-center" style="background-color: #ff9999;color: #660000;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <h2 style="color: blue;"><b>CÁC SẢN PHẨM KHÁC</b></h2>
                </div>
            </div>
            <?php
            unset($_SESSION['message']);
        }
        //end info message
        //fetch our products    
        //connection
        $conn = new mysqli('localhost', 'root', '', 'flowers');
          mysqli_set_charset($conn,"utf8");
        $sql = "SELECT * FROM products";
        $query = $conn->query($sql);
        $inc = 4;
        while($row = $query->fetch_assoc()){
            $inc = ($inc == 4) ? 1 : $inc + 1; 
            if($inc == 1) echo "<div class='row text-center'>";  
            ?>

            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row product_image">
                            <img src="<?php echo '../admin/products/img/'.$row['image'] ?>" width="80%" height="80%">
                        </div>
                        <div class="row product_name">
                            <h4 style="color: blue;"><?php echo $row['product_name']; ?></h4>
                        </div>
                        <div class="row product_footer">
                            <p class="pull-left" style="color: red;"><b><?php echo $row['price'].' đ'; ?></b></p>
                            <span class="pull-right"><a href="add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Cart</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
        if($inc == 2) echo "<div></div><div></div></div>"; 
        if($inc == 3) echo "<div></div></div>";
 
        //end product row 
    ?>
</div>
</body>
</html>