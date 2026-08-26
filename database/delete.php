<?php
require_once "dbconnection.php";
//$deletesql="DELETE FROM TABLENAME WHERE PRIMARY KEY";
$deletesql="DELETE FROM student WHERE id='1'";
$response= mysqli_query($connectionstring,$deletesql);
if($response){
    echo "Data has been deleted";
}
else{
    echo "failed to delete data";
}
?>