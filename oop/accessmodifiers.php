<?php
/*
Access modifiers (also called visibility modifiers) are keywords used to control the accessibility of properties and methods in a class. They determine where a property or method can be accessed from.
PHP provides three access modifiers:
    1. public
    2.private
    3.protected


# Why Do We Need Access Modifiers?
=> Imagine a bank account.
Everyone should not be able to access or modify the account balance directly.Instead,
-Everyone can see the bank name.
-Only the account holder and bank staff can access some information.
-Only the bank itself should modify the balance.
This is exactly what access modifiers do.They provide security by restricting access to class members.


#Types of Access Modifiers
1. Public
A public property or method can be accessed from anywhere.It can be accessed:
-Inside the class
-Outside the class
-By child classes
Example:
class Student
{
    public $name = "Hari";

    public function display()
    {
        echo $this->name;
    }
}

$obj = new Student();

echo $obj->name;
Tip to remember: Public means "Open for Everyone." like "A college notice board"


2. Private
A private property or method can only be accessed inside the same class.
It cannot be accessed:
-Outside the class
-By child classes
Example:
class Student
{
    private $name = "Hari";

    public function show()
    {
        echo $this->name;
    }
}

$obj = new Student();

$obj->show();
here if i try to access the properties outside the class it will not allow me to do so and throws an error
Tip to remember: Private means "Only Me." like "Your ATM PIN."


3.Protected
A protected property or method can be accessed:
-Inside the class
-Inside child classes (inheritance)
But not outside the class.
Example:
class Student
{
    protected $college = "Nihareeka College";

    public function showCollege()
    {
        echo $this->college;
    }
}

class BCA extends Student
{
    public function display()
    {
        echo $this->college;
    }
}

$obj = new BCA();

$obj->display();


Tip to remember : Protected means "Family Only." like "A family photo album-Only family members can see it,Outsiders cannot."
*/

?>