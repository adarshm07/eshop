<?php
session_start();
include ("db.php");	
if(isset($_POST['login']))
{
$pwd=$_POST['password'];
$wp=$_POST['password'];
$s="select * from register where uname='".$_POST['user']."' and pwd='$wp'";
$result=mysqli_query($db,$s);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) >= 1)
{
$_SESSION['id']=$ar[0];
$_SESSION['uname']=$_POST['user'];
header('location:mainhome.php');
}
else
{
	?>
	<script type="text/javascript">
			alert("Incorrect Username/ Password");
			</script>
<?php
}}
?>