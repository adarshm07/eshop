<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
						
						$db=mysqli_connect("localhost","root","password","freelance");
						$query = mysqli_query($db, "INSERT INTO user_cart values('null','".$_POST['name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zip']."','".$_POST['country']."')");
							header('location:cart.php');
						
						?>
						
					
						
						
						
</body>
</html>
