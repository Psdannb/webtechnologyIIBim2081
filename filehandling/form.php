<?php

// $username = $_GET['username'];
// echo $username;

// print_r($_POST);

// $username = $_POST['username'];
// echo $username;

// die();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // print_r($_POST);
    // die();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = isset($_POST['gender'])?$_POST['gender']:"";
    $country = $_POST['country'];
    echo $phone;
    die();
// form validation starts from here 

    $userlength=strlen($username);
    $phonenumberregexp="/^\d{10}$/";


if(!preg_match("/^[a-zA-Z ]+$/", $username)){
    echo "Username should only have alphabets";
    exit();
}
else if($userlength<3 || $userlength>8){
        echo "Username length should be in between 3 to 8";
        exit();
    }
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Please insert the valid email";
    exit();
}
else if(!preg_match($phonenumberregexp,$phone)){
    echo "Please insert the valid phone number";
}
}
else{
    echo "Please submit the form using POST method.";
}

?>