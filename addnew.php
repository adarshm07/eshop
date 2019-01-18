<?php
	include('conn.php');
 
	$name=$_POST['name'];
	$uname=$_POST['uname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
 
	mysqli_query($conn,"insert into register (name, uname, email, mobile) values ('$name', '$uname', '$email', '$mobile')");
	header('location:index.php');
 
?>