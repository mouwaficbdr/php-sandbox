<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}


class Admin extends User {
  public $level;

  public function __construct($name, $email, $level) {
    $this->level = $level;
    parent::__construct($name, $email);
  }
}

$admin = new Admin('Tom', 'gmail.com', 5);