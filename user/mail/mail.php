<?php 
include('ppemail/class.phpmailer.php');


$name = $_POST['name'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$subject = $_POST['subject'];
$message .="Customer Name : " .$name."<br/>";
$message .="Customer Email : " .$email."<br/>";
$message .="Customer Phone No : " .$mob."<br/>";
$message  .= "Message: ".$subject."<br/><br/><br/>";
$message .=stripslashes($_POST['message']);


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:info@tribecaply.com' . "\r\n";


if(!mail("moderngram@yahoo.com","Customer Inquiry",$message  ,$headers)) 

{

header('location:http://www.tribecaply.com/?msg="Error"');
}
else {


header('location:http://www.tribecaply.com/?msg="Success"');
}
?>