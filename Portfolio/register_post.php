<?php

session_start();

require"./config/database.php";


if (isset($_POST["submit_btn"])) {


    $flag = false;


    // name validation 
    $username = $_POST["username"];
    $username = trim($username);
    $username = preg_replace('/\s+/', ' ', $username);
    $username = str_replace(' ', '', $username);


    if (!$username) {
        $_SESSION["name_error"] = "Name Field is Required !!!";
        $flag = true;
        header("location: register.php");
    } elseif (!ctype_alpha($username)) {
        $_SESSION["name_error"] = "We can't use any numerical character!!!";
        $flag = true;
        header("location: register.php");
    } elseif (strlen($username) >= 30) {
        $_SESSION["name_error"] = "We can't use length 30 grater than!!!";
        $flag = true;
        header("location: register.php");
    }else{
        $_SESSION["old_name"] = $username;
        header("location: register.php");
    }


    // email validation 
    $email = $_POST["email"];

    // email regex 
    $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';




    if (!$email) {
        $_SESSION["email_error"] = "Email Field is Required !!!";
        $flag = true;
        header("location: register.php");
    } elseif (!preg_match($email_regex, $email)) {
        $_SESSION["email_error"] = "Invalid email provide!!!";
        $flag = true;
        header("location: register.php");
    }else{
        $_SESSION["old_email"] = $email;
        header("location: register.php");
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
        header("location: register.php");
    } else if (!preg_match($password_regex_length, $password)) {
        $_SESSION['password_error'] = "Password must be minimum 8 characters length!!";
        $flag = true;
        header("location: register.php");
    } else if (!preg_match($password_regex_uppercase, $password)) {
        $_SESSION['password_error'] = "Password must be at least one uppercase letter!!";
        $flag = true;
        header("location: register.php");
    } else if (!preg_match($password_regex_lowercase, $password)) {
        $_SESSION['password_error'] = "Password must be at least one lowercase letter!!";
        $flag = true;
        header("location: register.php");
    } else if (!preg_match($password_regex_number, $password)) {
        $_SESSION['password_error'] = "Password must be at least one number!!";
        $flag = true;
        header("location: register.php");
    } else if (!preg_match($password_regex_special, $password)) {
        $_SESSION['password_error'] = "Password must be have one special character!!";
        $flag = true;
        header("location: register.php");
    }else{
        $_SESSION["old_password"] = $password;
        header("location: register.php");
    }




    // Confirm Password validation

    $c_password = $_POST["confirm_password"];


    if (!$c_password) {
        $_SESSION['c_password_error'] = "Password Field is Required!!";
        $flag = true;
        header("location: register.php");
    } elseif ($c_password != $password) {
        $_SESSION['c_password_error'] = "Confirm password credentials doesn't match !!";
        $flag = true;
        header("location: register.php");
    }


    if ($flag) {
        echo "khrap";
    } else {
        $encrypted_pass = sha1($password);
        $insert_data = "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$encrypted_pass')";
        mysqli_query($connect_db, $insert_data);
        $_SESSION['successful'] = "Register Successful!!";
        $_SESSION['successful_email'] = "$email";
        $_SESSION['successful_password'] = "$password";
        header("location: login.php");
    }
}
