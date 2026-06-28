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


/*str_replace(): It is used to find and replace text within a string.  
syntax: str_replace(find, replace, string);
Example: */
$str = "Hello World";
$newStr = str_replace("World", "PHP", $str);

// echo $newStr;

/*strpos():It is used to find the position of the first occurrence of a substring within a string. 
It returns the index position if found; otherwise, it returns false. 
syntax: strpos(string, search); 
Example:1 */

$str = "Hello World";
// echo strpos($str, "World");

// example 2 :
$str = "PHP Programming";
// echo strpos($str, "P");


/*
stripos(): It is is used to find the position of the first occurrence of a substring in a string without 
considering case (case-insensitive search).  
syntax: stripos(string, search);
Example:
*/
$str = "PHP Programming";
// echo stripos($str, "P");

/*  
strripos():It is used to find the position of the last occurrence of a substring in a string
 without considering case (case-insensitive search).
 syntax: strripos(string, search);
 Example:
*/
$str = "PHP is easy. I love php.";
// echo strripos($str, "php");
  
/*
strrpos():It used to find the position of the last occurrence of a substring in a string.
 It performs a case-sensitive search.
 syntax: strrpos(string, search);
 Example:
  */

$str = "PHP is easy. PHP is powerful.";
// echo strrpos($str, "PHP");

/*
trim(): It is used to remove whitespace (spaces, tabs, newlines, etc.) from the beginning and end of a string.
syntax: trim(string);
Example:
*/

$str = "   Hello PHP   ";
echo trim($str);

?>