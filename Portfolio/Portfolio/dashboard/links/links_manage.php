<?php

include "../../config/database.php";

session_start();

if (isset($_POST['link_btn'])) {
    $id = $_SESSION['auth_id'];
    $facebook = $_POST['facebook'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    $whatsapp = $_POST['whatsapp'];

    $query = "INSERT INTO links (user_id,facebook,github,linkedin,whatsapp) VALUES ('$id','$facebook','$github','$linkedin','$whatsapp')";
    $_SESSION["link_update"] = "link update senseful !!!";
    mysqli_query($connect_db, $query);
    header("location: links.php");
}
