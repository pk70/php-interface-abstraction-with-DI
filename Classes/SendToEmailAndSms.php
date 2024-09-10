<?php
include_once("./Interface/SendInterface.php");
include_once("SendToEmail.php");
include_once("SendToSms.php");

class SendToEmailAndSms implements SendInterface
{
  private $sendEmail;
  private $sendSms;
  //dependency injection in constructor for both
  public function __construct(SendToEmail $sendToEmail, SendToSms $sendToSms)
  {
    $this->sendEmail = $sendToEmail;
    $this->sendSms = $sendToSms;
  }
  public function sendNotifi()
  {
    echo "Send sms and email to ";
  }
}
