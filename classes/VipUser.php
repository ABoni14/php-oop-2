<?php
require_once __DIR__ . "/User.php";

class VipUser extends User {
  function __construct($_name_user,$_lastname_user,$_email_user)
  {
    parent::__construct($_name_user,$_lastname_user,$_email_user);
    $this->discount = 40;
  }

  // SETTING
  public function setDiscount($_discount){
    $this->discount += $_discount;
  }
}