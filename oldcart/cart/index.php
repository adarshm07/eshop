<?php
session_start();
	$logged=$_SESSION['uname'];
	$_SESSION['cname']=$logged;
require_once "ShoppingCart.php";

$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();
if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (! empty($_POST["quantity"])) {
                
                $productResult = $shoppingCart->getProductByCode($_GET["code"]);
                
                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $member_id);
                
                if (! empty($cartResult)) {
                    // Update cart item quantity in database
                    $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
                } else {
                    // Add to cart table
                    $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $member_id);
                }
            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
}
?>
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
	padding: 10px;
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
    padding: 20px;
}

.frm-heading {
	margin: 20px 0px 0px;
	text-align: left;
    background: #c9d3da	;
    padding: 10px;
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
<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
$item_quantity = 0;
$item_price = 0;
if (! empty($cartItem)) {
    if (! empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["price"] * $item["quantity"]);
        }
    }
}
?>
<div>
        <div class="txt-heading">
            <div class="txt-heading-label">Shopping Cart<br><a href="../index.php">Back To Home</a></div>

            <a id="btnEmpty" href="index.php?action=empty"><img
                src="image/empty-cart.png" alt="empty-cart"
                title="Empty Cart" class="float-right" /></a>
            <div class="cart-status">
                <div>Total Quantity: <?php echo $item_quantity; ?></div>
                <div>Total Price: $ <?php echo $item_price; ?></div>
            </div>
        </div>
        <?php
        if (! empty($cartItem)) {
            ?>
<?php
            require_once ("cart-list.php");
            ?>  
            <div class="align-right">
            <a href="process-checkout.php"><button class="btn-action" name="check_out">Go To Checkout</button></a>
            </div>
<?php
        } // End if !empty $cartItem
        ?>

</div>
<?php
require_once "product-list.php";
?>
    
</BODY>
</HTML>