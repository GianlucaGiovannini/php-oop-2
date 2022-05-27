<?php

include_once __DIR__ . "/Models/traits/TraitSupplierGames.php";
include_once __DIR__ . "/Models/traits/TraitSupplierFoods.php";
include_once __DIR__ . "/Models/traits/TraitSupplierAccessories.php";
include_once __DIR__ . "/Models/article/Products.php";
include_once __DIR__ . "/Models/article/Games.php";
include_once __DIR__ . "/Models/article/Foods.php";
include_once __DIR__ . "/Models/article/Accessories.php";
include_once __DIR__ . "/Models/users/Users.php";
include_once __DIR__ . "/Models/payment/Payments.php";

$products = [
    new Games(1, "palla", "lorem dolor ipsum", 100, 10),
    new Games(2, "gomitolo", "lorem dolor ipsum", 120, 20),
    new Games(3, "topolino", "lorem dolor ipsum", 130, 0),
    new foods(1, "scatoletta tonno", "lorem dolor ipsum", 150, 50),
    new foods(2, "scatoletta pollo", "lorem dolor ipsum", 90, 100),
    new foods(3, "scatoletta salmone", "lorem dolor ipsum", 70, 80),
    new accessories(1, "cuccia", "lorem dolor ipsum", 800, 800),
    new accessories(2, "tiragraffi", "lorem dolor ipsum", 900, 15),
    new accessories(3, "trasportino", "lorem dolor ipsum", 200, 50),
];



// var_dump($products);
// var_dump($products[0]->getSupplierName());
// var_dump($products[0]->getSupplierCity());

$users = [
    new Users(1, "Gianluca", "prova@prova.gmail.it"),
];

$login = $_GET["login"];
$registered = false;
if ($login === $users[0]->name) {
    $registered = true;
}

if ($registered === true) {
    foreach ($products as $product) {
        $product->setSconto($users[0]);
    }
    // var_dump($products[0]->getPrice());
}




// try and catch 

foreach($products as $product){
    try {
        $product->controlPieces($product->pieces);
    } catch (Exception $e) {
        $e->getMessage(); // in questo caso non serve fare echo perché perché non voglio stampare a schermo un errore ma ho cambiato il valore di 0 in esauriti
    }
}


