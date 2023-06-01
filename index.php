<?php
require_once("./Classes/Users.php");
require_once("./Classes/Notification.php");
require_once("./Classes/SendToEmail.php");
require_once("./Classes/SendToSms.php");
require_once("./Classes/SendToEmailAndSms.php");

//new user for getting users
$users = new Users;

//send notification to email
$notification = new Notification(new SendToEmail);

//send notification to sms
//$notification = new Notification(new SendToSms);

//send notification to email and sms
//$notification = new Notification(new SendToEmailAndSms(new SendToEmail, new SendToSms));

//print the output
print_r($notification->send($users->get()));
