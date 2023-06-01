<?php
include_once("./Interface/SendInterface.php");

class SendToSms implements SendInterface
{
    public function sendNotifi()
    {
        echo "Send sms ";
    }
}
