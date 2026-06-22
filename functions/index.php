<?php
include "../tasks/index.php";
// echo "I am running from the functions /index.php";

function greet()
{
    echo "I am running from the greet function";
}
// greet();
function sum($a, $b)
{
    // $a=6;
    // $b=5;
    $c = $a + $b;
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


function multiply($a, $b)
{
    $c = $a * $b;
    return $c;
}


// welcome("Nawaraj");


function addition(...$numbers)
{
    $sum = 0;
    // var_dump($numbers);
    foreach ($numbers as $number) {
        $sum = $sum + $number;
        echo $sum;
        echo "<br>";
    }
    // return $sum;
}
// addition(2, 40, 50, 50, 3, 45);
// $output = addition(2, 40, 50, 50, 3, 45);
// echo $output;


function callByValue($a)
{
    $a++;
    echo "I am inside the function and the value of variable a inside the function is  " . $a;
}
function callByReference(&$a)
{
    $a++;
    echo "I am inside the function and the value of variable a inside the function is  " . $a;
}

$a = 5;
// callByValue($a);
callByReference($a);
echo "<br>";
echo "I am outside the function and the value of a is  " . $a;