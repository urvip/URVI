<?php
function sendEmail($email,$subject,$content)
{
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	require 'PHPMailer/PHPMailerAutoload.php';
	$mailer = new PHPMailer(true);
	$mailer->IsSMTP();
	$mailer->SMTPSecure = 'ssl';
	$mailer->Host = 'smtp.gmail.com';
	$mailer->Port = 465;
	$mailer->SMTPAuth = true;
	$mailer->Username = 'atmiyaparking@gmail.com';
	$mailer->Password = 'atmiyaparking@1234';
	$mailer->SetFrom('atmiyaparking@gmail.com', 'Atmiya College Parking'); 
	$mailer->AddAddress($email); 
	$mailer->Subject = $subject;
	$mailer->Body = $content;
	$mailer->Send();
}
?>