<?php
/*
#*** Introduction ***#
In a large PHP application, many classes may be created by different developers or libraries. It is possible that two classes have the same name.
class Student
{
    // College Student
}
and another developer may also create:
class Student
{
    // University Student
}
    If both classes are loaded into the same PHP program, PHP cannot distinguish between them.This problem is called a name conflict.PHP provides namespaces to solve this problem.


    => A namespace in PHP is a mechanism used to organize classes, interfaces, traits, functions, and constants and to prevent naming conflicts between them. A namespace is declared using the namespace keyword.
    syntax: namespace NamespaceName;
    for example:
        namespace College;
Now, any class declared under this namespace belongs to the College namespace.


 Now lets understand this concept through the example below:

*/
include"CollegeStudent.php";
include"UniversityStudent.php";
include "faculty.php";

$collegeStudent = new \College\Student();
$universityStudent = new \University\Student();
$bimstudent=new \University\bim\student();

// $collegeStudent= new Student();

$collegeStudent->display();

echo "<br>";

$universityStudent->display();
echo "<br>";
$bimstudent->display();

?>