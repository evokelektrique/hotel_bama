<?php
require_once "backend/conect.php";
session_start();
if (isset($_POST['submit'])){
$first_name = $_POST['username'];
$last_name = $_POST['firtsname'];
$email = $_POST['gmail'];

$phone = intval($_POST['number']);
$password = $_POST['password'];

$query = "SELECT * FROM Users where email like '{$email}'";
$res = ($conn->query($query)) ;
if ($res->num_rows>0){
header('location:'.'register.php?email');
}
$query_insert_data = "INSERT INTO `users`(`user_id`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES (null ,'$first_name' ,'$last_name','$email','$phone','$password')";

$insert = $conn->query($query_insert_data);
if ($insert){
$_SESSION['user_login'] =  ["username"=>$first_name .' '. $last_name,"id"=>$email];
header('location:'.'index.php');

}


}
