<?php
/*
Object-Oriented Programming (OOP) is a programming paradigm that organizes a program into objects rather than functions and logic. An object is an instance of a class that contains both data (properties) and functions (methods).

In PHP, OOP helps developers create modular, reusable, secure, and maintainable applications.
----
#Difference Between Procedural Programming and OOP

| Procedural Programming               | Object-Oriented Programming                  |
| ------------------------------------ | -------------------------------------------- |
| Program is divided into functions    | Program is divided into classes and objects  |
| Less secure                          | More secure                                  |
| Code reuse is limited                | High code reusability                        |
| Difficult to maintain large programs | Easy to maintain large applications          |
| Data and functions are separate      | Data and functions are combined into objects |

#Advantages of OOP
1.Promotes code reusability.
2. Makes programs modular and organized
3.Improves security through encapsulation and data hiding.
4. Simplifies maintenance and debugging.
5. Reduces code duplication through inheritance.
6. Supports scalable and flexible application development.


# Disadvantages of OOP
1. OOP is more complex than procedural programming.
2. It has a steep learning curve for beginners.
3. It requires more memory due to object creation.
4. Programs may execute slightly slower because of object management.
5. Development takes more time due to class and object design.
6. It is not suitable for very small applications.

#Features of Object-Oriented Programming (OOP)
Object-Oriented Programming (OOP) has several important features that make software development easier, more secure, and reusable.
1. Class
A class is a blueprint or template used to create objects. It defines the properties (variables) and methods (functions) that an object will have.
syntax:
class ClassName
{
    // Properties
    // Methods
}
Example:

class Students
{
    public $name;

    public function display()
    {
        echo "Welcome to PHP OOP";
    }
}

2. Object
An object is an instance of a class. It is created using the new keyword and can access the properties and methods of the class.
syntax: $objname=new classname();
Example: 
$student = new Students();
$student->display();
*/
/*
$this keyword:
The $this keyword in PHP is a special variable that refers to the current object. It is used inside a class to access the properties (variables) and methods (functions) of the current object.

Example:

class introduction{
    //properties
    public $name;
    public $subject;
    // methods 
 public function greet(){
    echo "Hello guys, I am $this->name and i will be teaching $this->subject";
 }
}

$obj=new introduction();
$obj->name="Dan Bahadur Adhikari";
$obj->subject="Web Technology";
$obj->greet();

$obj2= new introduction();
$obj2->name="Jiwan Dhamala";
$obj2->subject="Account";
// $obj2->greet();

*/

?>