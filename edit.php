<?php
	include('conn.php');
 
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$uname=$_POST['uname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
 
	mysqli_query($conn,"update register set name='$name', uname='$uname', email='$email', mobile='$mobile' where id='$id'");
	header('location:index.php');
 
?>