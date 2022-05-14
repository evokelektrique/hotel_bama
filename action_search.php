<?php require_once "template/top-heder-link.php" ?>
<?php require_once "template/header_nav.php" ?>
<?php require_once "backend/function.php" ?>
<?php

if (isset($_POST['submit'])):
   $start =  $_POST['start'];
   $end = $_POST['end'];
   $hotel_id = $_POST["hotel"];
   $rooms = select_hotel_rooms($hotel_id);
?>

<h4 style="text-align: center;margin-top: 1em;">جستجو</h4>

<div class="is-flex is-flex-wrap" style="margin: 3em 0; justify-content: center;">
   <?php 
   if ($rooms->num_rows > 0):
      while ($room = $rooms->fetch_assoc()):
      $photo = json_decode($room['photo']);
   ?>

   <div class="is-flex-1 hotel-room-wrapper">
      <li class="hotel-room is-flex-column">
         <img height="40" src="./asetss/images/upload/<?php echo $photo[0];?>" alt="" class="product-image ">
         <a href="single_room.php?id=<?= $room['id'] ?>"><?= $room["name"] ?></a>
      </li>
   </div>

   <?php 
      endwhile;
   else:
      echo "اتاقی یافت نشد";
   endif;
   ?>
</div>
<?php
endif;
require_once "template/footer.php";
