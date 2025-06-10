<?php
  
class User {
  public $name;
  public $email;

  public function __construct($name, $email) 
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login() {
    echo 'The user logged in';
  }
}


$user1 = new User('Mouwafic', 'example@gmail.com');

