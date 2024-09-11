<?php

session_start();
include '../../config/database.php';

if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];

    $image = $_FILES['image']['name'];
    $tmp_img = $_FILES['image']['tmp_name'];

    if (!$image || !$subtitle || !$title || !$description) {
        $_SESSION['port_error'] = "Image Field is Required!!";
        header("location: testimonials.php");
    } else {
        if ($image && $subtitle && $title && $description) {
            $explode = explode('.', $image);
            $extension = end($explode);
            $custom_name_img = $_SESSION['auth_id'] . '-' . $title . '-' . date("d-m-Y") . "." . $extension;
            $local_path = "../../public/testimonials/" . $custom_name_img;

            if (move_uploaded_file($tmp_img, $local_path)) {

                $query = "INSERT INTO testimonials (title,subtitle,description,image) VALUES ('$title','$subtitle','$description','$custom_name_img')";
                mysqli_query($connect_db, $query);
                $_SESSION["port_create"] = "new testimonials create successfully !!!";
                header("location: testimonials.php");
            } else {
                $_SESSION["port_error"] = "something error !!!";
                header("location: testimonials.php");
            }
        }
    }
}


if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM testimonials WHERE id='$status_id'";
    $connect = mysqli_query($connect_db, $select_query);
    $testimonials = mysqli_fetch_assoc($connect);

    if ($testimonials['status'] == 'deactive') {

        $update_query = "UPDATE testimonials SET status='active' WHERE id='$status_id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["active_status"] = "testimonials status active successfully complete !!!";
        header("location: testimonials.php");
    } else {
        $update_query = "UPDATE testimonials SET status='deactive' WHERE id='$status_id'";
        mysqli_query($connect_db, $update_query);
        $_SESSION["deactive_status"] = "testimonials status deactive successfully complete !!!";
        header("location: testimonials.php");
    }
}


if (isset($_POST['update'])) {
    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];

        $image = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];

        if ($image && $subtitle && $title && $description) {
            $select_port = "SELECT * FROM testimonials WHERE id='$id'";
            $connectdb = mysqli_query($connect_db, $select_port);
            $port = mysqli_fetch_assoc($connectdb);

            if ($port['image']) {
                $old_img = $port['image'];
                $old_path = "../../public/testimonials/" . $old_img;

                if (file_exists($old_path)) {
                    unlink($old_path);
                }
            }
            $explode = explode('.', $image);
            $extension = end($explode);
            $custom_name_img = $_SESSION['auth_id'] . '-' . $title . '-' . date("d-m-Y") . "." . $extension;
            $local_path = "../../public/testimonials/" . $custom_name_img;

            if (move_uploaded_file($tmp_img, $local_path)) {

                $query = "UPDATE testimonials SET title='$title',subtitle='$subtitle',description='$description',image='$custom_name_img' WHERE id='$id'";
                mysqli_query($connect_db, $query);
                $_SESSION['port_create'] = "testimonials update successfully complete";
                header('location: testimonials.php');
            }
        } else {
            $query = "UPDATE testimonials SET title='$title',subtitle='$subtitle',description='$description' WHERE id='$id'";
            mysqli_query($connect_db, $query);
            $_SESSION['port_create'] = "testimonials update successfully complete";
            header('location: testimonials.php');
        }
    }
}




if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];

    $select_port = "SELECT * FROM testimonials WHERE id='$id'";
    $connectdb = mysqli_query($connect_db, $select_port);
    $port = mysqli_fetch_assoc($connectdb);

    if ($port['image']) {
        $old_img = $port['image'];
        $old_path = "../../public/testimonials/" . $old_img;

        if (file_exists($old_path)) {
            unlink($old_path);
        }

        $query = "DELETE FROM testimonials WHERE id='$id'";
        mysqli_query($connect_db, $query);
        $_SESSION["delete_done"] = "testimonials delete successful !!!";
        header("location: testimonials.php");
    }
}
