<?php

class Sale {
  private $user;
  private $product;

  public function __construct($_user,$_product)
  {
    $this->user = $_user;
    $this->product = $_product;
  }

  // SETTING
  public function setUser($_user){
    $this->user = $_user;
  }

  public function setProduct($_user){
    $this->user = $_user;
  }

  // GETTING
  public function getUser(){
    return $this->user;
  }

  public function getProduct(){
    return $this->product;
  }
}