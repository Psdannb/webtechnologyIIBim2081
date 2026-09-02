<?php
require_once '../database/dbconnection.php';

$submittedUsername = $_SERVER['PHP_AUTH_USER'] ?? null;
$submittedPassword = $_SERVER['PHP_AUTH_PW'] ?? null;

if (isset($submittedUsername) && isset($submittedPassword)) {

    $userLookupSql = "SELECT * FROM authusers WHERE username='$submittedUsername'";
    $userLookupResult = mysqli_query($connectionstring, $userLookupSql);

    if ($userLookupResult->num_rows > 0) {
        $matchedUser = mysqli_fetch_assoc($userLookupResult);
        $storedUsername = $matchedUser['username'];
        $storedPassword = $matchedUser['userpassword'];
        $storedname=$matchedUser['Name'];

        if ($submittedUsername === $storedUsername && $submittedPassword === $storedPassword) {
            echo "<h1>Login Successful</h1>";
            echo "<p>Welcome back, " . $storedname . "!</p>";
            echo "Protected content goes here.";
        } else {
            header('HTTP/1.1 401 Unauthorized');
            die("Incorrect password. Please try again.");
        }
    } else {
        header('HTTP/1.1 401 Unauthorized');
        die("No account found with that username.");
    }

} else {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.1 401 Unauthorized');
    die("Please enter your username and password to continue.");
}
?>