<?php require_once "template/top-heder-link.php"?>
<?php require_once "template/header_nav.php"?>
<?php require_once "backend/function.php"?>
<?php if(isset($_GET['id'])):
$id_room = $_GET['id'];
$data = select_single("rooms", $id_room);
?>

<section class="content_room">
   <?php if (!empty($data) && $data->num_rows>0):?>
    <div class="container_room">

        <div class="room_singl_product">
            <div class="room_description">
                <div class="description">
                    <?php while ($res = $data->fetch_assoc()):?>
                    <h3 class="iranb"><?php echo $res['name'];?></h3>
                </div>
                <div class="box_title_hotel">
                    <a href="#box_price">رزرو اتاق</a>
                    <a href="#perfermns">امکانات هتل</a>
                    <a href="#about_hotel">درباره هتل</a>
                    <a href="#ghanon">قانون و مقرارات هتل</a>
                </div>
                <div class="swiper slider_top">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php $photos = json_decode($res['photo'])?>
                            <?php foreach ($photos as $photo):?>
                            <div class="swiper-slide"><img src="asetss/images/upload/<?php echo $photo;?>" alt=""></div>

                             <?php endforeach;?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
            </div>
                <div class="description_room_site irann">
                <?php echo $res['description'];?>
                </div>
                <div class="box_price" id="box_price">
                    <p class="irann text_room_price">قیمت اتاق به ازا هر روز</p>
                    <div class="price">
                        <span class="iranb"><?php echo number_format($res['price']);?>&nbsp;تومان</span>
                        <a class="iranb" href="cart.php?id=<?php echo $id_room;?>">رزرو اتاق</a>
                    </div>
                </div>
                <h4 class="iranb" id="perfermns">امکانات هتل</h4>
                <div class="content_abuth_one description_hotel">

                  <div>
                      <h5>امکانات تفریحی</h5>
                      <ul>
                          <li>استخر</li>
                          <li>سونا</li>
                          <li>جکوزی</li>
                      </ul>
                  </div>
                    <div>
                      <h5>سرویس ها</h5>
                      <ul>
                          <li>بانک</li>
                          <li>خشک شوی</li>
                          <li>تاکسی</li>
                          <li>فروشگاه</li>
                      </ul>
                  </div>
                    <div>
                      <h5>خوردنی و نوشیدنی</h5>
                      <ul>
                          <li>سالن غذا</li>
                          <li>رستوران</li>
                          <li>کافی شاپ</li>
                          <li>مینی بار</li>
                      </ul>
                  </div>

                </div>

                <h4 class="iranb" id="ghanon">قوانین و مقرارات </h4>

                <div class="content_abuth_one">
                    <p>زمان ورود 14:00</p>
                    <p>زمان خروج 21:00</p>

                </div>
                <h4 class="iranb" id="about_hotel">درباره هتل </h4>
                <div class="content_abuth_one">
                    <h5>اطلاعات کلی در مورد هتل</h5>
                    <p>اگر در سفر به کیش می‌خواهید در هتلی شیک، راحت و نزدیک به جاذبه‌های گردشگری کیش و مراکز خرید اقامت داشته باشید، در رزرو هتل فلامینگو کیش تردید نکنید! هتل چهار ستاره فلامینگو کیش از هتل‌های شناخته شده و بسیار محبوب این جزیره است. هتل فلامینگو کیش با سابقه‌ای طولانی در امر هتلداری و پذیرایی از مهمانان و مسافران کیش از سال 1373 از خوشنام‌ترین هتل‌های کیش به شمار می‌آید.</p>
                    <h5>اطلاعات هتل</h5>
                    <p>اگر در سفر به کیش می‌خواهید در هتلی شیک، راحت و نزدیک به جاذبه‌های گردشگری کیش و مراکز خرید اقامت داشته باشید، در رزرو هتل فلامینگو کیش تردید نکنید! هتل چهار ستاره فلامینگو کیش از هتل‌های شناخته شده و بسیار محبوب این جزیره است. هتل فلامینگو کیش با سابقه‌ای طولانی در امر هتلداری و پذیرایی از مهمانان و مسافران کیش از سال 1373 از خوشنام‌ترین هتل‌های کیش به شمار می‌آید.</p>
                </div>


        </div>
        <?php endwhile;?>
    </div>
        <div class="sidebar">
            <div class="category">
                <p class="iranb">دسته بندی</p>
                <ul>
                    <li><a href="">اتاق تک نفره</a></li>
                </ul>
            </div>
            <div class="link_room">
                <p class="iranb">اتاق مربوط</p>
                <ul>
                    <li><a href="">اتاق دو نفره</a></li>
                </ul>

            </div>
        </div>
        <?php else: ?>
         <div class="box_alert">
            اتاقی یافت نشد
         </div>
        <?php endif;?>
</section>
<?php endif;?>


<?php require_once "template/footer.php"?>
