<?php

// datatypes in php

// $var="Hello, World!";
// $var=123;
// $var=true;
// $var=null;
// $var=123.123;
// $var=array(1,2,3,4,5,'a');
// $var=[1,2,3,4,5,'a'];
// echo $var;
// var_dump($var);
// print_r($var);  



class Person{

}
$obj=new Person();
// var_dump($obj);


//operators in php
// 1. Arithmetic operators
$a=22;
$b=20;  
// $c=$a+$b;
// echo $c;
// echo $a-$b;
// echo $a*$b;
// echo $a/$b;
//echo $a%$b;  //modulus operator

// echo $a++;
// echo "<br>";
// echo $a++;
// echo $a;

// echo ++$a;

// echo $a--;
// echo "<br>";        
// echo $a;
//  echo --$a;
// 2. Assignment operators
$c=10;
//$c+=5;  // $c=$c+5
//echo $c;

$c-=5;  // $c=$c-5
// echo $c;
// +=,-=,*=,/=,%=,**=
$s=2;
$s**=3;  // $s=$s**3
// echo $s;

// 3. Comparison operators (>,>=,<,<=,!=,==,==)
// $p=3;
// $q=2;
// $x=$p>$q;
// echo $x;

/*4. logical operators(&&,||,!)
 $isAllowed=false;
 if(!$isAllowed){
    echo "You are good to go";
 }
 */
/*5. string operators(., .=)
$fname="Ram";
$lname="Yadav";
$fullname=$fname.$lname;
// echo $fullname;
$name="Hari";
$name .="Karki";
 echo $name;
 */
/*6  ternary operator
(condition)?"true statement":"false statement" */
$d=1;
$e=4;
// echo ($d>$e)? "D is greater than e":"d is not greater than e";



/*control structure 
1. conditional statements
2. loop statements

1. conditional statements

if
*/
$a=4;
// if($a>5){
//     echo "The given number is greater than 5";
// }

// if else 
// if($a>5){
//     echo "The given number is greater than 5";
// }
// else{
//     echo "The given number is less than or equal to 5";
// }

// if.... else if 
//  $num=50;
//  if($num>5){
//    echo "The number is greater than 5";
//  }
//   else if($num<5){
//    echo "The number is less  than 5";
//  }
//  else{
   
//    echo "The number is   5";

//  }

// nested if else 
// if inside if 
 $a=50;
 $b=20;


//   if($a==5){

// if($b==2){
//    echo "The  value of a is 5 and b is 2";
// }
//   }


//   nested if else 
//  if($a==5){

// if($b==2){
//    echo "The  value of a is 5 and b is 2";
// }

// else{
// echo "The  value of a is 5 and b is not 2";
// }

//  }

//  else{
//    echo "The  value of a is not 5 and b is not 2";
//  }




// switch 

/*variable 
switch(varibale){
case variable value{

}
case variable value{

}
case variable value{

}
case variable value{

}
default{

}

}
*/
/*example 1
$x=1;
switch($x){
   case 1:{
      echo "The value is 1";
      break;
   }
     case 2:{
      echo "The value is 2";
      break;
   }
     case 3:{
      echo "The value is 3";
      break;
   }
   default:{
      echo "The value is other than 1 2 3";
   }
}
   */
  /* example 2
  $day ="jdfg ";
  switch($day){
   case "sun":{
echo "Today is sunday";
break;
   }
     case "mon":{
echo "Today is monday";
break;
   }
  case "tue":{
echo "Today is tuesday";
break;
   }
  case "wed":{
echo "Today is wednesday";
break;
   }

  case "thu":{
echo "Today is Thursday";
break;
   }
  case "fri":{
echo "Today is Friday";
break;
   }
     case "sat":{
echo "Today is saturday";
break;
   }
   default:{
      echo "Invalid day";
   }
  }
   */



  /* loops
  for loop
  while loop
  do while loop
  */

/*for loop
for(initialization;condition;increment/decrement){
//block of code
}

example 1:

for($i=0;$i<=10;$i++){
   echo $i;
   echo "<br>";
}*/


$datas=["ram","Hari","Sita","Gita"];
/*for($i=0;$i<=3;$i++){
echo $datas[$i];
echo "<br>";
}*/

/*
use of foreach loop to access the array elements
syntax:
foreach($arraname as $arrayelem){

}
example:


foreach($datas as $data){
echo $data;
echo "<br>";
}
*/

?>