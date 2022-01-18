<?php

class User {

  private $name_user;
  private $lastname_user;
  private $email_user;
  private $adress_user;
  private $number_user;

  public function __construct($_name_user,$_lastname_user)
  {
    $this->name_user = $_name_user;
    $this->lastname_user = $_lastname_user;
  }

  // SETTING
  public function setNameUser($_name_user){
    $this->name_user = $_name_user;
  }

  public function setLastnameUser($_lastname_user){
    $this->name_user = $_lastname_user;
  }

  // GETTING
  public function getNameUser(){
    return $this->name_user;
  }

  public function getLastnameUser(){
    return $this->lastname_user;
  }
}