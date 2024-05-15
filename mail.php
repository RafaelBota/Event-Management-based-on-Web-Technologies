<?php

require('QrCode.php');


use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
require 'C:\xampp\htdocs\contact_form\vendor\autoload.php'; 

function Send_email($mailFrom,$User_name,$phone,$city,$facebook,$qrCode,$contact_mode,$interest){

#Initialize PHPMailer
$mail= new PHPMailer();
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail ->isSMTP();
$mail ->SMTPAuth =true;
$mail ->SMTPDebug =0;
$mail ->SMTPSecure="tls";
$mail ->Port=587;

#Connection settings
$mail ->Host= "smtp.gmail.com";
$mail ->Username="rahaevents45@gmail.com";
$mail ->Password="Rahaevents45!";

$mailTo ='Rahaevents45@gmail.com';
$mail-> IsHTML(true);
$mail ->SetFrom($mailFrom,$User_name);
$mail ->addAddress($mailTo);
$mail->AddReplyTo($mailFrom, $User_name);

#Create email
$mail->Subject ='I would like to come at the party ! ';
$mail->Body ="Name: $User_name<br>
			  Phone No: $phone<br>
			  City: $city<br>
			  Facebook: $facebook<br>
			  Prefered contact mode: $contact_mode<br>
			  Raha Card interest: $interest<br>
			  Email id: $mailFrom<br>";


$mail->AddEmbeddedImage($qrCode, 'logo_2u'); 

 return $mail->Send();
}
?>