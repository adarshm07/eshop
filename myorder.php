<?php
		session_start();
	$logged=$_SESSION['uname'];
 require 'config.php'; 
if (!isset($_SESSION['uname']) || $_SESSION['uname']=='')
{
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body>
	

				<div align="center">

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
					ORDER Now..............!
					</span>
					
						<div class="wrap-input100">
						<input class="input100" type="text" name="name" placeholder=" <?php echo $logged; ?>"/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<input type="radio" value="Credit/ Debit / ATM Card"/>Credit/ Debit / ATM Card
					<br />Enter Amount &nbsp;&nbsp;<input class="input100" type="text" name="amount"	placeholder="Amount"	 />
					<br />	
					Enter Card No &nbsp;&nbsp;<input class="input100" type="text" name="cno"	placeholder="---- ---- ---- ----"	 />
					<br />		
						Expiry &nbsp;&nbsp;<select class="input100" name="emm"><option>MM</option><option>01</option><option>02</option></select><select class="input100" name="eyy"><option>YY</option><option>2001</option><option>2002</option></select>
				<br />	CVV &nbsp;&nbsp;<input class="input100" type="text" name="cvv"	placeholder="---"	 />
					<br />
					<input class="input100" type="text" name="address"	placeholder="Contact Address"	width="5" height="50" /><br />
						<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="register">
						ORDER
						</button>
					
<?php

include ("db.php");	

	$msg = "";

if(isset($_POST['register']))
{

			$query = mysqli_query($db, "INSERT INTO order values('null','".$_POST['name']."','".$_POST['amount']."','".$_POST['emm']."','".$_POST['eyy']."','".$_POST['cvv']."','".$_POST['address']."')");
			if($query)
			{
				echo "Thank You! you are now ordered.";
			}
		}
	

?>		

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
