<?php
require_once "ShoppingCart.php";

$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();

/* Calculate Cart Total Items */
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

if(!empty($_POST["proceed_payment"])) {
    $name = $_POST ['name'];
    $address = $_POST ['address'];
    $city = $_POST ['city'];
    $zip = $_POST ['zip'];
    $country = $_POST ['country'];
}
$order = 0;
if (! empty ($name) && ! empty ($address) && ! empty ($city) && ! empty ($zip) && ! empty ($country)) {
    // able to insert into database
    
    $order = $shoppingCart->insertOrder ( $_POST, $member_id, $item_price);
    if(!empty($order)) {
        if (! empty($cartItem)) {
            if (! empty($cartItem)) {
                foreach ($cartItem as $item) {
                    $shoppingCart->insertOrderItem ( $order, $item["id"], $item["price"], $item["quantity"]);
                }
            }
        }
    }
}
?>
<HTML>
<HEAD>
<TITLE>Enriched Responsive Shopping Cart in PHP</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
        <div class="txt-heading">
            <div class="txt-heading-label">Shopping Cart</div>

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
<?php
        } // End if !empty $cartItem
        ?>

</div>
<?php if(!empty($order)) { ?>
 
				<form method="post" class="login100-form validate-form" action="oldcart/cart/orderr.php" style="text-align:center;">
					<span class="login100-form-title">
					<button type="button" class="success" value="PAYMENT"/>PAYMENT</button>
					</span><br><br>
					
						
					<input type="radio" value="Credit/ Debit / ATM Card"/>Credit/ Debit / ATM Card<br>
					<br />Total Amount &nbsp;&nbsp;<input class="input100"  required type="text" name="amount"	placeholder="Amount"	height="3"  value=""/>
					<br />	<br><br>
					Enter Card No &nbsp;&nbsp;<input class="input100" required type="text" name="cno"	placeholder="---- ---- ---- ----"	 />
					<br />		
					<br><br>	Expiry &nbsp;&nbsp;<select class="input100" required name="emm"><option>MM</option><option>01</option><option>02</option></select><select class="input100" name="eyy"><option>YY</option><option>2001</option><option>2002</option></select>
				<br />	<br><br>CVV &nbsp;&nbsp;<input class="input100" required type="text" name="cvv"	placeholder="---"	 />
					<br />
					
						<div class="container-login100-form-btn">
						<br><br><input type="submit" name="order" class="input100" value="ORDER" class="success"  style="background-color:#0000FF; color:#FFFFFF;">
    </form>
<?php } else { ?>
<div class="success">Problem in placing the order. Please try again!</div>
<div>
        <button class="btn-action">Back</button>
    </div>
<?php } ?>
</BODY>
</HTML>