<?php
/*
#***** Traits *****#
A Trait in PHP is a mechanism that allows developers to reuse methods in multiple classes without using inheritance. Traits help overcome the limitation of PHP, which does not support multiple inheritance for classes.
A trait is declared using the trait keyword and included in a class using the use keyword.


#****Characteristics of Traits***#
1.Declared using the trait keyword.
2. Included in a class using the use keyword.
3. Can contain methods and properties.
4.Cannot create objects of a trait.
5. Used to reuse methods in multiple classes.
6. A class can use one or more traits.

syntax:
trait TraitName
{
//properties
// Methods
}

class ClassName
{
    use TraitName;
}


*/
trait greet{
    public $test="this is a test";
    public function sayHello($name){
        echo "Hello $name";
        echo "<br>";
        echo "$this->test";
    }
}

trait greeet1{
    public function bye(){
        echo "thank you for visiting";
    }
}
class Person{
    use greet;
    use greeet1;


}
class person2{
     use greet;
}
$obj=new person();
// $obj->sayHello("John");
// $obj->bye();


$obj2=new person2();
// $obj2->test="this is a test";
$obj2->sayHello("Ram");

?>