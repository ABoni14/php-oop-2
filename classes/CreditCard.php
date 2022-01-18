<?php

class CreditCard {
  private $codecard;
  private $accountholder;
  private $cvv;
  private $expiration;

  public function __construct($_codecard,$_accountholder,$_cvv,$_expiration)
  {
    $this->codecard = $_codecard;
    $this->accountholder = $_accountholder;
    $this->cvv = $_cvv;
    $this->expiration = $_expiration;
  }

  // SETTING
  public function setCodecard($_codecard){
    $this->codecard = $_codecard;
  }

  public function setAccountholder($_accountholder){
    $this->accountholder = $_accountholder;
  }

  public function setCvv($_cvv){
    $this->cvv = $_cvv;
  }

  public function setExpiration($_expiration){
    $this->expiration = $_expiration;
  }

  // GETTING
  public function getCodecard(){
    return $this->codecard;
  }

  public function getAccountholder(){
    return $this->codecard;
  }

  public function getCvv(){
    return $this->codecard;
  }

  public function getExpiration(){
    return $this->codecard;
  }
}