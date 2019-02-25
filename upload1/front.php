 

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

  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="container">
      <div class="row">
        <div class="col-md-12" style="text-align: right; margin-right: -15px;">
          <button class="btn btn-default glyphicon glyphicon-shopping-cart" data-toggle="modal" href='#modal-id' style="font-size: 20px;"></button>
        </div>
      </div>
    </div>


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
            $sql = "SELECT * FROM products";
            $query = $conn->query($sql);
         
            $inc = 4;
            while($row = $query->fetch_assoc()){
                $inc = ($inc == 4) ? 1 : $inc + 1; 
                if($inc == 1) echo "<div class='row text-center'>";  
                ?>

          <div class="col-sm-4 container2">

              <img src="<?php echo "./Flowers/".$row['image'] ?>" class="img-rounded person" alt="Random Name" width="255" height="255" class="image" >

              <p><strong><?php echo $row['product_name'] ?></strong></p>

              <p style="color: blue;"><?php echo $row['price'] ?><u></u></p>

              <div class="overlay">
                
                <span class="pull-right"><a href="../upload1/shop/add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></span>

                <button class="add-to-cart btn btn-success glyphicon glyphicon-eye-open" style="margin-top: -10px; margin-left: 10px;" data-toggle="modal" href='#modal-id1'  data-toggle="modal1" href='#modal-id1'>View </button>
              </div>
          </div>  

        <?php }
          if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
          if($inc == 2) echo "<div></div><div></div></div>"; 
          if($inc == 3) echo "<div></div></div>";
 
        //end product row 
    ?>
        ?>  

      </div>
    </div>

   

    <!-- Container (Contact Section) -->

    <!-- Footer -->
    <footer style="background-color: #330000;color: white;">
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

<!-- Giỏ hàng ở ngoài -->    
  

  </body>

</html>
