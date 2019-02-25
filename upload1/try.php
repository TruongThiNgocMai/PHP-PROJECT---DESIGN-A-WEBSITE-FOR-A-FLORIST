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
            $linkImage = '../admin/products/img/';
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

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <div class="form-group">    
                <p class="image-effect"> TÊN SẢN PHẨM:  <?php echo $row["product_name"]; ?></p>
         </div>
        </div>
        <div class="modal-body">
        	<div class="form-group" >                     
                <img src="<?php echo "./admin/products/img/".$row['image'] ?>" class="img-rounded person" alt="Random Name" width="255" height="255" class="image" >
        	</div>

			

            <div class="form-group">
                <p class="image-effect"> GIÁ CHỈ:  <?php echo $row['price']; ?>vnđ</p>
            </div>

            <div class="form-group">
                <p class="image-effect"> CHI TIẾT SẢN PHẨM:  <?php echo $row["description"]; ?>
                </p>
            </div>
                <input type="" name="id" class="hidden" value="<?php echo $_GET['id'] ?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
</div>

</body>
</html>