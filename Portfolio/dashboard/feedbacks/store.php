<?php

session_start();
include '../../config/database.php';


if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];

    if (!$title || !$description || !$icon) {
        $_SESSION["create_error"] = "something error try more !!!";
        header("location: feedbacks.php");
    } else {
        if ($title && $description && $icon) {
            $query = "INSERT INTO feedbacks (title,description,icon) VALUES ('$title','$description','$icon')";
            mysqli_query($connect_db, $query);
            $_SESSION["create_done"] = "new service create successfully !!!";
            header("location: feedbacks.php");
        }
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM feedbacks WHERE id='$id'";
    mysqli_query($connect_db, $query);
    $_SESSION["delete_done"] = "old feedback  delete successfully !!!";
    header("location: feedbacks.php");
}



if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM feedbacks WHERE id='$status_id'";
    $connect = mysqli_query($connect_db, $select_query);
    $feedbacks = mysqli_fetch_assoc($connect);

    if ($feedbacks['status'] == 'deactive') {

        $update_query = "UPDATE feedbacks SET status='active' WHERE id='$status_id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["active_status"] = "feedbacks status active successfully complete !!!";
        header("location: feedbacks.php");

       
    } else {
       
        $update_query = "UPDATE feedbacks SET status='deactive' WHERE id='$status_id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["deactive_status"] = "feedbacks status deactive successfully complete !!!";
        header("location: feedbacks.php");
    }
}


if (isset($_POST['update'])) {
    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $icons = $_POST['icon'];

        $update_query = "UPDATE feedbacks SET title='$title', description='$description', icon='$icons' WHERE id='$id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["service_update"] = "feedbacks update successfully complete !!!";
        header("location: feedbacks.php");
        
    }
}


?>
