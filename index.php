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
  new Food(uniqid(), "Croccantini", "Royal Canin", $cat, 69.90, 9, ["Riso", "glutine di grano", "proteine di pollame disidratate", "farina di mais"], "Pollo", "https://cdn.royalcanin-weshare-online.io/2foya2QBIYfdNSoCbADs/v188/digestive-int-fcn-packshot?w=420&fm=jpg&auto=compress"),
  
  new Toy(uniqid(), "Gioco per cani Pollo in lattice", "Trixie", $dog, 14.99, "Trixie Pollo in latex (lattice di gomma) con squittio è un gioco adatto al tuo amico cane. E' disponibile in diverse misure per adattarsi alla taglia del tuo amico a quattro zampe. E' un passatempo ideale per ogni cane perché lo squittio prodotto ad ogni pressione stimola l'istinto di caccia e l'innata voglia di giocare.
  Il lattice di gomma con cui è realizzato è molto resistente e ideale per stimolare il gioco tra cane e padrone: il lattice presenta una struttura particolarmente leggera, morbida e gradevole al tatto.", 23, "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/pollo/in/lattice/6/400/60576_PLA_Hundespielzeug_Spiel_Huhn_mit_Squeaker_HS_6.jpg"),
  
  new Accessory(uniqid(), "Cuccia", "PET AROUND YOU", $dog, 107.00, "Resina termoplastica", 45, "https://arcaplanet.vtexassets.com/arquivos/ids/270518/P.A.Y.-CUCCIA-ALCAZAR-50.jpg?v=1756516463")
];

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
  <div class="product-area">
    <?php foreach ($products as $product) : ?>
      <div class="product-card">
        <img src="<?php echo $product->getImage() ?>" alt="<?php echo $product->name ?>">
        <div class="product-info">
          <span><?php echo $product->name ?></span>
          <span>Brand: <?php echo $product->brand ?></span>
          <span>Prezzo: €<?php echo $product->price ?></span>
          <?php if(get_class($product) == "Food") :?>

            <span>Food</span>
            <span>Peso: <?php echo $product->weight ?>kg</span>
            <span>Ingredienti: 
            <?php
              $ingredientList = "";
              foreach ($product->ingredients as $ingredient){
                $ingredientList .= $ingredient.", ";
              }
              $ingredientList = substr($ingredientList, 0, -2);
              echo $ingredientList;
            ?></span>
            <span>Gusto: <?php echo $product->taste ?></span>

          <?php elseif(get_class($product) == "Toy") : ?>
            <span>Toy</span>
            <span><?php echo $product->feature ?></span>
            <span>Dimension: €<?php echo $product->size ?></span>
          <?php else : ?>
            <span>Accessory</span>
            <span>Materiale: <?php echo $product->material ?></span>
            <span>Dimension: <?php echo $product->size ?></span>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>