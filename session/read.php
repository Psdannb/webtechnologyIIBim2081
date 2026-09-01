<?php
session_start();
// Read a session variable
if(isset($_SESSION['username'])) {
    echo "Username: " . $_SESSION['username'];
} else {
    echo "No session variable set for username.";
}

?>