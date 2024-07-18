<?php

session_start();


if(isset($_POST["submit_btn"])){

    
// name validation 
$username = $_POST["username"];



if(!$username){
    $_SESSION["name_error"] = "Name Field is Required !!!";
    header("location: register.php");
}



}








?>