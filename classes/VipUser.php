<?php
require_once __DIR__ . "/User.php";

class VipUser extends User {
  private $discount;

  function __construct($_name_user,$_lastname_user,$_discount)
  {
    parent::__construct($_name_user,$_lastname_user);
    $this->discount = $_discount;
  }

  // SETTING
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  // GETTING
  public function getDiscount(){
    return $this->discount;
  }
}