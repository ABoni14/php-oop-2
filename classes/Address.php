<?php
trait Address {
  public $route;
  public $town;
  public $country;
  public $zip;

  public function getFullAddress(){
    return "$this->route, $this->town, $this->country, $this->zip";
  }

}