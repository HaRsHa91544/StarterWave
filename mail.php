<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'starterwave25@gmail.com';
$mail->Password = 'rkifthjaptoalenl';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('starterwave25@gmail.com');
$mail->addAddress('starterwave25@gmail.com');
$mail->CharSet = 'UTF-8';
$mail->FromName = 'StarterWave';
$mail->isHTML(true);

session_start();

$mail->Subject = "🚨Opportunity Knocks !🚨 We have Received a New Client Request !";
$mail->Body = "<h1>This is the Turning Point ! Contact the Client and Rise Higher 🚀!</h1><br><h3>Client Name: {$_SESSION['name']}<br>Mobile: {$_SESSION['mobile']}<br>Email: {$_SESSION['mail']}<br>Project: {$_SESSION['project']}<br>Description about the project: {$_SESSION['desc']}</h3>";

$mail->send();
session_destroy();
header("Location: submit.html");
exit();
?>