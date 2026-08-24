<?php
require_once "dbconnection.php";
$createtablesql="CREATE TABLE IF NOT EXISTS faculty (
id INT PRIMARY KEY AUTO_INCREMENT,
facultyname VARCHAR (10)
)";

$response=mysqli_query($connectionstring,$createtablesql);
if($response){
    echo "Table has been created";
}
else{
    echo "Failed to create a table";
}
?>