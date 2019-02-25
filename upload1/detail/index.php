<!DOCTYPE html>
<html>
    <head><title>Detail Products</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
   <!--  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/> -->
</head>
<body>

<main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">    
        <img data-image="red" class="active" src="images/dao.jpg" class="rounded" width="255" height="500">
        <img data-image="blue" src="images/hoadao1.jpg" class="rounded" width="255" height="500">
         <img data-image="black" src="images/hoadao2.jpg" class="rounded" width="255" height="500"> 
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <h1>Các Loại Hoa Đào</h1>
          <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
              <img data-image="red" src="images/dao.jpg" class="rounded-circle" width="50" height="50">
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <img data-image="blue" src="images/hoadao1.jpg" class="rounded-circle" width="50" height="50">    
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
               <img data-image="black" src="images/hoadao2.jpg" class="rounded-circle" width="50" height="50">
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div>

          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>Other choose</span>

            <div class="cable-choose">
              <a href="../upload/Frontend1.php""><button>Về trang chủ</button></a>
            </div>

            <!-- <a href="#">How to configurate your headphones</a> -->
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>148$</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>
      </div>
</main>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    
<script type="text/javascript">
   $(document).ready(function() {

  $('.color-choose input').on('click', function() {
      var detailProd = $(this).attr('data-image');

      $('.active').removeClass('active');
      $('.left-column img[data-image = ' + detailProd + ']').addClass('active');
      $(this).addClass('active');
  });

});
</script>   

</body>
</html>
