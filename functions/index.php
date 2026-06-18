<?php
include"../tasks/index.php";
// echo "I am running from the functions /index.php";

function greet(){
   echo "I am running from the greet function"; 
}
// greet();
function sum($a,$b){
    // $a=6;
    // $b=5;
    $c=$a+$b;
    return $c;
    // echo $c;
    // echo "<br>";
}
// $d=sum(2,3);
// echo $d;
//  $e=sum(10,20);
//  echo $e;
// sum(15,16666);
// echo $c;


function multiply($a,$b){
    $c=$a*$b;
    return $c;
}


welcome("Nawaraj");
?>