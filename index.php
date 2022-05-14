<?php require_once "template/top-heder-link.php" ?>

<?php require_once "template/header_nav.php" ?>
<?php require_once "backend/function.php" ?>
<section class="section_search">
    <div class="search">
        <div class="box_search irann">
            <p>جستجوی هتل</p>
            <form name="form-1" action="action_search.php" method="post"
                  onsubmit="return recheckFormValidation('form-1','end')">
                <select class="search_name_hotel" name="hotel" required>
                  <?php $data = select_data_room_hotel("hotels");?>
                  <?php if ($data->num_rows>0):?>
                  <?php while ($res = $data->fetch_assoc()):?>
                  <option value="<?= $res["id"] ?>" ><?= $res["name"] ?></option>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </select>

                <div class="box_date">
                    <div class="box_start">
                        <label for="start_select_room">تاریخ ورود</label><br>
                        <input type="text" class="start_select_room search_name_hotel" id="start_select_room"
                               name="start"/>
                    </div>
                    <div class="box_end">
                        <label for="end_select_room">تاریخ خروج</label><br>
                        <input type="text" class="end_select_room search_name_hotel" id="end_select_room" name="end"/>
                    </div>
                </div>


                <div class="search_box_button">
                    <button type="submit" class="button_search" name="submit">جستجو</button>
                </div>
            </form>
        </div>
    </div>
</section>


<script type="text/javascript">

    $(document).ready(function () {
        $(".start_select_room").pDatepicker({
            initialValue: true,
            autoClose: true,
            format: "YY/M/D",
            minDate: new persianDate()
        });
    });
    $(document).ready(function () {
        $(".end_select_room").pDatepicker({
            initialValue: true,
            autoClose: true,
            format: "YY/M/D",
            minDate: new persianDate().add('d', 1)
        });
    });
</script>


<section class="slider_content">
    <div class="swiper slider_top">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="asetss/images/chastity-cortijo.jpg" alt="">

                    <span class="irann">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</span>
                </div>
                <div class="swiper-slide"><img src="asetss/images/li-yang.jpg" alt=""></div>
                <div class="swiper-slide"><img src="asetss/images/manuel-moreno.jpg" alt=""></div>
                <div class="swiper-slide"><img src="asetss/images/yuliya-pankevich.jpg" alt=""></div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
</section>

<!-- Hotels -->
<section class="content irann">
    <div class="container item_section front-page-hotels">
      <div class="is-flex is-flex-wrap">
         <?php 
         $date = select_data_room_hotel("hotels");
         if ($date->num_rows > 0) {
             while ($res = $date->fetch_assoc()) {
                 ?>
                  <div class="is-flex-1 front-page-hotel">
                     <h4><?= $res["name"] ?></h4>

                     <ul>

                        <div class="is-flex-1 hotel-room-wrapper">
                           <li class="hotel-room">
                        <?php 
                        $rooms = select_hotel_rooms($res["id"]);
                        if ($rooms->num_rows > 0):
                            while ($room = $rooms->fetch_assoc()):
                           $photo = json_decode($room['photo']);
                        ?>
                        <div class="hotel-room-block">
                           <img height="30" src="./asetss/images/upload/<?php echo $photo[0];?>" alt="" class="product-image ">
                           <a href="single_room.php?id=<?= $room['id'] ?>"><?= $room["name"] ?></a>
                        </div>
                        <?php 
                           endwhile;
                        else:
                           echo "اتاقی یافت نشد";
                        endif;
                        ?>
                           </li>
                        </div>
                     </ul>
                  </div>

         <?php
             }
         }
         ?>
      </div>
    </div>
</section>

<section class="wigear">
    <div class="box_wegir">
        <div>
            <div class="icon_wegir"><i class="fab fa-amazon-pay"></i></div>
            <div class="title_wegir irann">کارمزد کنسلی صفر</div>
            <div class="text_wegir ">اگر به هر دلیلی از سفر خود منصرف شدید، سفرانه بابت لغو رزرو شما یا تغییر تاریخ آن
                هیچگونه مبلغی به عنوان کارمزد دریافت نخواهد کرد. کلیه قوانین کنسلی طبق قوانین هتل و یا ایرلاین است.
            </div>
        </div>
        <div>
            <div class="icon_wegir"><i class="fal fa-user-headset"></i></div>
            <div class="title_wegir irann">بهترین پشتبانی درطول صفر</div>
            <div class="text_wegir">اولویت ما در سفرانه بهترین پشتیبانی در طول سفر است. مسئولیت ما پس از تأیید رزرو تمام
                نمی‌شود، ما تا انتهای سفر همراه شما خواهیم بود. سفرانه با بهره‌مندی از بهترین پشتیبان‌ها و کارشناسان
                فروش و رزرواسیون، مدعی است که در تمامی ساعات شبانه‌روز توانایی رفع مشکلات احتمالی شما را در طول سفر
                دارد.
            </div>
        </div>
        <div>
            <div class="icon_wegir"><i class="far fa-hotel"></i></div>
            <div class="title_wegir irann">ارایه بیشتر تخفیف</div>
            <div class="text_wegir">سفرانه همواره ارائه کمترین قیمت را در خدمات‌رسانی تضمین می‌کند. شما می‌توانید در هر
                کدام از خدماتی که قصد خرید یا رزرو آن را از طریق سفرانه دارید، قیمت‌ها را مقایسه کرده و با ما در تماس
                باشید تا از بیشترین تخفیف بهره‌مند شوید!
            </div>
        </div>
        <div>
            <div class="icon_wegir"><i class="fal fa-envelope-open-text"></i></div>
            <div class="title_wegir irann">دریافت ویچرآنی</div>
            <div class="text_wegir">پس از اتمام مراحل رزرو، بلافاصله تاییدیه خود را دریافت کرده و با در دست داشتن آن به
                هتل یا فرودگاه مراجعه فرمایید.
            </div>
        </div>

</section>
<section content_abuth>
    <div class="box_abuth">
        <div class="content_abuth_one">
            <div>
                <img src="asetss/images/logo.jpg" alt="">
                <a href="index.php">هتل با ما</a>
            </div>
            <p>مدت زمان زیادی نیست که رزرو خدمات گردشگری نیز مانند صدها خدمات دیگر به دنیای دیجیتال قدم گذاشته و خیلی
                سریع روش‌های سنتی سفر کردن را پایان بخشیده. در دوران شروع دیجیتالی شدن رزرو خدمات گردشگری شرکت‌های کمی
                در این عرصه فعالیت داشتند.

                <br>هلدینگ فرهیختگان تجارت قرن با بیش از 13 سال تجربه در زمینه ارائه خدمات گردشگری یکی از اولین بازیگران
                این عرصه بوده، و امروز بخش خدمات گردشگری خود را تحت عنوان آژانس مسافرتی سفرانه مشرق زمین با نام تجاری
                سفرانه انجام می‌دهد. سایت سفرانه با استفاده از تجربۀ سالیانی که توسط هلدینگ فرهیختگان به دست آورده، تحت
                به‌روزترین زیرساخت‌ها و با شناخت کامل نیازهای مسافران طی سال‌های متمادی، امروز با قوی‌ترین تیم پشتیبانی
                و با تاییدیه به عنوان نماینده رسمی وزارت گردشگری جهت رزرو آنلاین و آفلاین کلیه خدمات گردشگری در خدمت
                مسافران است.</p>
        </div>
        <div class="content_abuth_one pad-20">

            <h4>رزرو آنلاین هتل از سفرانه</h4>
            <p><b> رزرو آنلاین هتل </b>چند سالی است که جایگزین روش&zwnj;های سنتی رزرو شده است. در همین راستا سایت سفرانه
                (آژانس مسافرتی سفرانه مشرق زمین) به عنوان یکی از اولین نقش&zwnj;آفرینان عرصه خدمات آنلاین گردشگری، واسطه&zwnj;ها
                را در فرایند<b> رزرو هتل </b>حذف کرده و آماده ارائه خدمات رزواسیون<b> بهترین هتل های تهران </b>و ایران
                با مناسب&zwnj;ترین قیمت و بیشترین تخفیف است.</p>
            <p>هتل، محل اقامت شما در طول سفر است پس<b> رزرو بهترین هتل </b>باید در اولویت سفرتان باشد. اقامت در هتلی که
                فاکتورهای اولیه آسایش و رفاه را داشته باشد، موجبات سفر خوش خاطره&zwnj;ای را برای شما فراهم می&zwnj;کند.
            </p>
            <p>در سفرانه امکان دسترسی به<b> بهترین هتل های ایران </b>از هتل 5 ستاره الی 1 ستاره؛ از هتل لوکس، هتل
                آپارتمان، بوتیک هتل تا اقامتگاه سنتی (هتل سنتی) را دارید. علاوه بر این موارد، در این سامانه اطلاعاتی
                مانند امکانات هتل، موقعیت جغرافیایی، ستاره&zwnj;های هتل، تجربه اقامتی، قوانین هتل و امتیاز کاربران به یک
                هتل خاص را یکجا می&zwnj;توانید ملاحظه بفرمایید.</p><h4>مزایای رزرو آنلاین هتل از سفرانه</h4>
            <ul>
                <li>رزرو هتل از سفرانه ارزان&zwnj;تر از رزرو مستقیم از خود هتل است.</li>
                <li><b> رزرو هتل ارزان </b>در سفرانه راحت و سریع است.</li>
                <li><b> فرایند رزرو آنلاین </b>هتل در سفرانه بدون هیچ&zwnj;گونه صرف وقت و هزینه انجام می&zwnj;شود.</li>
                <li>در سفرانه امکان رزرو<b> هتل های تمام شهرهای ایران </b>را دارید.</li>
                <li>در سفرانه امکان جست و جوی هتل براساس موقعیت مکانی و ستاره&zwnj;های هتل را دارید.</li>
                <li>در قسمت جست جو هتل می&zwnj;توانید هتل را بر اساس کمترین و یا بیشترین قیمت دسته بندی کنید.</li>
                <li>در سفرانه موقعیت جغرافیایی هر هتل را بر روی نقشه گوگل با جزییات و جاهای دیدنی اطراف مشاهده می&zwnj;کنید.</li>
                <li>تصاویر هتل&zwnj;ها به طور اختصاصی توسط سفرانه تهیه شده&zwnj;اند که با کیفیت&zwnj;ترین تصاویر از
                    موقعیت بیرونی و داخلی هتل در بین تمامی وبسایت<b> رزرو آنلاین هتل </b>هستند.
                </li>
                <li>در صفحه هر هتل، عکس هر واحد اقامتی به طور اختصاصی رو به روی آن نمایش داده می&zwnj;شود.</li>
                <li>در سفرانه امکان بررسی نظرات و تجربیات مهمانان سابق هتل ها وجود دارد.</li>
            </ul>
            <h4>رزرو هتل با بیشترین تخفیف در سفرانه</h4>
            <p>تخفیف رزرو آنلاین هتل یکی از اهداف مهم سفرانه و در راستای خدمت رسانی به مشتاقان سفرهای داخلی است. ما در
                اینجا تمام تلاشمان را انجام می&zwnj;دهیم تا هزینه&zwnj;های سفر شما را کاهش دهیم و از طرفی موجبات ارتقاء
                کیفیت خدمات رسانی را فراهم آوریم. در همین راستا برخی از هتلها از جمله<b> هتل پارسیان آزادی تهران </b>(برای
                شرکت&zwnj;ها و سازمان&zwnj;ها) با گارانتی سفرانه و تضمین بهترین قیمت قابل رزرو هستند.</p>
            <p> برای رزرو هریک از هتل&zwnj;ها می&zwnj;توانید قیمت ها را مقایسه کنید، تخفیف ها را مشاهده کنید و با
                کارشناسان رزرواسیون ما در تماس باشید.</p><h4>نحو رزرو هتل در سفرانه به چه صورت است؟</h4>
            <p>برای<b>رزرو آنلاین هتل</b>در سفرانه از لحظه انتخاب بهترین هتل تا دریافت واچر تنها به اندازه چند کلیک ساده
                زمان نیاز دارید. کافیست در قسمت جست&zwnj;وجو نام شهر مورد نظر و تاریخ ورود و خروجتان را وارد کنید و با
                زدن دکمه جستجو وارد صفحه رزرو آنلاین هتل&zwnj;های همان شهر &zwnj;شوید. در این قسمت قیمت&zwnj;ها و تخفیف&zwnj;ها
                را مشاهده کنید و متناسب با بودجه و بازه زمانی مدنظرتان رزرو هتل را انجام بدهید. البته فیلترهای جستجو
                مانند فیلتر قیمت، ستاره هتل&zwnj;، امکانات، امتیاز مهمانان و نوع اقامتگاه شما را برای رسیدن به هتل
                هدفتان یاری می&zwnj;کنند.</p>
            <p>بعد از ثبت رزرو، کارشناسان سفرانه با شما تماس می&zwnj;گیرند و بعد از کسب رضایت و پرداخت آنلاین هزینه
                اقامت از سمت شما، رزرو هتل را برای شما نهایی می&zwnj;کنند.</p><h4>رزرو بهترین هتل داخلی</h4>
            <p>فراهم کردن<b> رزرو آنلاین بهترین </b>هتل&zwnj;های ایران رسالتی است که سفرانه به خوبی آن را در راس اهداف
                کاری خود قرار داده است. در سفرانه خبری از هتل بی&zwnj;کیفیت و خدمات رسانی ضعیف نیست!</p>
            <p>پس اگر به دنبال رزرو هتل لوکس،<b> بهترین هتل های تهران، بهترین هتل&zwnj;های مشهد، بهترین هتل&zwnj;های
                    اصفهان، بهترین هتل های کیش، بهترین هتل&zwnj;های شیراز، بهترین هتل های قشم </b>و غیره هستید سفرانه
                میزبان خوبی برای شماست.</p><h4>پیگیری رزرو آنلاین هتل در سفرانه</h4>
            <p>بعد از ثبت<b> رزرو هتل </b>در سایت سفرانه یک کد پیگیری 6 رقمی به شماره موبایل و یا ایمیل شماره ارسال می&zwnj;شود.
                در قسمت پیگیری رزرو در قسمت بالای سایت می&zwnj;توانید با وارد کردن شماره موبایل و کدپیگیری وضعیت رزرو
                آنلاین را مشاهده بفرماید.</p>
            <p>همین قسمت را به عنوان رسید (واچر) به هتل ارائه بدهید و اگر نیاز به فاکتور رزرو داشتید آن را پرینت گرفته و
                به اداره و یا سازمان (دولتی/ خصوصی) مد نظرتان تحویل دهید. پشتیبانی رزرو آنلاین هتل در سفرانه از ساعت 9
                صبح تا 23 شب آماده پاسخگویی به تمامی سوالات و ابهامات شما در رابطه با فرایند رزرو است.</p>
        </div>
    </div>

</section>
<script src="asetss/js/search.js"></script>
<?php require_once "template/footer.php" ?>
