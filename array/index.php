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
    // echo $data;
    // echo "<br>";
}
/*fetching assiciative array both keys and value using foreach loop */
foreach($associative as $key=>$value){
    // echo $key ;
    // echo "<br>";
    // echo $value;
    //     echo "<br>";
    // if($key=="name"){
    //     echo $value;
    // }
}



/*Multidimensional Array: A multidimensional array is an array that contains one or more arrays as its elements. It is used to store data in a tabular form, such as rows and columns. 
// $multiIndexArray=[1,2,3,5,6,7,8];
$nawarajhierarchy=[["name","rollnumber","faculty"],["Nawaraj",1,"BIm"],["nawarani",2,"BITM"]];
// print_r($nawarajhierarchy);
// echo $nawarajhierarchy[2][0];

?>
<table border="1" style="color:Red">
    <?php
foreach($nawarajhierarchy as $datas){
    ?>
    <tr>
        <?php
    foreach($datas as $data){
        // echo $data;
// echo "<br>";
        ?>
        <td><?php  echo $data; ?></td>
        <?php
    }
    ?>
    </tr>
    <?php
}
?>
</table>
<?php
*/


/*Array Methods
 1. array(): It is used to create an array
 
 2. is_array(variable): It is used to check whether a variable is array or not.
 Example:

$exampleArray=[1,2,3,4];
$normalvariable=5;
// print_r(is_array($exampleArray));
if(is_array($normalvariable)){
    echo "This is an array";
}
else{
    echo "This is not an array";
}
*/
/*  array_push(): This is used to add element/elements at the end of the array
syntax: array_push(arrayname,variable/array);
Example:

$exampleArray=[1,2,3,4];
array_push($exampleArray,"name","rollno");
// print_r($exampleArray);
array_push($exampleArray,["a","b","c"]);
print_r($exampleArray);
*/


/*  array_unshift(): This is used to add element/elements at the beginning of the array
syntax: array_unshift(arrayname,variable/array);
Example:

$exampleArray=[1,2,3,4];
// array_unshift($exampleArray,"name","rollno");
// print_r($exampleArray);
array_unshift($exampleArray,["a","b","c"]);
print_r($exampleArray);
*/

?>