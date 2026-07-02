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

$numbers = [10, 20, "Hello", 40];
// echo array_sum($numbers);

$marks=["web"=>80,"dbms"=>90,"economics"=>70];

echo array_sum($marks);
*/

/*16. array_product() :It is used to calculate and return the product (multiplication) of all numeric values in an array.
syntax:array_product(array);

Example:
$numbers = [2, 3, 4];

echo array_product($numbers);


/*17. array_values() :It is used to return all the values of an array and reindex them with numeric keys starting from 0
syntax:array_values(array);

Example:
$student = [
    "name" => "Ram",
    "age" => 20,
    "city" => "Pokhara"
];

$result = array_values($student);

print_r($result);
*/



/*18. array_walk() :It is used to apply a user-defined function to each element of an array.
syntax:array_walk(array, callback_function);
Here,callback_function → A function that will be called for each array element.

Example:
$numbers = [1, 2, 3];

function square(&$value, $key)
{
    $value = $value * $value;
}

array_walk($numbers, "square");

print_r($numbers)
*/

/*19 sort():It is used to sort an array in ascending order based on its values.
syntax:sort(array);

Example:
$numbers = [40, 10, 30, 20];

sort($numbers);

print_r($numbers);
*/
/*20 rsort():It is used to sort an array in descending order based on its values.
syntax:rsort(array);

Example:
$numbers = [40, 10, 30, 20];

rsort($numbers);

print_r($numbers);
*/
/*21 arsort():It is used to sort an associative array in descending order according to its values while preserving the keys.
syntax:arsort(array);

Example:
$marks = [
    "Ram" => 80,
    "Shyam" => 95,
    "Hari" => 70
];

arsort($marks);

print_r($marks);
*/

/*22 asort():It is used to sort an associative array in ascending order according to its values while preserving the keys.
syntax:asort(array);

Example:

$marks = [
    "Ram" => 80,
    "Shyam" => 95,
    "Hari" => 70
];

asort($marks);

print_r($marks);
*/

/*23 krsort():It is used to sort an associative array in descending order according to its keys while preserving the key-value association.
syntax:krsort(array);
Example:

$student = [
    
    "city" => "Pokhara",
    "name" => "Ram",
    "age" => 20
];

krsort($student);

print_r($student);
*/


/*24 ksort():It is used to sort an associative array in ascending order according to its keys while preserving the key-value association.
syntax:ksort(array);
Example:

$student = [
    "name" => "Ram",
    "city" => "Pokhara",
    "age" => 20
];

ksort($student);

print_r($student);
*/


/*25 count():It is used to count the number of elements in an array. It can also count properties in certain objects.
syntax:count(array);
Example:

$colors = ["Red", "Green", "Blue","yellow"];

echo count($colors);

*/
/*26 extract():It is used to import array keys as variable names and assign their corresponding values to those variables.
syntax:extract(array);
Example:

$student = [
    "nickname" => "Ramu",
    "age" => 20,
    "city" => "Pokhara"
];

extract($student);

echo $nickname . "<br>";
// echo $age . "<br>";
// echo $city;
*/

/*27 in_array():It is used to check whether a specific value exists in an array.
syntax:in_array(value, array);
Example:

$colors = ["Red", "Green", "Blue"];
$result = in_array("green", $colors);
var_dump($result); // Output: bool(true) since "Green" is found in the

// if (in_array("Green", $colors)) {
//     echo "Value found";
// } else {
//     echo "Value not found";
// }
*/

/*28 list():It is used to assign values from an indexed array to multiple variables in a single statement.
syntax:list($var1, $var2, $var3) = array;
Example:

$student = ["Ram", 20, "Pokhara"];

list($name, $age, $city) = $student;

echo $name . "<br>";
echo $age . "<br>";
echo $city;
*/

/*29 range():It is used to create an array containing a range of elements. The elements can be numbers or letters.
syntax:range(start, end, step);
Here :
start → Starting value.
end → Ending value.
step (optional) → Increment between values (default is 1).
Example:

// $numbers = range(1, 50);
// $numbers=range("a","z");
// $numbers = range(1, 50,5);
$numbers=range("a","z",2);
print_r($numbers);

*/

/*30 sizeof():It is used to count the number of elements in an array.
syntax:sizeof(array);
Here :

$colors = ["Red", "Green", "Blue"];

echo sizeof($colors);
*/

/*31 array_rand(): It is used to pick one or more random keys from an array. */
$colors = ["Red", "Green", "Blue"];

$randomKey = array_rand($colors,2);
print_r($randomKey); 
?>