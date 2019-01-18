
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
								
								<li><a href="products.php">Products</a></li>
								
				</a>
				
			</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->

	<!-- banner slider --><div style="padding-left:100px;">
	<h1>Add Stock Details</h1>
	<form method="post" enctype="multipart/form-data">
	Product Name:<input type="text" name="pn" />
	<br /><br />
	Product Description:<input type="text" name="pd" />
	<br /><br />
	Product Code:<input type="text" name="pc" />
	<br /><br />
	Product Image:<input type="file" name="upload" accept="image/*" />
	<br /><br />
	Product Price:<input type="text" name="pp" />
	<br /><br />
	ProductQuantity:<input type="text" name="pq" />
	<br /><br />
		Product catagory:<select name="pcy"><option>cake</option><option>snackes</option><option>biscuits</option><option>pudding</option></select>
	<br /><br />
	<input type="submit" name="add" value="ADD"/>
	<br /><br />
	</form>
	<?php
session_start();
include ("cart/db.php");	

	$msg = "";

if(isset($_POST['add']))
{

$old=$_FILES['upload']['tmp_name'];
$new="images/".$_FILES['upload']['name'];
move_uploaded_file($old,$new);
$query = mysqli_query($db, "INSERT INTO shop_products  values('null','".$_POST['pn']."','".$_POST['pd']."','".$_POST['pc']."','".$_FILES['upload']['name']."','".$_POST['pp']."','".$_POST['pq']."','".$_POST['pcy']."')");
			if($query)
			{
				echo "Thank You! you are now added.";
			}
		}
	

?>
				
	<!-- //banner slider -->

<!-- welcome -->

	<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>