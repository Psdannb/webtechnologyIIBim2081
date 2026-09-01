<?php
//Reading a cookie
// $cookiedata=$_COOKIE["cookie name"];
// print_r($_COOKIE);
// die();
$cookieusernamedata=$_COOKIE["username"];
$cookieroledata=$_COOKIE["role"];
echo "Cookie username is: ".$cookieusernamedata;
echo "<br>";
echo "Cookie role is: ".$cookieroledata;

?>