<?php
session_start();
require_once "backend/conect.php";
require_once "backend/function.php";

if (isset($_POST['time_start']) && isset($_POST['username'])){
    $time_now = date("Y/m/d");
    $username = $_POST['username'];
    $name_hotel = $_POST['name_hotel'];
    $name_room = $_POST['name_room'];
    $room_id = $_POST['room_id'];
    $email = $_SESSION['user_login']['email'];
    $phone = $_POST['adres'];
    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];
    $count_date = $_POST['count_date'];
    $price = $_POST['price'];
    $code_payment= rand(1111111111,9999999999);
    $query = "INSERT INTO `payment` (`date`, `status`, `start_time`, `end_time`, `price`, `username`, `code_payment`, `phone`, `email`, `name_room`, `time_set_data`, `room_id`, `name_hotel`) VALUES ('$count_date', 'ok', '$time_start', '$time_end', '$price', '$username', '$code_payment', '$phone', '$email', '$name_room', '$time_now', '$room_id', '$name_hotel');";
    $set = $conn->query($query);
}