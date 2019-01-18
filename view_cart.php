 <html><body><?php 
session_start();
include("inc/config.inc.php");
include("inc/header.php"); 
?><div id='printMe'>
<link href="style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/cart.js"></script>
<?php include('inc/container.php');?>
<div class="container" id="view_cart">	
	<div class="text-left">				
		
		<div class="col-md-8">
			<h3>My Cart (<span id="cart-items-count"><?PHP if(isset($_SESSION["products"])){echo count($_SESSION["products"]); } ?></span>)</h3>			
			<?php		
			if(isset($_SESSION["products"]) && count($_SESSION["products"])>0) { 
			?><form method="post" action="">
				<table class="table" id="shopping-cart-results">
				<thead>
				<tr>
				<th>Product</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Subtotal</th>
				<th>&nbsp;</th>
				</tr>
				</thead>
				<tbody>
			<?php
				$cart_box = '<ul class="cart-products-loaded">';
				$total = 0;
				foreach($_SESSION["products"] as $product){					
					$product_name = $product["product_name"]; 
					$product_price = $product["product_price"];
					$product_code = $product["product_code"];
					$product_qty = $product["product_qty"];
									
					$subtotal = ($product_price * $product_qty);
					$total = ($total + $subtotal);
				?>
				<tr>
				<td><input type="text" name="pn" value="<?php echo $product_name; ?>" /></td>
				<td><input type="text" name="pp" value="<?php echo $product_price; ?>" /></td>
				<td><input type="text" name="pq" value="<?php echo $product_qty; ?>" /></td>
				<td><?php 
				
				$_SESSION['pn']=$product_name;
$_SESSION['pp']=$product_price;$_SESSION['pq']=$product_qty;$_SESSION['pt']=$total;
				echo $currency; ?><input type="text" name="pt" value="<?php echo sprintf("%01.2f", ($product_price * $product_qty)); ?>"/></td>
				<td>				
				<a href="#" class="btn btn-danger remove-item" data-code="<?php echo $product_code; ?>"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
				</tr>
			 <?php } ?>
			<tfoot>
			<br>
			<br>
			<tr>
			<td><a href="products.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
			<td colspan="2"></td>
			<?php 
			if(isset($total)) {
			?>	
			<td class="text-center cart-products-total"><strong>Total <?php echo $currency.sprintf("%01.2f",$total); ?></strong></td>
			<td>
			<input type="submit" name="check" class="btn btn-success btn-block" value="Checkout"/></td>
			<?php } ?>
			</tr>
			</tfoot>			
			<?php		
			} else {
				echo "Your Cart is empty";
			?>
			<tfoot>
			<br>
			<br>
			<tr>
			<td><a href="products.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
			<td colspan="2"></td>
			</tr>
			</tfoot>
			<?php } ?>				
			</tbody>
			</table>		

		
		</div>			
	</div>
</div>
<?php include('inc/footer.php');?><?php
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
				
			}

	header('location:oldcart/cart/process-checkout.php');
}}
?>
</form><style>
body, html, #wrapper {
    width: 100%;
}</style></body></html>
				





