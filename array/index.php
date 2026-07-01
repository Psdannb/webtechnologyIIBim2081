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


/*------------------------Array Methods---------------------------*/
//  1. array(): It is used to create an array
 
/* 2. is_array(variable): It is used to check whether a variable is array or not.
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
/*3.  array_push(): This is used to add element/elements at the end of the array
syntax: array_push(arrayname,variable/array);
Example:

$exampleArray=[1,2,3,4];
array_push($exampleArray,"name","rollno");
// print_r($exampleArray);
array_push($exampleArray,["a","b","c"]);
print_r($exampleArray);
*/


/*4.  array_unshift(): This is used to add element/elements at the beginning of the array
syntax: array_unshift(arrayname,variable/array);
Example:

$exampleArray=[1,2,3,4];
// array_unshift($exampleArray,"name","rollno");
// print_r($exampleArray);
array_unshift($exampleArray,["a","b","c"]);
print_r($exampleArray);
*/

/* 5. array_pop() :It used to remove and return the last element of an array.
syntax: array_pop(array);
Example:
$colors = ["Red", "Green", "Blue"];

$removed = array_pop($colors);

echo $removed;
print_r($colors);
*/

/* 6. array_shift() :It is used to remove and return the first element of an array.
syntax: array_shift(array);
Example:


$colors = ["Red", "Green", "Blue"];

$removed = array_shift($colors);

echo $removed;
print_r($colors);
*/
/* 7. array_flip() :It is used to exchange (swap) the keys and values of an array
syntax: array_flip(array);
Example:

$colors = [
    "a" => "Red",
    "b" => "Green",
    "c" => "Blue"
];
// print_r($colors);
$result = array_flip($colors);
print_r($result);
// print_r($colors);
*/


/* 8. array_keys() :It is used to return all the keys of an array.
syntax: array_keys(array);
Example:

$student = [
    "name" => "Ram",
    "age" => 20,
    "city" => "Pokhara",
    "xyz"=>200
];

$result = array_keys($student);

print_r($result);
*/


/*9. array_merge() :It is used to combine two or more arrays into a single array..
syntax: array_merge(array1, array2, ...);
Example:

$arr1 = ["Red", "Green"];
$arr2 = ["Blue", "Yellow"];

$result = array_merge($arr1, $arr2,["a","b","c"],$arr1);

print_r($result);
eExample 2:
$arr1 = ["name"=>"Ram","age"=>20];
$arr2 = ["name"=>"Shyam","age"=>25];

$result = array_merge($arr2, $arr1);

print_r($result);
*/

/*10. array_merge_recursive() :It is used to merge two or more arrays recursively.
 If two arrays have the same string key, their values are merged into an array instead of overwriting each other.
syntax: array_merge_recursive(array1, array2, ...);
Example:

$arr1 = [
    "name" => "Ram",
    "age" => 20
];

$arr2 = [
    "name" => "Shyam",
    "faculty" => "Science"
];

$result = array_merge_recursive($arr1, $arr2);

print_r($result);
*/

/*11. array_rand() :It is used to select one or more random keys from an array.
syntax: array_rand(array, number);
Here, array → The array from which to select random keys.
number (optional) → Number of random keys to return.
Example:
$colors = ["Red", "Green", "Blue", "Yellow"];

$keys = array_rand($colors, 2);

print_r($keys);
*/


/*12. array_reverse() :It is used to return an array with the elements in reverse order.
syntax: array_reverse(array);

Example:

$colors = ["Red", "Green", "Blue"];

$result = array_reverse($colors);

print_r($result);
*/

/*13. array_search() :It is used to search for a value in an array and return its corresponding key.
If the value is not found, it returns false.
syntax: array_search(value, array);
Example:

$colors = ["Red", "Green", "Blue","Blue"];

// $key = array_search("Blue", $colors);
// echo $key;
$key = array_search("pink", $colors);

var_dump($key); // Output: bool(false) since "pink" is not found in the array

*/

/*14. array_unique() :It is used to remove duplicate values from an array and return a new array containing only unique values.
syntax:array_unique(array);
Example:

$colors = ["Red", "green", "Red", "Blue", "Green"];

$result = array_unique($colors);

print_r($result);

*/
/*15. array_sum() :It is used to calculate and return the sum of all numeric values in an array.
syntax:array_sum(array);
Example:
*/
// $numbers = [10, 20, "Hello", 40];
// echo array_sum($numbers);

$marks=["web"=>80,"dbms"=>90,"economics"=>70];

// echo array_sum($marks);


/*16. array_product() :It is used to calculate and return the product (multiplication) of all numeric values in an array.
syntax:array_product(array);

Example:
$numbers = [2, 3, 4];

echo array_product($numbers);
*/
?>