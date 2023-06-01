<?php

include_once("./Interface/SendInterface.php");

class SendToEmail implements SendInterface{
    public function sendNotifi(){
        echo "sent email to ";

    }
}