<?php require_once "template/top-heder-link.php"?>
<?php require_once "template/header_nav.php"?>
<?php require_once "backend/function.php"?>
<?php if (isset($_SESSION['user_login'])):?>
<section class="content_room">
    <div class="container_room">

        <div class="room">
            <div class="room_description" >
                <div class="description">
                    <h3 class="iranb">پرداختی ها</h3>
                </div>

                <div class="description_room_site irann">
                   <table class="table_payment">
                       <tr>

                           <td>نام هتل</td>
                           <td>نام اتاق</td>
                           <td>کد رهگیری</td>
                           <td>تاریخ ورود</td>
                           <td>تاریخ خروج</td>
                           <td>روز</td>
                           <td>مقدار پرداختی</td>
                       </tr>
                       <?php $email = $_SESSION['user_login']['email']?>
                       <?php $data = select_payment($email ,"email")?>
                       
                       <?php if ($data->num_rows>0):?>
                       <?php while ($res = $data->fetch_assoc()):?>

                       <tr>
                           <?php
                           $name_hotel =$res['name_hotel'];

                           switch ($name_hotel){
                               case "hotel_safar":
                                   echo "<td>هتل سفر</td>";
                                   break;
                               case "hotel_asaesh":
                                   echo "<td>هتل اسایش</td>";
                                   break;
                               case "hotel_rangy":
                                   echo "<td>هتل رنجی</td>";
                                   break;
                           }

                           ?>
                           <td><?php echo $res['name_hotel']?></td>
                           <td><?php echo $res['name_room']?></td>
                           <td><?php echo $res['code_payment']?></td>
                           <td><?php echo $res['start_time']?></td>
                           <td><?php echo $res['end_time']?></td>
                           <td><?php echo $res['date']?></td>
                           <td><?php echo number_format($res['price'])?> تومان </td>

                       </tr>
                       <?php endwhile;?>

                       <?php else:?>
                      <div class="box_alert">                       شما هیچ خریدی انجام ندادید
                      </div>
                       <?php endif;?>
                   </table>
                </div>
            </div>


</section>
<?php else:?>
<div class="box_alert">حتما باید ثبت نام کرده باشید!!!</div>
<?php endif;?>
<?php require_once "template/footer.php"?>
