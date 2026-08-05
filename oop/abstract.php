<?php
/*

## Abstract Class
An abstract class is a special type of class that cannot be instantiated (cannot create objects directly). It is designed to act as a base class from which other classes inherit. An abstract class may contain both abstract methods (without implementation) and regular methods (with implementation). 

Characteristics of Abstract Classes:
1.They are declared using the abstract keyword.
2. Abstract classes cannot be instantiated.
3.If a class contains one abstract method,the entire class must be abstract.
4.Child classes must implement every abstract method.

syntax:
abstract class ClassName
{
    abstract public function methodName();

    public function normalMethod()
    {
        // Code
    }
}

Example: 

abstract class Shape
{
    abstract public function area();

    public function display()
    {
        echo "Calculating Area...<br>";
    }
}

class Rectangle extends Shape
{
    private $length = 10;
    private $breadth = 5;

    public function area()
    {
        echo "Area = " . ($this->length * $this->breadth);
    }
}

$obj = new Rectangle();

$obj->display();
$obj->area();



Question: What is the difference between normal class and an abstract class in PHP?
*/

?>