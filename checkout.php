<?php
if(isset($_POST['check']))
{

include("cart/db.php"); 

$s="select * from  `shop_products`  where product_name='".$_POST['pn']."'";
$result=mysqli_query($db,$s);

while( $row = mysqli_fetch_assoc($result) ) {
//echo $row['qty'];}
$qq=$row['qty']-$_POST['pq'];
$q= mysqli_query($db,"UPDATE  `shopping_cart`.`shop_products` SET  `qty` =  '$qq' WHERE   product_name='".$_POST['pn']."'");
			$query = mysqli_query($db, "INSERT INTO cart values('null','".$_POST['pn']."','".$_POST['pp']."','".$_POST['pq']."','".$_POST['pt']."')");
			if($query)
			{
				echo "Thank You! you.";
			}
		session_start();
		?><br /><br><?php
	$pn=$_SESSION['pn'];
	$pq=$_SESSION['pq'];$pp=$_SESSION['pp'];
	$pt=$_SESSION['pt'];
	echo $pn;?><br /><br /><?php
	echo $pq;?><br /><br /><?php
	echo $pp;?><br /><br /><?php
	echo $pt;?><br /><br /><?php ?><br /><br /><?php
	include('oldcart/cart/process-checkout.php');

}}
?>
				
