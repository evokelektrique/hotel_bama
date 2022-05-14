<?php
require_once "../backend/conect.php";
if (isset($_GET['delete_room']) && isset($_GET['id'])){
    $id =$_GET['id'];
    $sql = "DELETE FROM `rooms` WHERE `id`='$id'";
    $res = $conn->query($sql);
    if ($res){
        header("location:admin_room.php");
    }
}

if (isset($_GET['delete_hotel']) && isset($_GET['id'])) {
   $id =$_GET['id'];
   $sql = "DELETE FROM `hotels` WHERE `id`='$id'";
   $res = $conn->query($sql);
   if ($res){
       header("location:admin_hotel.php");
   }
}
