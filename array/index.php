<?php
/*
Array is a special data type in PHP that is used to store multiple values in a single variable. 
Each value in an array is identified by an index (numeric or associative key).
syntax: $array_name = array(value1, value2, value3); 
OR
$array_name = [value1, value2, value3];
*/
$students=array("Ram",10,22.5,true);
// var_dump($students);
$numbers=[10,11.5];
// var_dump($numbers);



// accessing the array elements
$elem=$students[2];
// echo $elem;


/*accessing array elements using foreach loop;
syntax:foreach($arrayname as $elementname){
}
 */
foreach($students as $student){
    // echo $student;
    // echo "<br>";
}
/* so far we have discussed about the indexed array in php . now lets jump into associaive array;
$arrayname=["key"=>value,"key"=>value .......]
*/
$associative=["name"=>"Samjhana","rollno"=>1,"address"=>"Biratnagar"];
// echo $associative['name'];

foreach($associative as $data){
    echo $data;
    echo "<br>";
}
?>