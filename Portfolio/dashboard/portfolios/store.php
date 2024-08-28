<?php

session_start();
include '../../config/database.php';


if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];


    $image = $_FILES['image']['name'];
    $tmp_img = $_FILES['image']['tmp_name'];

   if (!$image && !$subtitle && !$title && !$description) {
    $_SESSION['port_error'] = "Image Field is Required!!";
    header("location: portfolio.php");
   }else{
    if ($image && $subtitle && $title && $description) {
        $explode = explode('.', $image);
        $extension = end($explode);
        $custom_name_img = $_SESSION['auth_id'].'-'.$title.'-'.date("d-m-Y").".".$extension;
        $local_path = "../../public/portfolio/".$custom_name_img;

        if (move_uploaded_file($tmp_img, $local_path)) {

            $query = "INSERT INTO portfolios (title,subtitle,description,image) VALUES ('$title','$subtitle','$description','$custom_name_img')";
            mysqli_query($connect_db, $query);
            $_SESSION["port_create"] = "new portfolio create successfully !!!";
            header("location: portfolio.php");
        }else {
            $_SESSION["port_error"] = "something error !!!";
            header("location: portfolio.php");
        }
    }
   }

}