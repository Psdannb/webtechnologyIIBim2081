<?php
/*
#*** Exceptionhandling***#
Exception handling is a mechanism in PHP used to detect and handle runtime errors or exceptional situations so that the program can respond gracefully instead of terminating unexpectedly.
While executing a PHP program, unexpected situations may occur, such as:
- Trying to divide a number by zero
-Accessing an invalid file
-Connecting to an unavailable service
-Providing invalid input
-Performing an operation that cannot be completed
Such situations can interrupt the normal execution of a program.Exception handling provides a structured way to detect, handle, and respond to these exceptional situations without abruptly terminating the application


PHP mainly uses the following keywords for exception handling:
try
catch
throw
finally
 
The general syntax is:
try {
    // Code that may cause an exception
}
catch (Exception $e) {
    // Code to handle the exception
}
finally {
    // Code that always executes
}


1.try : The try block contains code that may generate an exception.
example :
 try {
    // Risky code
}
If an exception occurs inside the try block, PHP looks for a suitable catch block.

2. throw: The throw keyword is used to manually generate an exception.
    syntax: throw new Exception("Error message");
    Example: throw new Exception("Something went wrong.");
3. catch: The catch block is used to handle an exception generated inside the try block.
Example: catch (Exception $e) {
    echo $e->getMessage();
}
    Here $e (exception object)contains information about the exception and these can be accessed using the methods like
    i. getMessage(): Returns the error message associated with the exception.
    ii. getCode(): Returns the error/exception code.
    iii. getFile() : Returns the name/path of the file where the exception was generated.
    iv.getLine(): Returns the line number where the exception was generated.
4. finally : The finally block contains code that should execute whether an exception occurs or not.
Example :
finally {
    echo "Program completed.";
}
It is commonly used for cleanup operations such as:
    -Closing files
    -Closing database connections
    -Releasing resources



 Example 1:

try {

    throw new Exception("Something went wrong.","101");

}
catch (Exception $e) {

    echo "Error: " . $e->getMessage();
    echo "<br>";
    echo "Error code: ".$e->getCode();
    echo "<br>";
    echo "Error occured in file :". $e->getFile();
    echo "<br>";
    echo "Error occured in line number :". $e->getLine();
     echo "<br>";
}
finally{
    echo "I am clean up code";
}
     */

/*
Example -2

try {

    echo "Program started.<br>";

    throw new Exception("An error occurred.");

    echo "This line will not execute.<br>";

}
catch (Exception $e) {

    echo "Error: " . $e->getMessage() . "<br>";

}
finally {

    echo "Finally block executed.";

}
    */
/*
Example-3


$age = 19;

try {

    if ($age < 18) {
        throw new Exception("Age must be 18 or above.");
    }

    echo "You are eligible.";

}
catch (Exception $e) {

    echo "Error: " . $e->getMessage();

}
*/
/*
example-4
$a=5;
$b=1;
try{
if($b==0){
    throw new Exception ("Divide by zero is not possible");
}
$c=$a/$b;
echo "The result is :".$c;
}
catch(Exception $excp){
    echo "Error : ". $excp->getMessage();
}
/*

/* exception handling using function 
*/
function sum($a,$b){
if($b==0){
    throw new Exception ("Divide by zero is not possible");
}
$c=$a/$b;
echo "The result is :".$c;

}
try{
    sum(2,5);
}
catch(Exception $xyz){
    echo "Error: ".$xyz->getMessage();
}

?>