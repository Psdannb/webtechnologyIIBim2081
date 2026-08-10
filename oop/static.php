<?php
/*
#*** Static Methods and Properties (Static members) ***#
=> A static property is a property that belongs to the class rather than to individual objects. It is declared using the static keyword and is shared among all objects of the class.
syntax:
class Student {
    public static $college = "ABC College";
}

echo Student::$college;

=> A static method is a method that belongs to the class rather than an object. It is declared using the static keyword and can be called without creating an object.
syntax:
class Math {
    public static function square($n) {
        return $n * $n;
    }
}

echo Math::square(5);

Things to remember about the static methods and properties:
1.Declared using the static keyword.
2.Accessed using the scope resolution operator "::". 
3.Objects are not required to access static members.
4.Static properties are shared among all objects.
5.A static method cannot directly use $this.
6. self:: is commonly used to access static members from within the same class.
7. static memebers can be derived to child classes.

Example:
*/

class student {
    public $name;
    public static $college = "ABC College";

    public function normalmethod(){
        echo "I am normal method";
        echo "<br>";
        self::staticmethod();
    }
    public static function staticmethod(){
        echo "I am static method and i am calling my own static properties as: ";
        echo self::$college;
    }

}
$nawaraj =new student();
$nawaraj->name="Nawaraj Adhikari";
// echo $nawaraj->name;
// echo "<br>";
// echo $nawaraj::$college;
// echo student::$college;
//  $nawaraj->normalmethod();
//  echo "<br>";
//  $nawaraj->staticmethod();


// student::staticmethod();
// student::normalmethod();

class derviedstudent extends student{
    public function checkstaticcall(){
        parent::staticmethod();
    }
}
$derviedobj= new derviedstudent();
$derviedobj->checkstaticcall();
?>