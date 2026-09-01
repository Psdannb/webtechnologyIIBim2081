<?php
session_start();
// deleting a session variable
/*
unset($_SESSION['username']); // Remove specific session variable
*/
session_destroy(); // Destroy the session
?>