<?php

class Food extends Product{

  public $wheight;
  public $ingredients;
  public $taste;

  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_wheight, $_ingredients, $_taste)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price);
    $this->wheight = $_wheight;
    $this->ingredients = $_ingredients;
    $this->taste = $_taste;
  }

}