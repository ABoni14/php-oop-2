<?php

class CreditCard {
  private $codecard;
  private $accountholder;
  private $cvv;
  private $expiration_m;
  private $z;

  public function __construct($_codecard,$_accountholder,$_cvv,$_expiration_m,$_expiration_y)
  {
    $this->codecard = $this->checkNumberCreditCard($_codecard);
    $this->accountholder = $_accountholder;
    $this->cvv = $this->checkCvvCreditCard($_cvv);
    $this->checkExpirationCreditCard($_expiration_y, $_expiration_m);
    $this->expiration_m = $_expiration_m;
    $this->expiration_y = $_expiration_y;
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

  public function setExpiration_m($_expiration_m){
    $this->expiration_m = $_expiration_m;
  }

  public function setExpiration_y($_expiration_y){
    $this->expiration_y = $_expiration_y;
  }

  // GETTING
  public function getCodecard(){
    return $this->codecard;
  }

  public function getAccountholder(){
    return $this->accountholder;
  }

  public function getCvv(){
    return $this->cvv;
  }

  public function getExpiration_m(){
    return $this->expiration_m;
  }

  public function getExpiration_y(){
    return $this->expiration_y;
  }

  // METHODS
  public function checkNumberCreditCard($codecard){
    if(strlen($codecard) < 10){
      echo "<h4>Carta corretta</h4>";
      return $codecard;
    } else{
      echo "<h4>Inserisci una carta corretta</h4>";
    }
  }

  public function checkCvvCreditCard($cvv){
    if(strlen($cvv) === 3){
      echo "<h4>CVV corretto</h4>";
      return $cvv;
    } else{
      echo "<h4>Inserisci CVV corretto</h4>";
    }
  }

  private function checkExpirationCreditCard($y,$m){
    $today = date("Y-n-j");
    if(!is_int($y) || !is_int($m)){
      throw new Exception("Inserisci una data corretta");
    }
    if($m > 12 || $m < 1){
      throw new Exception("Mese non valido");
    }
    $expired_date = $this->generateExpiredDate($y, $m);
    if($today >= $expired_date){
      throw new Exception('Carta di credito scaduta');
    }
  }

  private function generateExpiredDate($y, $m){
    $m_exp = $m + 1;
    $y_exp = $y;

    if($m_exp > 12){
      $m_exp = 1;
      $y_exp = $y + 1;
    }

    if(!checkdate($m_exp,1,$y_exp)){
      throw new Exception('La data non è valida');
    }

    return date("$y_exp-$m_exp-1");
  }
}