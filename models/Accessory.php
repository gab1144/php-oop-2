<?php

class Accessory extends Product{

  public $material;
  public $size;

  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_material, $_size)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price);
    $this->material = $_material;
    $this->size = $_size;
  }
}