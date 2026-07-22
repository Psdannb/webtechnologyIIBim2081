<?php
/*
A constructor is a special method in a class that is automatically called whenever an object of the class is created. It is mainly used to initialize the object's properties with values or perform any setup tasks required before the object is used.
# Key Points 
1. The constructor method is named __construct().
2. It is automatically executed when an object is created using the new keyword.
3. It eliminates the need to call a separate initialization method.
4. A class can have only one constructor.
*/
class Student
{
    // Properties (Data Members)
    public $name;
    public $faculty;
    public $semester;

    // Constructor
    // This method is automatically called when an object is created.
    public function __construct($objname, $objfaculty, $objsemester)
    {
        $this->name = $objname;
        $this->faculty = $objfaculty;
        $this->semester =  $objsemester;
        // echo "I am constructor ";
        // echo "<br>";
    }
    

    // Member Method
    public function displayDetails()
    {
        // echo "I am memeber function";
        echo "Student Name : " . $this->name . "<br>";
        echo "Faculty      : " . $this->faculty . "<br>";
        echo "Semester     : " . $this->semester;
    }
}

// Creating an object
$student1 = new Student("Hari", "BIM", "5th");

// Calling member function
// $student1->displayDetails();
$student2=new Student("Sakshyam","BIM","4th");
$student2->displayDetails();
?>