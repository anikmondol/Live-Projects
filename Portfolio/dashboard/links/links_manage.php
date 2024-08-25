<?php

include"../../config/database.php";

session_start();

if (isset($_POST['link_btn'])) {
    $id = $_SESSION['auth_id'];
    $facebook = $_POST['facebook'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    $whatsapp = $_POST['whatsapp'];


    $query = "INSERT INTO links (user_id,facebook,github,linkedin,whatsapp) VALUES ('$id','$facebook','$github','$linkedin','$whatsapp')";
    $_SESSION["link_update"] = "link something try more!!!";
    mysqli_query($connect_db, $query);
    header("location: links.php");



    // if (!$facebook && !$github && !$linkedin && !$whatsapp) {
    //     $_SESSION["link_error"] = "link something try more  !!!";
    //     header("location: links.php");
    // } else {
    //     if ($facebook && $github && $linkedin && $whatsapp) {
           
    //     }else{
    //         $_SESSION["link_error"] = "something try more  !!!";
    //         header("location: links.php");
    //     }
    // }
    

}

?>