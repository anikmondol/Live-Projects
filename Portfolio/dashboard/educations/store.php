<?php

session_start();
include '../../config/database.php';

if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $year = $_POST['year'];
    $ration = $_POST['ration'];

    if (!$title || !$year || !$ration) {
        $_SESSION["create_error"] = "something error try more !!!";
        header("location: educations.php");
    } else {
        if ($title && $year && $ration) {
            if ($ration != "0") {
                $query = "INSERT INTO educations (title,year,ration) VALUES ('$title','$year','$ration')";
                mysqli_query($connect_db, $query);
                $_SESSION["create_done"] = "new educations info create successfully !!!";
                header("location: educations.php");
            }
        }
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM educations WHERE id='$id'";
    mysqli_query($connect_db, $query);
    $_SESSION["delete_done"] = "old educations info  delete successfully !!!";
    header("location: educations.php");
}

if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM educations WHERE id='$status_id'";
    $connect = mysqli_query($connect_db, $select_query);
    $services = mysqli_fetch_assoc($connect);

    if ($services['status'] == 'deactive') {
        $update_query = "UPDATE educations SET status='active' WHERE id='$status_id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["active_status"] = "educations status active successfully complete !!!";
        header("location: educations.php");
    } else {

        $update_query = "UPDATE educations SET status='deactive' WHERE id='$status_id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["deactive_status"] = "educations status deactive successfully complete !!!";
        header("location: educations.php");
    }
}

if (isset($_POST['update'])) {
    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $title = $_POST['title'];
        $year = $_POST['year'];
        $ration = $_POST['ration'];

        $update_query = "UPDATE educations SET title='$title', year='$year', ration='$ration' WHERE id='$id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["create_done"] = "educations info update successfully complete !!!";
        header("location: educations.php");
    }
}
