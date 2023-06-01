<?php
include_once("./Interface/SendInterface.php");

class Notification
{

    protected $SendRepo;
    //dependency injection in constructor
    public function __construct(SendInterface $sendContainer)
    {
        $this->SendRepo = $sendContainer;
    }

    //send function to all users
    public function send($users)
    {
        foreach ($users as $key => $value) {
            echo '</br>';
            echo $value . $this->SendRepo->sendNotifi();
        }
    }
}
