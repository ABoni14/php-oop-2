<?php
require_once __DIR__ . "/Address.php"; 

class User {
  use Address;

  private $name_user;
  private $lastname_user;
  private $email_user;
  private $adress_user;
  private $number_user;
  protected $discount = 0;
  private $creditcard;

  public function __construct($_name_user,$_lastname_user,$_email_user)
  {
    $this->name_user = $_name_user;
    $this->lastname_user = $_lastname_user;
    $this->email_user = $_email_user;
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

  public function setEmailUser($_email_user){
    $this->email_user = $_email_user;
  }

  // public function setCreditCard($_creditcard){
  //   $this->creditcard = $_creditcard;
  // }
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

  public function getEmailUser(){
    return $this->email_user;
  }

  public function getCreditCard(){
    return $this->creditcard;
  }
  // METHODS
  public function controlEmailUser(){
    if (filter_var($this->email_user, FILTER_VALIDATE_EMAIL)) {
      echo("$this->email_user is a valid email address");
    } else {
      echo("$this->email_user is not a valid email address");
    }
  }
  

  public function insertCreditCard(){

  }
}