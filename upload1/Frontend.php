 

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
            <li><a href="#myPage">TRANG CHỦ</a></li>
            <li><a href="#cheapflower">HOA GIÁ RẺ</a></li>
            <li><a href="#interestflower">HOA ĐƯỢC ƯA CHUỘNG</a></li>
            <li><a href="#commonflower">HOA PHỔ BIẾN</a></li>
            <li><a href="#contact">LIÊN HỆ</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">THÔNG TIN THÊM
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin/users/login.php">Đăng nhập</a></li>
                <li><a href="../upload1/simple/gio_hang.php">Giỏ hàng</a></li>
                <!-- <li><a href="../select.php">Danh sách sản phẩm</a></li> -->
              </ul>
            </li>
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
          <button class="btn btn-default glyphicon glyphicon-shopping-cart" data-toggle="modal" href='#modal-id' style="font-size: 20px;"></button>
        </div>
      </div>
    </div>


   <div id="cheapflower" class="container text-center">
        <div class="row">

          <h4 style="background:  #330000;"><p>HOA ĐÀO</p></h4>

          <?php 
            $connect = mysqli_connect('localhost', 'root', '', 'flowers');
            mysqli_set_charset($connect,"utf8");
            $sql = "SELECT * FROM products WHERE category_id = 1 LIMIT 3";
            $query = mysqli_query($connect,$sql);
            while ( $data = mysqli_fetch_array($query) ) {
          ?>

          <div class="col-sm-4 container2">

              <img src="<?php echo "./Flowers/".$data['image'] ?>" class="img-rounded person" alt="Random Name" width="255" height="255" class="image" >

              <p><strong><?php echo $data['product_name'] ?></strong></p>

              <p style="color: blue;"><?php echo $data['price'] ?><u></u></p>

              <div class="overlay">
                <button id="<?php echo $data['id'] ?>" data-name="<?php echo $data['product_name'] ?>" data-price="<?php echo $data['price'] ?>" class="add-to-cart btn btn-success glyphicon glyphicon-shopping-cart btnAddAction" style="margin-top: -10px; margin-left: 10px;"><a href="try/index.php">    Mua</a></button>

                <button class="add-to-cart btn btn-success glyphicon glyphicon-eye-open" style="margin-top: -10px; margin-left: 10px;" data-toggle="modal" href='#modal-id1'  data-toggle="modal1" href='#modal-id1'>View </button>
              </div>
          </div>     
        <?php }?>  

      </div>
    </div>

    <!-- Hoa được nhiều ưa chuộng id = 2 -->

    <div id="interestflower" class="container text-center">
        <div class="row">

          <h4 style="background:  #330000;"><p>HOA MAI</p></h4>

          <?php 
            $connect = mysqli_connect('localhost', 'root', '', 'flowers');
            mysqli_set_charset($connect,"utf8");
            $sql = "SELECT * FROM products WHERE category_id = 2 LIMIT 3";
            $query = mysqli_query($connect,$sql);
            while ( $data = mysqli_fetch_array($query) ) {
          ?>

          <div class="col-sm-4 container2">

            <img src="<?php echo "./Flowers/".$data['image'] ?>" class="img-rounded person" alt="Random Name" width="255" height="255" class="image" >

            <p><strong><?php echo $data['product_name'] ?></strong></p>

            <p style="color: blue;"><?php echo $data['price'] ?><u></u></p>
            
            <div class="overlay">

             <button id="<?php echo $data['id'] ?>" data-name="<?php echo $data['product_name'] ?>" data-price="<?php echo $data['price'] ?>" class="add-to-cart btn btn-success glyphicon glyphicon-shopping-cart" style="margin-top: -10px; margin-left: 10px;">    Mua</button>

              <button class="add-to-cart btn btn-success glyphicon glyphicon-eye-open" style="margin-top: -10px; margin-left: 10px;" >    View</button>
            </div>
          </div>
        <?php }?>  

      </div>
    </div>

    <!-- Hoa được phổ biến id = 3 -->

    <div id="commonflower" class="container text-center">
        <div class="row">

          <h4 style="background:  #330000;"><p>Các loại hoa khác</p></h4>

          <?php 
            $connect = mysqli_connect('localhost', 'root', '', 'flowers');
            mysqli_set_charset($connect,"utf8");
            $sql = "SELECT * FROM products WHERE category_id = 3 LIMIT 3";
            $query = mysqli_query($connect,$sql);
            while ( $data = mysqli_fetch_array($query) ) {
          ?>

          <div class="col-sm-4 container2">

            <img src="<?php echo "./Flowers/".$data['image'] ?>" class="img-rounded person" alt="Random Name" width="255" height="255" class="image" >

            <p><strong><?php echo $data['product_name'] ?></strong></p>

            <p style="color: blue;"><?php echo $data['price'] ?><u></u></p>

            <div class="overlay">

              <button id="<?php echo $data['id'] ?>" data-name="<?php echo $data['product_name'] ?>" data-price="<?php echo $data['price'] ?>" class="add-to-cart btn btn-success glyphicon glyphicon-shopping-cart" style="margin-top: -10px; margin-left: 10px;">    Mua</button>

              <button class="add-to-cart btn btn-success glyphicon glyphicon-eye-open" style="margin-top: -10px; margin-left: 10px;" >    View</button>
            </div>
          </div>
        <?php }?>  

      </div>
    </div>


    <!-- Container (Contact Section) -->

    <div class="container">

      <div class="row">
        <div class="col-md-12 text-right">
          <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <?php require('mau.php'); ?>
                  <div class="wrapper">
                    <h1 style="text-align: center;">Sản phẩm</h1>

                    <div id="shopping-cart">
                      <div class="txt-heading" style="background-color: #330000;;">Giỏ hàng <a id="btnEmpty" href="index.php?action=empty">Xóa giỏ hàng</a></div>
                      <?php
                      if(isset($_SESSION["cart_item"])){
                          $item_total = 0;
                      ?>  

                      <table cellpadding="10" cellspacing="1">
                        <tbody>
                          <tr>
                            <th style="text-align:left;"><strong>Tên sản phẩm</strong></th>
                            <th style="text-align:left;"><strong>Mã sản phẩm</strong></th>
                            <th style="text-align:right;"><strong>Số lượng</strong></th>
                            <th style="text-align:right;"><strong>Giá</strong></th>
                            <th style="text-align:center;"><strong>Hành động</strong></th>
                          </tr> 
                          <?php   
                              foreach ($_SESSION["cart_item"] as $item){
                              ?>
                                <tr>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["product_name"]; ?></strong></td>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
                                <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
                                <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["price"]."đ"; ?></td>
                                <td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Xóa sản phẩm</a></td>
                                </tr>
                                <?php
                                  $item_total += ($item["price"]*$item["quantity"]);
                            }
                          ?>

                          <tr>
                            <td colspan="5" align=right><strong>Tổng:</strong> <?php echo $item_total."đ"; ?></td>
                          </tr>

                        </tbody>

                      </table>  

                      <?php
                      }
                      ?>
                      </div>
                      
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <button type="button" class="btn btn-info" style="margin-left: 450px;">ĐẶT HÀNG</button>
                        </div>
                      </div>
                      <br>
                      <div id="product-grid">
                        <div class="txt-heading" style="background-color: #330000;">Sản phẩm</div>
                        <?php
                        $product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY id ASC");
                        if (!empty($product_array)) { 
                          foreach($product_array as $key=>$value){
                        ?>
                          <div class="product-item">
                            <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                            <div class="product-image"><img style="height: 100px;" src="<?php echo '../admin/products/img/'.$product_array[$key]["image"]; ?>"></div>
                            <div><strong><?php echo $product_array[$key]["product_name"]; ?></strong></div>
                            <div class="product-price"><?php echo $product_array[$key]["price"]."đ"; ?></div>
                            <div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
                            </form>
                          </div>
                        <?php
                            }
                        }
                        ?>
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
