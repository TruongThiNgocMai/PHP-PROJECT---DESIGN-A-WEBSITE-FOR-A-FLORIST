<?php
include 'connection.php';

//save Trasaction information form PayPal

if (isset ($_GET ['item_number']) && isset ($_GET ['Trasaction_ID']) && isset ($_GET ['AMT']) && isset ($_GET ['CURRENCY_CODE']) && isset ($_GET ['PAYMENT_STATUS'])) {
$item_number = $_POST['item_number'];   
$txn_id = $_POST['Trasaction_ID'];
$payment_gross = $_POST['AMT'];
$currency_code = $_POST['CURRENCY_CODE'];
$payment_status = $_POST['PAYMENT_STATUS'];
} else {
//Get product price
$query= "SELECT price FROM products WHERE id = ".$item_number;
$productResult = $query;
$productRow = $productResult->fetch_assoc();
$productPrice = $productRow['price'];

if(!empty($txn_id) && $payment_gross == $productPrice){
	//Check if payment data exists with the same TXN ID.
    $prevPaymentResult = $db->query("SELECT payment_id FROM payments WHERE txn_id = '".$txn_id."'");

    if($prevPaymentResult->num_rows > 0){
        $paymentRow = $prevPaymentResult->fetch_assoc();
        $last_insert_id = $paymentRow['payment_id'];
    }else{
        //Insert tansaction data into the database
        $insert = $db->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')");
        $last_insert_id = $db->insert_id;
    }
?>
	<h1>Your payment has been successful.</h1>
    <h1>Your Payment ID - <?php echo $last_insert_id; ?>.</h1>
<?php
}else{
?>
	<h1>Your payment has failed.</h1>
<?php
}}
?>