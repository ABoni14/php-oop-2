<?php

require_once __DIR__ . "/User.php";
require_once __DIR__ . "/CreditCard.php";

class Customer extends User{

  private $card;
  private $cart;

  public function setCreditCard($_codecard,$_accountholder, $_expiration_m, $_expiration_y, $_cvv){
    try {
      $this->card = new CreditCard($_codecard,$_accountholder, $_expiration_m, $_expiration_y, $_cvv);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function setCart(...$products){
    $this->cart = $products;
  }

  public function getCreditCard(){
    return $this->card;
  }

  public function getCart(){
    return $this->cart;
  }

}


// <?php

// class Sale {
//   private $user;
//   private $product;

//   public function __construct($_user,$_product)
//   {
//     $this->user = $_user;
//     $this->product = $_product;
//   }

  // SETTING
  // public function setUser($_user){
  //   $this->user = $_user;
  // }

  // public function setProduct($_user){
  //   $this->user = $_user;
  // }

  // GETTING
//   public function getUser(){
//     return $this->user;
//   }

//   public function getProduct(){
//     return $this->product;
//   }
// }