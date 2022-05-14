<?php
require_once  'backend/conect.php';
session_start();
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $quarry_mach_data = "SELECT * FROM `users` where email = '$username' and password = '$password'";
    $res = $conn->query($quarry_mach_data);
    if ($res->num_rows>0){
        while($row = $res->fetch_assoc()) {
            if ($row['status']=="admin"){
                $_SESSION['admin_login'] =  $row['firstname'].' '.$row['lastname'];
                header("location:admin/index.php");
            }
            else{
                $first_name = $row['firstname'];
                $last_name = $row['lastname'];
                $email= $row['email'];
                $_SESSION['user_login'] = ['username'=>$first_name.' '.$last_name,'email'=>"$email"] ;
                header('location:index.php');
            }


        }


    }
    else{
        header('location:login.php?no_login');
    }
}