<?php
require_once "conect.php";
if (isset($_POST['submit_add_hotel'])){
  $name_hotel = $_POST["name"];
  $sql = "INSERT INTO `hotels`(`name`) VALUES ('$name_hotel') ";
  $true_sql = $conn->query($sql);
  if ($true_sql){
    header("location:../admin/admin_hotel.php?success");
  }
}

if ( isset($_POST['submit_edit_hotel'])){
  $id = $_GET['id'];
  $name_hotel = $_POST["name"];
  $sql = "UPDATE `hotels` SET `name`='$name_hotel' WHERE `id`='$id' ";

  $true_sql = $conn->query($sql);
  if ($true_sql){
    header("location:../admin/admin_hotel.php?success");
  }

}
if (isset($_POST['submit_add_room'])){
  $name_room = $_POST["name"];
  $discription = $_POST["discription"];
  $number_room = $_POST['number_room'];
  $category = $_POST['category'];
  $price = $_POST['price'];
  $name_hotel = $_POST["hotel"];
  $file_paths = $_FILES['file']['tmp_name'];

  $file_name = $_FILES["file"]["name"];
  for ($i=0;$i<count($file_paths);$i++){
    $extensions = pathinfo($file_name[$i], PATHINFO_EXTENSION);
    $name_random = rand(0,999999999)*100;
    $image_names = $name_random."."."$extensions";
    $file_path = $file_paths[$i];
    $dir = "../asetss/images/upload/".$image_names;
    $move = move_uploaded_file($file_path,$dir);
    $file_names[]=$image_names;
  }
  $file_names = json_encode($file_names);

  if ($move){
    $sql = "INSERT INTO `rooms`(`hotel_id`, `photo`, `price`, `description`, `name`,`number`,`category`) VALUES ('$name_hotel', '$file_names', '$price', '$discription', '$name_room', '$number_room', '$category') ";
    $true_sql = $conn->query($sql);
    if ($true_sql){
      header("location:../admin/admin_room.php?success");
    }
  }
}

if ( isset($_POST['submit_edit_room'])){
  $id = $_GET['id'];
  $name_room = $_POST["name"];
  $description = $_POST["description"];
  $number_room = $_POST['number_room'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $hotel_id = $_POST["hotel"];
  $file_paths = $_FILES['file']['tmp_name'];

  $file_name = $_FILES["file"]["name"];

  $empty_array = array("");
  if ($file_name!=$empty_array){
    for ($i=0;$i<count($file_paths);$i++){
      $extensions = pathinfo($file_name[$i], PATHINFO_EXTENSION);
      $name_random = rand(0,999999999)*100;
      $iamge_names = $name_random."."."$extensions";
      $file_path = $file_paths[$i];
      $dir = "../asetss/images/upload/".$iamge_names;
      $move = move_uploaded_file($file_path,$dir);
      $file_names[]=$iamge_names;

    }
    $file_names = json_encode($file_names);
    if ($move){
      $sql = "UPDATE `rooms` SET `hotel_id`='$hotel_id', `name`='$name_room',`price` ='$price',`photo`='$file_names',`description`='$description',`number`='$number_room',`category`='$category' WHERE `id`='$id' ";

      $true_sql = $conn->query($sql);
      if ($true_sql){
        header("location:../admin/admin_room.php?success");
      }
    }
  } else {
    $sql = "UPDATE `rooms` SET `hotel_id`='$hotel_id',`name`='$name_room',`price` ='$price',`description`='$description',`number`='$number_room',`category`='$category' WHERE `id`='$id' ";
    $true_sql = $conn->query($sql);
    var_dump($true_sql);
    if ($true_sql){
      header("location:../admin/admin_room.php?success");
    }
  }
}

function select_data_room_hotel($name_hotel){
  global $conn;
  $sql = "SELECT * FROM {$name_hotel}";
  $data = $conn->query($sql);
  return $data;
}

function select_single($table_name, $id){
  global $conn;
  $sql = "SELECT * FROM {$table_name} WHERE id = {$id}";

  $data =$conn->query($sql);
  return $data;
}

function select_single_room($name_hotel,$id_room){
  global $conn;
  $sql = "SELECT * FROM {$name_hotel} WHERE room_id = {$id_room}";

  $data =$conn->query($sql);
  return $data;
}

function select_hotel_rooms($hotel_id) {
  global $conn;
  $sql = "SELECT * FROM rooms WHERE hotel_id = {$hotel_id}";

  $data =$conn->query($sql);
  return $data;
}

function select_payment($email , $name_wieher){
  global $conn;
  $query = "SELECT * FROM `payment` WHERE $name_wieher='$email'";

  $date =$conn->query($query);
  return $date;
}

function select_date_end($room_id){
  global $conn;
  $query = "SELECT * FROM `payment` where room_id='$room_id' ORDER BY ID DESC LIMIT 1";

  $date = $conn->query("$query");
  return $date;
}

function select_user($name_select,$id_select){
  global $conn;
  $query = "SELECT * FROM users where $name_select='$id_select'";
  $data = $conn->query($query);
  return $data;
}

function get_user($id){
  global $conn;
  $query = "SELECT * FROM `users` where user_id={$id}";
  $data = $conn->query($query);
  return $data;
}

function select_all($name_rool){
  global $conn;
  $sql = "SELECT * FROM `$name_rool`";
  $data = $conn->query($sql);
  if ($data->num_rows>0){
    return $data;
  }
}

if (isset($_POST['submit_add_slider'])){
  $discription = $_POST["discription"];
  $file_path = $_FILES['file']['tmp_name'];
  $file_name = $_FILES["file"]["name"];
  $extensions = pathinfo($file_name, PATHINFO_EXTENSION);
  $name_random = rand(0,999999999)*100;
  $iamge_names = $name_random."."."$extensions";

  $dir = "../asetss/images/".$iamge_names;
  $move = move_uploaded_file($file_path,$dir);

  if ($move){
    $sql = "INSERT INTO `slider`(`photo`, `text`) VALUES ('$iamge_names','$discription') ";
    $true_sql = $conn->query($sql);
    if ($true_sql){
      header("location:../admin/admin_room.php?success");
    }
  }
}

if (isset($_POST['submit_add_user'])){
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $type = $_POST["type"];
   $password = $_POST["password"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];

   $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `phone`, `password`, `status`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$password', '$type');";
   $true_sql = $conn->query($sql);

   if ($true_sql){
      header("location:../admin/user_list.php?success");
   }
}


if (isset($_POST['submit_update_user'])){
   $id = $_POST["user_id"];
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $type = $_POST["type"];
   $password = $_POST["password"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   
   $sql = "UPDATE `users` SET `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `phone`='$phone', `password`='password', `status`='$type' WHERE `user_id`='$id' ";
   $true_sql = $conn->query($sql);

   if ($true_sql){
      header("location:../admin/user_list.php?success");
   }
}

