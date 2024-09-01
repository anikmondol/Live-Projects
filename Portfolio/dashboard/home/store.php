<?php

session_start();
include '../../config/database.php';





if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM users WHERE id='$status_id'";
    $connect = mysqli_query($connect_db, $select_query);
    $portfolios = mysqli_fetch_assoc($connect);

    if ($portfolios['status'] == 'deactive') {

        $update_query = "UPDATE users SET status='active' WHERE id='$status_id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["active_status"] = "users status active successfully complete !!!";
        header("location: home.php");

       
    } else {
       
        $update_query = "UPDATE users SET status='deactive' WHERE id='$status_id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["deactive_status"] = "users status deactive successfully complete !!!";
        header("location: home.php");
    }
}











?>