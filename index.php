<?php

// models
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Accessory.php';


$cat = new Category('cat', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 192h17.1c22.1 38.3 63.5 64 110.9 64c11 0 21.8-1.4 32-4v4 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V339.2L248 448h56c17.7 0 32 14.3 32 32s-14.3 32-32 32H160c-53 0-96-43-96-96V192.5c0-16.1-12-29.8-28-31.8l-7.9-1C10.5 157.6-1.9 141.6 .2 124s18.2-30 35.7-27.8l7.9 1c48 6 84.1 46.8 84.1 95.3v85.3c34.4-51.7 93.2-85.8 160-85.8zm160 26.5v0c-10 3.5-20.8 5.5-32 5.5c-28.4 0-54-12.4-71.6-32h0c-3.7-4.1-7-8.5-9.9-13.2C325.3 164 320 146.6 320 128v0V32 12 10.7C320 4.8 324.7 .1 330.6 0h.2c3.3 0 6.4 1.6 8.4 4.2l0 .1L352 21.3l27.2 36.3L384 64h64l4.8-6.4L480 21.3 492.8 4.3l0-.1c2-2.6 5.1-4.2 8.4-4.2h.2C507.3 .1 512 4.8 512 10.7V12 32v96c0 17.3-4.6 33.6-12.6 47.6c-11.3 19.8-29.6 35.2-51.4 42.9zM400 128c0-8.8-7.2-16-16-16s-16 7.2-16 16s7.2 16 16 16s16-7.2 16-16zm48 16c8.8 0 16-7.2 16-16s-7.2-16-16-16s-16 7.2-16 16s7.2 16 16 16z"/></svg>');
$dog = new Category('dog', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M309.6 158.5L332.7 19.8C334.6 8.4 344.5 0 356.1 0c7.5 0 14.5 3.5 19 9.5L392 32h52.1c12.7 0 24.9 5.1 33.9 14.1L496 64h56c13.3 0 24 10.7 24 24v24c0 44.2-35.8 80-80 80H464 448 426.7l-5.1 30.5-112-64zM416 256.1L416 480c0 17.7-14.3 32-32 32H352c-17.7 0-32-14.3-32-32V364.8c-24 12.3-51.2 19.2-80 19.2s-56-6.9-80-19.2V480c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V249.8c-28.8-10.9-51.4-35.3-59.2-66.5L1 167.8c-4.3-17.1 6.1-34.5 23.3-38.8s34.5 6.1 38.8 23.3l3.9 15.5C70.5 182 83.3 192 98 192h30 16H303.8L416 256.1zM464 80c0-8.8-7.2-16-16-16s-16 7.2-16 16s7.2 16 16 16s16-7.2 16-16z"/></svg>');

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
  <div class="container">
    <div class="product-area">
      <?php foreach ($products as $product) : ?>
        <div class="product-card">
          <div class="product-image">
            <img src="<?php echo $product->getImage() ?>" alt="<?php echo $product->name ?>">
          </div>
          
          <div class="product-info">
            <span><?php echo $product->name ?></span>
            <span>Brand: <?php echo $product->brand ?></span>
            <span>Prezzo: €<?php echo $product->price ?></span>
            
            <?php echo $product->category->icon ?>
            
            <?php if(get_class($product) == "Food") :?>
              
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
            
            <span><?php echo $product->feature ?></span>
            <span>Dimensione: <?php echo $product->size ?>cm</span>
            
            <?php else : ?>
              
              <span>Materiale: <?php echo $product->material ?></span>
              <span>Dimensione: <?php echo $product->size ?>cm</span>
              
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>