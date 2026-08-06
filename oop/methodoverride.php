<?php
/*
#***** Method Overriding ****#
Method Overriding is an Object-Oriented Programming (OOP) feature in which a child class provides its own implementation of a method that is already defined in its parent class. The child class method must have the same name and compatible parameters as the parent class method.
syntax:
class ParentClass
{
    public function methodName()
    {
        // Parent implementation
    }
}

class ChildClass extends ParentClass
{
    public function methodName()
    {
        // Child implementation
    }
}

#**** Rules for Method Overriding ***#
1. The child class must inherit from the parent class.
2.The method name must be the same.
3. The method should have a compatible parameter list.
4. The child method cannot reduce the visibility of the parent method.
Note:
 public → must remain public
protected → can remain protected or become public.
Example:

example:1
*/
class parentclass{
    public function display(){
        echo "This is the parent class method.<br>";
    }
}
class child extends parentclass{
    public function display(){
        echo "This is the child class method.<br>";
    }
}
$childobj=new child();
// $childobj->display();

$parentobj=new parentclass();
// $parentobj->display();

//example 2:
class parentsum{
    public function sum($a,$b){
        echo "The sum of two numbers in parent: ".($a+$b)."<br>";
    }
}
class childsum extends parentsum{
    public function sum($a,$b){
        echo "The sum of two numbers in child: ".($a+$b)."<br>";
        // parent::sum(2,4);
    }
    public function callyourself(){
        self::sum(5,100);
    }
}
$childsumobj=new childsum();
// $childsumobj->sum(5,10);
$childsumobj->callyourself();
?>