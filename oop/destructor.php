<?php
/*
A destructor is a special method in a class that is automatically executed when an object is destroyed or when the PHP script finishes execution. It is mainly used to perform cleanup tasks, such as closing database connections, releasing resources, or closing open files.
#Key Points
1. The destructor method is named __destruct().
2. It is automatically called when an object is destroyed.
3. It does not take any parameters.
4.A class can have only one destructor.
5. It is commonly used to free resources and perform cleanup operations

*/
class Student
{
    public $name;

    // Constructor
    public function __construct($name)
    {
        $this->name = $name;
        echo "Student object for <b>$this->name</b> has been created.<br>";
    }

    // Member Method
    public function study()
    {
        echo "$this->name is studying PHP.<br>";
    }

    // Destructor
    public function __destruct()
    {
        echo "Student object for <b>$this->name</b> has been destroyed.";
    }
}

// Creating an object
$student = new Student("Hari");

// Calling a method
$student->study();

?>