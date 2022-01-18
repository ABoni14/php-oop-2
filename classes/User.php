<?php

class User {

  private $name_user;
  private $lastname_user;
  private $email_user;
  private $adress_user;
  private $number_user;
  private $discount = 0;

  public function __construct($_name_user,$_lastname_user)
  {
    $this->name_user = $_name_user;
    $this->lastname_user = $_lastname_user;
    // $this->discount = $_discount;
  }

  // SETTING
  public function setNameUser($_name_user){
    $this->name_user = $_name_user;
  }

  public function setLastnameUser($_lastname_user){
    $this->name_user = $_lastname_user;
  }

  public function setDiscount($_discount){
    $this->discount = $_discount;
  }
  // GETTING
  public function getNameUser(){
    return $this->name_user;
  }

  public function getLastnameUser(){
    return $this->lastname_user;
  }

  public function getDiscount(){
    return $this->discount;
  }
  // METHODS
  public function insertCreditCard(){

  }
}