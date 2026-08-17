<?php
/*
#*** Custom Exception Handling **#
A custom exception is a user-defined exception class created by the programmer for handling specific types of errors or exceptional situations in an application.


syntax: 
class MyException extends Exception
{
    // Custom exception code
}

Example: Suppose we want to check whether a student is eligible for admission.

*/
class AgeException extends Exception
{
    public function showMessage()
    {
        return "Invalid age entered.";
    }

}

$age = 15;

try {

    if ($age < 18) {
        throw new AgeException("Age must be 18 or above.");
    }
    echo "You are all good";

}
catch (AgeException $e) {

    echo $e->showMessage() . "<br>";
    echo $e->getMessage(). "<br>";
    echo $e->errormessage();

}




?>