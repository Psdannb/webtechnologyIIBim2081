<?php
/*
Variable handling functions are built-in PHP functions used to create, examine, modify, convert, display, and destroy variables. These functions help programmers check the existence, type, value, and state of variables during program execution
*/
/*
1.empty():
The empty() function checks whether a variable is empty. It returns true if the variable does not exist or contains an empty value such as "", 0, "0", NULL, FALSE, or an empty array.
syntax: empty(variable);
Example: 
$name = "";
if (empty($name)) {
    echo "Variable is empty";
} else {
    echo "Variable is not empty";
}

output:Variable is empty
*/


/*
2.gettype():
The gettype() function returns the data type of a variable.
syntax: gettype(variable);
Example: 
$x = 100;
echo gettype($x);
    
output:integer
*/


/*
3.intval():
The intval() function converts a variable to an integer.
syntax: intval(variable);
Example: 
$x = "150.75";
echo intval($x);
    
Output:150
*/



/*
4. is_null()
The is_null() function checks whether a variable contains the value NULL.
syntax: is_null(variable);
Example: 
$x = NULL;
if(is_null($x))
{
    echo "Variable is NULL";
}
else
{
    echo "Variable is not NULL";
}
    
Output:Variable is NULL
*/

  


/*
5. isset()
The isset() function checks whether a variable is declared and not NULL. It returns true if the variable exists and has a value other than NULL.
syntax: isset(variable);
Example: 
$name = "Ram";

if(isset($name))
{
    echo "Variable is set";
}
    else{
    echo "The variable is NULL";
}
    
Output:Variable is set
*/


/*
6. print_r()
The print_r() function displays human-readable information about a variable, especially arrays and objects.
syntax: print_r(variable);
Example: 
$colors = ["Red","Green","Blue"];

print_r($colors);
    
Output:Array ( [0] => Red [1] => Green [2] => Blue )
*/

/*
7. serialize()
The serialize() function converts a PHP variable or array into a storable string representation.
syntax: serialize(variable);
Example: 
$student = [
    "name"=>"Ram",
    "age"=>20
];

$data = serialize($student);

echo $data;
    
Output:   a:2:{s:4:"name";s:3:"Ram";s:3:"age";i:20;}
*/

    

/*
8. unserialize()
The unserialize() function converts a serialized string back into its original PHP variable or array.
syntax: unserialize(string);
Example: 

$data = 'a:2:{s:4:"name";s:3:"Ram";s:3:"age";i:20;}';

$result = unserialize($data);

print_r($result);
    
Output: Array ( [name] => Ram [age] => 20 )
*/

/*
9. unset()
The unset() function destroys a variable and frees the memory occupied by it.
syntax: unset(variable);
Example: 
$name = "Ram";
unset($name);
echo isset($name);
    
Output:
*/
/*
10. var_dump()
The var_dump() function displays detailed information about a variable, including its data type, length, and value.
syntax: var_dump(variable);
Example: 
$x = 100;

var_dump($x);
    
Output:int(100)
*/


/*QN: What is the difference between print_r() and var_dump() */
?>