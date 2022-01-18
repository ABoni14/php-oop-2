<?php

class Product {

  private $name_product;
  private $description_product;
  private $cost_product;
  private $quantity_product;

  public function __construct($_name_product,$_cost_product,$_quantity_product)
  {
    $this->name_product = $_name_product;
    $this->cost_product = $_cost_product;
    $this->quantity_product = $_quantity_product;
  }

  // SETTING
  public function setNameProduct($_name_product){
    $this->name_product = $_name_product;
  }

  public function setCostProduct($_cost_product){
    $this->cost_product = $_cost_product;
  }

  public function setQuantityProduct($_quantity_product){
    $this->quantity_product = $_quantity_product;
  }

  // GETTING
  public function getNameProduct(){
    return $this->name_product;
  }

  public function getCostProduct(){
    return $this->cost_product;
  }

  public function getQuantityProduct(){
    return $this->quantity_product;
  }
}