<?php require_once "template/top-heder-link.php"?>
<?php require_once "template/header_nav.php"?>
<section class="register">
    <?php if (isset($_GET['email'])):?>
    <div class="box_alert">
        ایمیل استفاده شده قبلا در سامانه ثبت شده
    </div>

    <?php endif;?>
    <div class="box_register">

        <h3 class="iranb">فرم ثبت نام</h3>
        <form action="action_register.php" method="post">
            <label for="username">نام</label>
            <input class="farsi" type="text" maxlength="255" id="username" name="username" required placeholder="نام خود را وارد کنید">
            <label for="firstName">نام خانوادگی</label>
            <input class="farsi" type="text" maxlength="255" id="firstName" name="firtsname" required placeholder="نام خانوادگی خود را وارد کنید">
            <label for="number">شماره تماس</label>
            <input class="numeric" type="text" pattern="\d*" minlength="11" maxlength="11" id="number" name="number" required placeholder="شماره تماس خود را وارد کنید, مانند 093...">
            <small>حداکثر 11 کاراکتر</small>
            <label for="password">رمز عبور</label>
            <input minlength="6" maxlength="20" type="password" name="password" id="password" required placeholder="رمز خود را وارد کنید" >
            <small>حداقل 6 کاراکتر</small>
            <label for="gmail">ایمیل</label>
            <input type="email" name="gmail" id="gmail" required placeholder="ایمیل خود را وارد کنید">
            <div class="box_sent">
                <a href="login.php">ورود</a>
                <button type="submit" id="register_button" name="submit">ثبت نام</button>
            </div>

        </form>
    </div>




</section>

<?php require_once "template/footer.php"?>
