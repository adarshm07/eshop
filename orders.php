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
