<?php

session_start();


if (isset($_POST["submit_btn"])) {
    
    $flag = false;


    // email validation 
    $email = $_POST["email"];

    // email regex 
    $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';




    if (!$email) {
        $_SESSION["email_error"] = "Email Field is Required !!!";
        $flag = true;
        header("location: login.php");
    } elseif (!preg_match($email_regex, $email)) {
        $_SESSION["email_error"] = "Invalid email provide!!!";
        $flag = true;
        header("location: login.php");
    }




    // password validation

    $password = $_POST["password"];


    // email regex 
    $password_regex_length = '/^(?=\S{8,})/';
    $password_regex_uppercase = '/^(?=\S*[A-Z])/';
    $password_regex_lowercase = '/^(?=\S*[a-z])/';
    $password_regex_number = '/^(?=\S*[\d])/';
    $password_regex_special = '/^(?=\S*[\W])/';


    if (!$password) {
        $_SESSION['password_error'] = "Password Field is Required!!";
        $flag = true;
        header("location: login.php");
    } else if (!preg_match($password_regex_length, $password)) {
        $_SESSION['password_error'] = "Password must be minimum 8 characters length!!";
        $flag = true;
        header("location: login.php");
    } else if (!preg_match($password_regex_uppercase, $password)) {
        $_SESSION['password_error'] = "Password must be at least one uppercase letter!!";
        $flag = true;
        header("location: login.php");
    } else if (!preg_match($password_regex_lowercase, $password)) {
        $_SESSION['password_error'] = "Password must be at least one lowercase letter!!";
        $flag = true;
        header("location: login.php");
    } else if (!preg_match($password_regex_number, $password)) {
        $_SESSION['password_error'] = "Password must be at least one number!!";
        $flag = true;
        header("location: login.php");
    } else if (!preg_match($password_regex_special, $password)) {
        $_SESSION['password_error'] = "Password must be have one special character!!";
        $flag = true;
        header("location: login.php");
    }



    if ($flag) {
        echo "khrap";
    } else {
       
      echo "valo na";
    }

}





?>