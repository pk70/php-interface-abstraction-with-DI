<?php

class Users
{
    //users array
    protected $users = ['1' => 'Hasmi', '2' => 'Jhon', '3' => 'Moinul'];

    //get users
    public function get(): array
    {
        return $this->users;
    }
}
