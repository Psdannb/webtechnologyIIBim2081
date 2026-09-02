<?php
$authorizedUsername = "Dan";
$authorizedPassword = "Nepal@123";

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {

    $submittedUsername = $_SERVER['PHP_AUTH_USER'];
    $submittedPassword = $_SERVER['PHP_AUTH_PW'];

    if ($submittedUsername === $authorizedUsername && $submittedPassword === $authorizedPassword) {
        echo "<h1>Login Successful</h1>";
        echo "<p>Welcome, " . $submittedUsername. "</p>";
        echo "Protected content goes here.";
    } else {
        header('HTTP/1.1 401 Unauthorized');
        die("Invalid username or password.");
    }

} else {
    header('WWW-Authenticate: Basic realm="BIM HTTP authentication example"');
    header('HTTP/1.1 401 Unauthorized');
    die("Please enter your username and password.");
}
?>