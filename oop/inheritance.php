<?php
/*
Inheritance is one of the fundamental features of Object-Oriented Programming (OOP). It is the mechanism by which one class (child/derived class) acquires the properties and methods of another class (parent/base class). In PHP, inheritance is implemented using the extends keyword.


###Why Do We Need Inheritance?
Suppose we have two classes: Student and Teacher.
Both have common information like:Name,Address,Phone Number.
Instead of writing the same code in both classes, we can create a Person class containing the common properties. Then, both Student and Teacher can inherit from it.This saves time, reduces code duplication, and makes the program easier to maintain.


Syntax:
class ParentClass
{
    // Properties
    // Methods
}

class ChildClass extends ParentClass
{
    // Additional properties and methods
}

Example:

// Parent Class
class Person
{
    public $name = "Anubhav";

    public function displayName()
    {
        echo "Name: " . $this->name . "<br>";
    }
}

// Child Class
class Student extends Person
{
    public $faculty = "BIM";

    public function displayFaculty()
    {
        echo "Faculty: " . $this->faculty;
    }
}

$student = new Student();

$student->displayName();
$student->displayFaculty();



Types of Inheritance in PHP
1. Single Inheritance: A child class inherits from one parent class.
Example:


class Person
{
    public function introduce()
    {
        echo "I am a person.<br>";
    }
}

class Student extends Person
{
    public function study()
    {
        echo "I study PHP.";
    }
}

$obj = new Student();

$obj->introduce();
$obj->study();

2. Multilevel Inheritance: A class inherits from another child class, forming multiple levels.

class Person
{
    public function introduce()
    {
        echo "I am a person.<br>";
    }
}

class Student extends Person
{
    public function study()
    {
        echo "I am studying.<br>";
    }
}

class Monitor extends Student
{
    public function monitorClass()
    {
        echo "I monitor the class.";
    }
}

$obj = new Monitor();

$obj->introduce();
$obj->study();
$obj->monitorClass();
$obj2= new student();


3. Hierarchical Inheritance:Multiple child classes inherit from the same parent class.
Example:


class Person
{
    public function introduce()
    {
        echo "I am a person.<br>";
    }
}

class Student extends Person
{
    public function study()
    {
        echo "Student studies.<br>";
    }
}

class Teacher extends Person
{
    public function teach()
    {
        echo "Teacher teaches.";
    }
}

$student = new Student();
$teacher = new Teacher();

$student->introduce();
$student->study();

echo "<br>";

$teacher->introduce();
$teacher->teach();




4. Multiple Inheritance (Not Supported Directly): In multiple inheritance, a class inherits from more than one parent class.
PHP does not support multiple inheritance using classes because it can lead to ambiguity (e.g., if both parent classes contain methods with the same name).

Instead, PHP provides Traits to achieve similar functionality.

5. Hybrid Inheritance (Not Supported Directly)
Hybrid inheritance is a combination of two or more inheritance types (for example, hierarchical + multiple inheritance).

PHP does not support hybrid inheritance directly through classes, but similar behavior can be achieved using Traits and Interfaces.


###Advantages of Inheritance
1.Promotes code reusability.
2.Reduces code duplication.
3.Makes programs easier to maintain.
4.Supports code organization.
5.Simplifies extension of existing classes.
6.Improves readability.

###Disadvantages of Inheritance
1.Tight coupling between parent and child classes.
2.Changes in the parent class may affect child classes.
3.Deep inheritance hierarchies can become difficult to understand.
4.Improper use can make programs complex.
*/

?>