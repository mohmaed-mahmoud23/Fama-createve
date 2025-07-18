<?php 

define('PREPEND_PATH', '../');
$hooks_dir = dirname(__FILE__);
include('db_connect.php'); // include database connection file

$productsids2 = '';
$productsids3 = '';

$proid      = isset($_GET['Product_Name']) ? $_GET['Product_Name'] : '';
$vout1      = isset($_GET['voutcherval']) ? $_GET['voutcherval'] : '';




// $proid   = isset($_GET['Product_id']) ? $_GET['Product_id'] : '';

$qry1  = "SELECT * FROM variations WHERE product_id = '$proid' limit 1";
$query1 = mysqli_query($conn,  $qry1);

$in_re1 = mysqli_num_rows($query1);
if ($in_re1 > 0){
$row1     = mysqli_fetch_array($query1);
$proprice = $row1['default_sell_price'];
}


if(!empty($vout1)){

		$sql2 = "SELECT * FROM user_comission WHERE voucher = '{$vout1}' AND product_id = '{$proid}'";
		$query2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_array($query2);
        $num_id2   = mysqli_num_rows($query2);

if ($num_id2 > 0){

		$productsids2 = $row2['discount'];
		$productsids3 = $row2['commission'];

}
}

echo $proprice."|".$productsids2."|".$productsids3;
?>

