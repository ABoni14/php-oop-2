<?php
require_once __DIR__ . "/User.php";

class VipUser extends User {
  function __construct($_name_user,$_lastname_user)
  {
    parent::__construct($_name_user,$_lastname_user);
  }

  // SETTING
  public function setDiscount($_discount){
    $this->discount += $_discount;
  }
}