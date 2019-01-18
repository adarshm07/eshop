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

	header('oldcart/cart/process-checkout.php');
}}
?>
</form><style>
body, html, #wrapper {
    width: 100%;
}</style></body></html>
				






<HTML>
<HEAD>
<TITLE>Enriched Responsive Shopping Cart in PHP</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.txt-heading {
	margin: 20px 0px;
	text-align: left;
    background: #cccccc;
    padding: 5px 10px;
    overflow: auto;
}

#shopping-cart .txt-heading {
	border-top: #607d8b 2px solid;
    background: #e2e2e2;
    border-bottom: #607d8b 2px solid;
}

.txt-heading-label {
	display: inline-block;
}

#shopping-cart .txt-heading .txt-heading-label{
	margin-top:5px;
}

.btnAddAction {
    padding: 3px 10px;
    cursor: pointer;
    border: #CCC 1px solid;
    background: #f3f0f0;
}

.cart-item {
	border-bottom: #79b946 1px dotted;
	
}

.cart-image {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    vertical-align: middle;
}

#product-grid {
	margin-bottom: 30px;
    text-align: center;
    padding-bottom: 20px;
}

.product-item {
	display: inline-block;
	margin: 8px;
	border: #CCC 1px solid;
}

.product-title {
	position: absolute;
    bottom: 0px;
    background: rgba(0, 0, 0, 0.3);
    width: 100%;
    padding: 5px 0px;
    color: #f1f1f1;
}
.product-image {
	height: 110px;
	width:160px;
	position:relative;
}

.product-image img {
	width:100%;
    height: 110px;
}

.product-footer {
    padding: 20px 10px 10px;
    overflow: auto;
}
.float-left {
	float:left;
}
.float-right {
	float:right;
}
.align-right {
	text-align: right;
}

.input-cart-quantity {
	padding: 5px;
    margin: 0;
    vertical-align: top;
    border: #CCC 1px solid;
    border-right: 0px;
    width:35px;
}
.cart-info {
	text-align: right; 
	display:inline-block;
	width:15%;
    font-size: 0.8em;
}
.cart-info.title {
	width:50%;
	text-align: left; 
}
.cart-info.price {
	min-width:20%;
	position:relative;
}
.cart-info.action {
	width: 5%;
    float: right;
    padding: 10px 0px;
}
.cart-item-container {
	padding: 5px 10px;
    border-bottom: #e2e2e2 1px solid;
}
.cart-status {
	color: #666;
    float: right;
    font-size: 0.8em;
    padding: 0px 10px;
    line-height: 18px;
} 
#btnEmpty img{
	margin-top:6px;
	cursor:pointer;
}

.cart-item-container.header {
	background: #CCC;
    border-bottom: #b9b8b8 1px solid;    
    font-weight: bold;
}
.btn-action {
	margin: 20px 0px 20px;
    padding: 10px 30px;
    font-size: 1em;
    background: #3a9ee0;
    border: #3590cc 1px solid;
    color: #FFF;
    cursor: pointer;
}
.frm-customer-detail {
    background: #dae5ec;
   text-align: center;
}

.frm-heading {
	
	text-align: center;
    background: #c9d3da	;
    
}

.input-field {
	display:inline-block;
	margin:10px 0px;
}

.input-field input {
	margin-right:15px;
	padding:10px;
	min-width:200px;
}

.success {
	margin-top: 20px;
    background: #d6ecd6;
    padding: 15px;
    border: #c4dac4 1px solid;
}
.btn-continue {
	margin: 20px 0px 20px;
    padding: 10px 30px;
    font-size: 1em;
    background: #FFF;
    border: #3a9ee0 1px solid;
    color: #3a9ee0;
    cursor: pointer;
}</style>
</HEAD>
<BODY>

   <form name="frm_customer_detail" action="new.php" method="POST">
    <div class="frm-heading">
        <div class="txt-heading-label">Customer Details</div>
    </div>
    <div class="frm-customer-detail">
        <div class="form-row">
            <div class="input-field">
                <input type="text" name="name" id="name"
                    PlaceHolder="Customer Name" required>
            </div>

            <div class="input-field">
                <input type="text" name="address" PlaceHolder="Address" required>
            </div>
        </div>

        <div class="form-row">
            <div class="input-field">
                <input type="text" name="city" PlaceHolder="City" required>
            </div>

            <div class="input-field">
                <input type="text" name="state" PlaceHolder="State" required>
            </div>
        </div>

        <div class="form-row">
            <div class="input-field">
                <input type="text" name="zip" PlaceHolder="Zip Code" required>
            </div>

            <div class="input-field">
                <input type="text" name="country" PlaceHolder="Country" required>
            </div>
        </div>
    </div>
    <div>
<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>


 
</div>

<button onClick="printDiv('printMe')">Generate Bill</button>
        <input type="submit" class="btn-action"
                name="proceed_payment" value="Proceed to Payment">
    </div>
    </form>

</BODY>
</HTML>