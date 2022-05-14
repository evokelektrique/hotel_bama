<?php require_once "template/top-heder-link.php"?>
<?php require_once "template/header_nav.php"?>
<?php require_once "backend/function.php"?>
<?php if (isset($_GET['id'])):?>
<?php if(isset($_SESSION['user_login']['username'])):?>
<?php 
$id = $_GET['id'];
$data = select_single("rooms", $id);
?>
<section class="cart">
    <div class="cart_content">
        <?php if (!empty($data) && $data->num_rows>0):?>
        <div class="description_room">
            <?php while ($res = $data->fetch_assoc()):?>
            <?php 
            $hotel_data = select_single("hotels", $res["hotel_id"]); 
            $hotel_res = $hotel_data->fetch_assoc();
            ?>
            <div>
                <p class="irann name_room_select"><?php echo $res['name'];?></p>
                <?php $photo = json_decode($res['photo']);?>
                <img src="asetss/images/upload/<?php echo $photo[0];?>" alt="">
                <p class="irann">قیمت به ازای هز روز <span class="price_one "><?php echo number_format($res['price']);?></span></p>
            </div>
        </div>
        <div class="form_cart">

            <form class="form_cart_subject">
                <label for="username">نام و نام خانوادگی</label>
                <input required="" type="text" id="username"  name="username" placeholder="نام و نام خانوادگی خود را وارد کنید">
                <label for="address" >شماره تماس</label>
                <input type="text" pattern="\d*" maxlength="11" required name="address" id="address" placeholder="شماره خود را وارد کنید">
                <label for="time_start">ورود</label>
                <input type="text" class="time_start" id="time_start" name="time_start">
                <label for="time_end">خروج</label>
                <input type="text" id="time_end" name="time_end" >
                <input id="room_id" type="hidden" value="<?php echo $res['id'];?>">
                <?php $payman = select_date_end($res['id'])?>
                <?php if ($payman):?>
                <?php $date= $payman->fetch_assoc();?>
                    <input name="end_time" id="end_time" type="hidden" value="<?php echo $date['end_time']?>">
                <?php else:?>
                    <input name="end_time" id="end_time" type="hidden" value="0">
                <?php endif;?>
                <input name="name_hotel" id="name_hotel" type="hidden" value="<?= $hotel_res['name'] ?>">
                <input name="name_room" id="name_room" type="hidden" value="<?= $res['name'] ?>">
                <p>جمع کل:<span class="price_sum">0</span></p>
                <p class="price_ent">محاسبه قیمت</p>
                <button id="slect" type="submit" name="submit_cart">درگاه پرداخت</button>

            </form>
        </div>

        
    </div>
    <?php endwhile;?>
    <?php else: ?>
        <div style="min-height: 600px; width: 100%">
            <div class="box_alert" style="margin: 10rem auto;">
               کارت نا معتبر
            </div>
        </div>
    <?php endif;?>
</section>
    <?php else:?>

    <div class="box_alert" style="margin: 10rem auto;">
       برای رزرو کردن اتاق باید وارد حساب کاربری خود شوید.
    </div>
<?php endif;?>

<?php endif;?>


<script type="text/javascript" src="asetss/js/relshn_cart.js"></script>

<?php require_once "template/footer.php"?>
