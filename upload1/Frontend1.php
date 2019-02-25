<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FLOWER STORE</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./photo/icon/logoMain.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top" style="background: #330000;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
          <a class="navbar-brand" href="#myPage"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <div class="search-box" style="margin-top: 10px;">
                <input type="text" autocomplete="off" placeholder="Search flowers..." />
                <div class="result"></div>  
              </div>
            </li>
            <li><a href="#myPage">TRANG CHỦ</a></li>
            <li><a href="#cheapflower">HOA ĐÀO</a></li>
            <li><a href="#interestflower">HOA MAI</a></li>
            <li><a href="#commonflower">CÁC LOẠI HOA KHÁC</a></li>
            <li><a href="#contact">LIÊN HỆ</a></li>
            <li><a href="admin/users/login.php">ĐĂNG NHẬP</a></li>  
            <li><a href="../upload1/simple/index.php">GIỎ HÀNG</a></li>

            <!-- <li class="dropdown">
              <span class="caret"></span></a>
            
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">THÔNG TIN THÊM
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin/users/login.php"></a></li>
                <li><a href="../upload1/simple/index.php"></a></li>
                <li><a href="../select.php">Danh sách sản phẩm</a></li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="poster1.jpg" alt="Chuc mung nam moi" width="1200" height="700">
        </div>
        <div class="item ">
          <img src="poster2.jpg" alt="Nam 2019 Ky Hoi" width="1200" height="700">       
        </div>
        <div class="item ">
          <img src="poster3.png" alt="Chuc mung nam moi" width="1200" height="700">
        </div>
        <div class="item">
          <img src="poster4.png" alt="Hoi cho" width="1200" height="700">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    <!-- 

        <!- Container (The Band Section) -->



    <div class="container">
      <div class="row">
        <div class="col-md-12" style="text-align: right; margin-right: -15px;">
          <button class="glyphicon glyphicon-shopping-cart"><a href="../upload1/shop/view_cart.php">GIỎ</a></button>
        </div>
      </div>
    </div>

      <!-- Hoa Đào id = 1 -->
    <div id="cheapflower" class="container text-center">
        <div class="row">

          <h4 style="background:  #330000;"><p>HOA ĐÀO</p></h4>

          <?php
              error_reporting(1);
                //info message
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-6">
                            <div class="alert alert-info text-center" style="background-color: #ff9999;color: #660000;">
                                <?php echo $_SESSION['message']; ?>
                            </div>
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
                $sql = "SELECT * FROM products WHERE category_id = 1 LIMIT 4";
                $query = $conn->query($sql);
             
                $inc = 4;
                while($row = $query->fetch_assoc()){
                    $inc = ($inc == 4) ? 1 : $inc + 1; 
                    if($inc == 1) echo "<div class='row text-center'>";  
                    ?>

              <div class="col-sm-4 container2">

                  <img src="<?php echo "./Flowers/".$row['image'] ?>" class="img-rounded person" alt="Random Name" width="200" height="200" class="image" >

                  <p><strong><?php echo $row['product_name'] ?></strong></p>

                  <p style="color: blue;"><?php echo $row['price'] ?><u></u></p>

                  <div class="overlay" style="width: 67%;margin-left: 35px;">
                    
                    <span class="pull-right" style="margin-top: -5px; margin-right: 25px;"><a href="../upload1/shop/add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart" style=" width: 19.5px; height: 19.5px;"></span> </a></span>
                    <a href="model.php?id=<?php echo $row['id']; ?>"><button class="add-to-cart btn btn-success glyphicon glyphicon-eye-open" style="margin-top: -10px; margin-left: 5px;" data-toggle="modal" data-target="#myModal"></button></a>
                  </div>
              </div>  

            <?php }
              if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
              if($inc == 2) echo "<div></div><div></div></div>"; 
              if($inc == 3) echo "<div></div></div>";
              //end product row 
          ?>
         
      </div>
    </div>

   

    <!-- Hoa Mai id = 2 -->

     <div id="interestflower" class="container text-center">
        <div class="row">

          <h4 style="background:  #330000;"><p>HOA MAI</p></h4>

          <?php
              error_reporting(1);
                //info message
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-6">
                            <div class="alert alert-info text-center" style="background-color: #ff9999;color: #660000;">
                                <?php echo $_SESSION['message']; ?>
                            </div>
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
                $sql = "SELECT * FROM products WHERE category_id = 2 LIMIT 4";
                $query = $conn->query($sql);
             
                $inc = 4;
                while($row = $query->fetch_assoc()){
                    $inc = ($inc == 4) ? 1 : $inc + 1; 
                    if($inc == 1) echo "<div class='row text-center'>";  
                    ?>

              <div class="col-sm-4 container2">

                  <img src="<?php echo "./Flowers/".$row['image'] ?>" class="img-rounded person" alt="Random Name" width="200" height="200" class="image" >

                  <p><strong><?php echo $row['product_name'] ?></strong></p>

                  <p style="color: blue;"><?php echo $row['price'] ?><u></u></p>

                  <div class="overlay" style="width: 67%;margin-left: 35px;">
                    
                    <span class="pull-right" style="margin-top: -5px; margin-right: 25px;"><a href="../upload1/shop/add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart" style=" width: 19.5px; height: 19.5px;"></span></a></span>
                    
                    <a href="model.php?id=<?php echo $row['id']; ?>"><button class="add-to-cart btn btn-success glyphicon glyphicon-eye-open" style="margin-top: -10px; margin-left: 5px;" data-toggle="modal" data-target="#myModal"></button></a> 
                  </div>
              </div>  

            <?php }
              if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
              if($inc == 2) echo "<div></div><div></div></div>"; 
              if($inc == 3) echo "<div></div></div>";
              //end product row 
          ?>
          
      </div>
    </div>

    <!-- Hoa khác id = 3 -->

    <div id="commonflower" class="container text-center">
        <div class="row">

          <h4 style="background:  #330000;"><p>CÁC LOẠI HOA KHÁC</p></h4>

          <?php
              error_reporting(1);
                //info message
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-6">
                            <div class="alert alert-info text-center" style="background-color: #ff9999;color: #660000;">
                                <?php echo $_SESSION['message']; ?>
                            </div>
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
                $sql = "SELECT * FROM products WHERE category_id = 3 LIMIT 4";
                $query = $conn->query($sql);
             
                $inc = 4;
                while($row = $query->fetch_assoc()){
                    $inc = ($inc == 4) ? 1 : $inc + 1; 
                    if($inc == 1) echo "<div class='row text-center'>";  
                    ?>

              <div class="col-sm-4 container2">

                  <img src="<?php echo "./Flowers/khác/".$row['image'] ?>" class="img-rounded person" alt="Random Name" width="200" height="200" class="image" >

                  <p><strong><?php echo $row['product_name'] ?></strong></p>

                  <p style="color: blue;"><?php echo $row['price'] ?><u></u></p>

                  <div class="overlay" style="width: 67%;margin-left: 35px;">
                    
                    <span class="pull-right" style="margin-top: -5px; margin-right: 25px;"><a href="../upload1/shop/add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart" style=" width: 19.5px; height: 19.5px;"></span></a></span>
                    
                    <a href="model.php?id=<?php echo $row['id']; ?>"><button class="add-to-cart btn btn-success glyphicon glyphicon-eye-open" style="margin-top: -10px; margin-left: 5px;" data-toggle="modal" data-target="#myModal"></button></a> 
                  </div>
              </div>  
            <?php }
              if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
              if($inc == 2) echo "<div></div><div></div></div>"; 
              if($inc == 3) echo "<div></div></div>";
              //end product row 
        ?>  
      </div>
    </div>

    <!-- Container (Contact Section) -->

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-right">
          <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Giỏ hàng</h4>
                </div>
                <div class="modal-body">
                  <div class="wrapper">
                    <h1 style="text-align: center;">Sản phẩm</h1>
                    <div class="row">
                      <table class="table table-bordered" id="table-products" › <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                        </thead>
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                    </div>
                    <div>
                      <button class="btn btn-lg btn-success" id="button-clear">Clear</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   <!-- Footer -->
    <footer style="background-color: #330000;color: white;" >
      <div id="contact" class="container">
        <h3 class="text-center">Liên hệ</h3>
        <p class="text-center"><em>**************</em></p>

        <div class="row">
          <div class="col-md-4">
            <p><span class="glyphicon glyphicon-map-marker"></span> Địa chỉ: 101B Lê Hữu Trác, Quận Sơn Trà, TP.Đà Nẵng, Việt Nam</p>
            <p><span class="glyphicon glyphicon-phone"></span> Phone: 0342713011 (Kiệt)</p>
            <p><span class="glyphicon glyphicon-phone"></span> Email: kiet.alang@student.passerellesnumeriques.org</p>
          </div>
          <div class="col-md-8">
            <form action="contact.php" method="POST">
              <div class="row">
                <div class="col-sm-4 form-group">
                  <input class="form-control" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-4 form-group">
                  <input class="form-control" name="email" placeholder="Email" type="email" required>
                </div>
                <div class="col-sm-4 form-group">
                  <input class="form-control" name="phone" placeholder="Phone" type="phone" required>
                </div>
                <textarea class="form-control" name="comments" placeholder="Comment" rows="5"></textarea>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <button class="btn pull-right" name="contact" type="submit">Send</button>
                </div>
              </div>
            </form>
            <br>
          </div>
        </div>
      </div>
      <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
    </footer>


    <!-- SEARCH -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>


<!DOCTYPE html>
<html>
<head>
  <title>TRANG CHI TIẾT</title>
  <link rel="icon" type="image/png" href="./photo/icon/logoMain.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>    
    <?php
      $connect = mysqli_connect('localhost', 'root', '', 'flowers');
      mysqli_set_charset($connect,"utf8");
      
     if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){      
            $myid = $_GET["id"]; 

        ?>

         <?php 
            // Prepare a select statement

            $sql = "SELECT * FROM products WHERE id = ?";
            $linkImage = 'Flowers/';
            if($stmt = mysqli_prepare($connect, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                $param_id = trim($_GET["id"]);

                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
            
                    if(mysqli_num_rows($result) == 1){
                        /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        
                        // Retrieve individual field value
                        $product_name = $row["product_name"];
                        $price = $row["price"];
                        $description = $row["description"];                           
                        $image = $row["image"];
                    } else{
                      echo "Oops! Something went wrong. Please try again later.";
                }
            }
        }
    }
            ?>

</body>
</html>
  </body>

</html>
