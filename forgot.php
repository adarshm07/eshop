<?php
include('connect.php');
require "PHPMailerAutoload.php";
if(isset($_POST['login']))
{
$s="select * from register where email='".$_POST['user']."'";
	$res1 = mysqli_query($connection, $s);
		if($ar = mysqli_fetch_assoc($res1))

$pwd=$ar['pwd'];


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
/*$mail->Port = 587;
$mail->SMTPSecure = 'tls';*/


$mail->Username = "soumyat369@gmail.com";
$mail->Password = "your password";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "soumyat369@gmail.com";
$mail->FromName = "Soumya";

$mail->addAddress("soumyat369@gmail.com","User 1");

//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");

$mail->Subject = "Hai Soumya";
$mail->Body =  "Please use this password to login " . $pwd;

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	
else
    echo "Message has been sent";
	?><a href="index.php">Login Here using the password send to the mail</a><?php
	
}?>

<!--form-->
<form method="post" style="text-align:center">
<br><br>Enter mail Id:
<input type="email" name="user"  required"/>
<input type="submit" value="ok" name="login"></form>