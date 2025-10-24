<?php

class user{

$id
$name
$first_Name;
$last_name;
$email;
$password;

__construct($id,$name,$first_Name,$last_name,$email,$password){

    $this->id=$id;
    $this->name=$name;
    $this->first_name=$first_name;
    $this->last_name=$last_name;
    $this->email=$email;
    $this->password=$password;

}

}

interface uni{

    public function buildUser($data);
    public function verifyEmail($data);
    public function create(User $user);


    }

?>