<?php
error_reporting(1);
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('product_name'=>$productByCode[0]["product_name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Shopping cart</TITLE>
<link href="stylecart.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<button type="button" ><a href="/upload1/upload1/Frontend1.php">Quay lại trang chủ</a></button>
<div id="shopping-cart">
<div class="txt-heading" style="background-color: #330000;">Giỏ hàng <a id="btnEmpty" href="index.php?action=empty">Xóa giỏ hàng</a></div>
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
</BODY>
</HTML>