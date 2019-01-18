<?php
		session_start();
	$logged=$_SESSION['uname'];
if (!isset($_SESSION['uname']) || $_SESSION['uname']=='')
{
header("location:index.php");
}
if(isset($_POST['order']))
{

$con=mysqli_connect("localhost","root","password","freelance");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


mysqli_query($con,"INSERT INTO order values('null','".$_POST['name']."','".$_POST['amount']."','".$_POST['cno']."','".$_POST['emm']."','".$_POST['eyy']."','".$_POST['address']."'))");

mysqli_close($con);}
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

				<form method="post" class="login100-form validate-form" >
					<span class="login100-form-title">
					ORDER Now..............!
					</span>
					
						<div class="wrap-input100">
						<input class="input100" type="text" name="name" value=" <?php echo $logged; ?>" />
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
						<input type="submit" name="order" class="input100" value="ORDER">

					
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