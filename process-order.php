<?php
		session_start();
	$logged=$_SESSION['uname'];
	$id=$_SESSION['id'];
 require 'config.php'; 
	$id=$_SESSION['id'];
	//$_SESSION['status']="succsess";
if (!isset($_SESSION['uname']) || $_SESSION['uname']=='')
{
header("location:index.php");
}
include_once("inc/db_connect.php");
include("inc/config.inc.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bakery In a Hotel Category Bootstrap Responsive Website Template | Home :: w3layouts </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> <!-- fontawesome css -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->

</head>
<body>

	<!-- header -->
	<div class="header" id="home">
		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1>Bakery In</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="mainhome.php" class="active">Home</a></li>
								<li><a href="about.html">About </a></li>
								<li><a href="services.html">Services</a></li>
								
								<li><a href="products.php">Products</a></li><?php
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
       
        <?php
        if (! empty($cartItem)) {
            ?>

<?php
        } // End if !empty $cartItem
        ?>

</div>
<?php if(!empty($order)) { ?>
 
				<form method="post" class="login100-form validate-form" action="orderr.php" style="text-align:center;">
					<span class="login100-form-title">
					<button type="button" class="success" value="PAYMENT"/>PAYMENT</button>
					</span><br><br>
					
						
					<input type="radio" value="Credit/ Debit / ATM Card"/>Credit/ Debit / ATM Card<br>
					<br />Total Amount &nbsp;&nbsp;<input class="input100"  required type="text" name="amount"	placeholder="Amount"	height="3"  value="<?php echo $item_price; ?>"/>
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