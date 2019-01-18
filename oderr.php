<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<style>

#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#output_image
{
text-align:center;
 max-width:150px;
}
</style>
</head>

<body>
<form method="post" enctype="multipart/form-data" >
<table align="center">
<tr><th>REGISTRATION FORM</th></tr><div id="wrapper">
<tr><td> <img id="output_image"/></td></tr>
<tr><td>User Image:</td><td> <input type="file" name="upload" accept="image/*" onchange="preview_image(event)">

</div></td></tr>


<tr><td>Name:</td><td><input type="text" name="name"required pattern="[A-Za-z]{3,25}+ "/></td></tr>
<tr><td>User Name:</td><td><input type="text" name="uname"required pattern="[A-Za-z]{3,25}+ "/></td></tr>
<tr><td>Email:</td><td><input type="text" name="email"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></td></tr>
<tr><td>Gender:</td><td><select name="gender">
<option value="select">---Select---</option>
<option value="male">Male</option>
<option value="female">Female</option>

</select></td></tr>
<tr><td>Passsword:</td><td><input type="password" name="pwd" required/></td></tr>
<tr><td></td><td><input type="submit"value="REGISTER" name="register" </td></tr>
<br /><br />
<tr><a href="login.php">Login Now</a></tr>

<?php
session_start();
include ("db.php");	

	$msg = "";

if(isset($_POST['register']))
{

$old=$_FILES['upload']['tmp_name'];
$new="image/".$_FILES['upload']['name'];
move_uploaded_file($old,$new);
$date = date('Y-m-d ');
$pwd=$_POST['pwd'];
$wp=md5($pwd);
$sql="SELECT uname from register where uname='".$_POST['uname']."'";
$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			echo "Sorry...This user already exist...";
		}
		else
		{
			$query = mysqli_query($db, "INSERT INTO register values('null','".$_FILES['upload']['name']."','".$_POST['name']."','".$_POST['uname']."','".$_POST['email']."','".$_POST['gender']."','$wp','$date')");
			if($query)
			{
				echo "Thank You! you are now registered.";
			}
		}
	}

?>


</table></form>
</body>
</html>
