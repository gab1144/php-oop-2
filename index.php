<?php

// models
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Accessory.php';


$cat = new Category('cat', 'icon cat');
$dog = new Category('dog', 'icon dog');

$products = [
  new Food(uniqid(), "Croccantini", "Royal Canin", $cat, 69.90, 9, ["Riso", "glutine di grano", "proteine di pollame disidratate", "farina di mais"], "Pollo"),
  
  new Toy(uniqid(), "Gioco per cani Pollo in lattice", "Trixie", $dog, 14.99, "Trixie Pollo in latex (lattice di gomma) con squittio è un gioco adatto al tuo amico cane. E' disponibile in diverse misure per adattarsi alla taglia del tuo amico a quattro zampe. E' un passatempo ideale per ogni cane perché lo squittio prodotto ad ogni pressione stimola l'istinto di caccia e l'innata voglia di giocare.
  Il lattice di gomma con cui è realizzato è molto resistente e ideale per stimolare il gioco tra cane e padrone: il lattice presenta una struttura particolarmente leggera, morbida e gradevole al tatto.", 23),
  
  new Accessory(uniqid(), "Cuccia", "PET AROUND YOU", $dog, 107.00, "Resina termoplastica", 45)
];
var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>
<body>
  
</body>
</html>