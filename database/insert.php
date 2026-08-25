<?php
require_once "dbconnection.php";
// $inserSql="INSERT INTO TABLENAME (database columns)VALUES(values to store in those columns)";
// $insertsql="INSERT INTO student(studentname,faculty,studentphonenumber)VALUES('Samana','BIM','9802202467')";

// $stname="Anubhav";
// $stfaculty="BIM";
// $stnumber="9800000000";

if($_SERVER['REQUEST_METHOD']=="POST"){
    // print_r($_POST);
    // die();
    $stname=$_POST['studentname'];
$stfaculty=$_POST['studentfaculty'];
$stnumber=$_POST['studentnumber'];
//validate the data here
    $insertsql="INSERT INTO student(studentname,faculty,studentphonenumber)VALUES('$stname','$stfaculty','$stnumber')";
$response=mysqli_query($connectionstring,$insertsql);
if($response){
    echo "Data inserted sucessfully";
}
else{
    echo "Failed to insert data";
}
}

?>