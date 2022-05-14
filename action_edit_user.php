<?php
require_once "backend/conect.php";
session_start();
if (isset($_POST['edit_user'])) {
    $first_name = $_POST['username'];
    $last_name = $_POST['firtsname'];
    $email = $_SESSION['user_login']['email'];


    $phone = intval($_POST['number']);
    $password = $_POST['password'];

    $query_edit_data = "UPDATE users SET `firstname`='$first_name',`lastname`='$last_name',`phone`='$phone',`password`='$password' WHERE `email`='$email'";

    $edit = $conn->query($query_edit_data);
    if ($edit) {
        $_SESSION['user_login'] =  ["username"=>$first_name .' '. $last_name,"id"=>$email];
        header('location:' . 'index.php');

    }
}