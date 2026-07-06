<?php
$raw_products = ["    t-shirt:25.99:5 ", "JEANS:49.95:0", " jacket : 89.00 : 2 "];
// print_r($raw_products);
$newproductsAssoc=[];
foreach($raw_products as $product) {
//   print_r($product);
//   echo "<br>";
$whiteSpaceRemovedProduct = trim($product);
$lowercase=strtolower($whiteSpaceRemovedProduct);
$newProductArray= explode(":", $lowercase);
$newproductsAssoc[] = [
    "name" => $newProductArray[0],
    "price" => $newProductArray[1],
    "quantity" => $newProductArray[2]
  ];


}
  print_r($newproductsAssoc);

?>