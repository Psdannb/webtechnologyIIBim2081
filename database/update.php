<?php
require_once "dbconnection.php";
// $updateSql="UPDATE Tablename SET columnname='newvalue' WHERE PRIMARYKEY";
// $updateSql="UPDATE student SET faculty='BITM' WHERE id='1'";
$updateSql="UPDATE student SET 	studentname='Dan',faculty='Bsc.CSIT' WHERE id='1'";
$response= mysqli_query($connectionstring,$updateSql);
if($response){
    echo "Data has been updated";
}
else{
    echo "failed to update data";
}
?>