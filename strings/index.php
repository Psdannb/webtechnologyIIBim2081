<?php
$str = 'hello';
$str2 = "Hi";
// var_dump($str);
// var_dump($str2);
// string concatination 
$finalstr = $str . $str2;
// echo $finalstr;
$name = "Anubhav";
$msg = 'Hello ${name} ';
// echo $msg;
$msg2 = "Hello ${name} ";
// echo $msg2;
$msg3 = "Hello $name";
// echo $msg3;

// string related functions 
// 1. bin2hex(string)
$char = "B";
// echo bin2hex($char);
// echo  hex2bin(42);
// echo chr(90);
// echo ("I am inside echo string");
$password = "Nepal123";
// echo md5($password);
// echo sha1($password);

$fname = "SITA";
// echo lcfirst($fname);
// echo strtolower($fname);
$lname = "bhu jel";
// echo ucfirst($lname);
// echo strtoupper($lname);
// print($lname);
// printf($lname);
// print_r($lname);
// echo strlen($lname);
// echo strrev($lname);


$students = "ram,shyam,hari,sita,gita,laxman";
$studentArray = explode(",", $students);
// print_r($studentArray);

$employeesArray = ["ram", "shyam", "hari"];
// print_r($employeesArray);
$employeeStr = implode(",", $employeesArray);
// echo $employeeStr;

$a = "aman";
$b = "alisha";
// echo strcmp($a, $b);