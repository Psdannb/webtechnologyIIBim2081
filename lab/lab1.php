<?php
$raw_products = ["    t-shirt:25.99:5    ", "JEANS:49.95:0", "    jacket : 89.00 : 2 "];
// print_r($raw_products);
$newproductsAssoc=[];
foreach($raw_products as $product) {
  // var_dump($product);
  // echo "<br>";
$whiteSpaceRemovedProduct = trim($product);
  // var_dump($whiteSpaceRemovedProduct);
  // echo "<br>";
$lowercase=strtolower($whiteSpaceRemovedProduct);
// print_r($lowercase);
// echo "<br>";
$newProductArray= explode(":", $lowercase);
// print_r($newProductArray);
// echo "<br>";
$newproductsAssoc[] = [
    "name" => $newProductArray[0],
    "price" => $newProductArray[1],
    "quantity" => $newProductArray[2]
  ];
}
  print_r($newproductsAssoc);

?>