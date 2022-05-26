<?php

include_once __DIR__ . "/Models/Products.php";
include_once __DIR__ . "/Models/Games.php";
include_once __DIR__ . "/Models/Foods.php";
include_once __DIR__ . "/Models/Accessories.php";

$products = [
    "games" => [
        new Games(1, "palla", "lorem dolor ipsum", 15),
        new Games(2, "gomitolo", "lorem dolor ipsum", 15),
        new Games(3, "topolino0", "lorem dolor ipsum", 15),
    ],
    "foods" => [
        new foods(1, "scatoletta tonno", "lorem dolor ipsum", 15),
        new foods(2, "scatoletta pollo", "lorem dolor ipsum", 15),
        new foods(3, "scatoletta salmone", "lorem dolor ipsum", 15),
    ],
    "accessories" => [
        new accessories(1, "cuccia", "lorem dolor ipsum", 15),
        new accessories(2, "tiragraffi", "lorem dolor ipsum", 15),
        new accessories(3, "trasportino", "lorem dolor ipsum", 15),
    ],
];

var_dump($products);
