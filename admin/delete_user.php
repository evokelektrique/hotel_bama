<?php
require_once "../backend/conect.php";
if (isset($_GET['action'])&isset($_GET['id'])){
    $name_hotel =$_GET['action'];
    $id =$_GET['id'];
    $sql = "DELETE FROM `$name_hotel` WHERE `user_id`='$id'";
    echo $sql;
    $res = $conn->query($sql);
    if ($res){
        header("location:user_list.php");
    }
}