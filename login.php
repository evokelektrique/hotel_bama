<?php require_once "template/top-heder-link.php"?>
<?php require_once "template/header_nav.php"?>
    <section class="register">
        <?php if (isset($_GET['no_login'])):?>
            <div class="box_alert">
                نام کاربری یا کلمه عبور اشتباه است
            </div>
        <?php endif;?>
        
        <div class="box_register">
            <h3 class="iranb">فرم ورود</h3>
            <form action="action_login.php" method="post">
                <label for="username">ایمیل</label>
                <input type="email" required="" id="username" name="username" placeholder="ایمیل خود را وارد کنید">
                <label for="password">رمز عبور</label>
                <input minlength="6" required="" type="password" name="password" id="password" placeholder="رمز خود را وارد کنید">
                <div class="box_sent">
                    <a href="register.php">ثبت نام</a>
                    <button type="submit" id="login_button" name="submit"> ورود</button>
                </div>

            </form>
        </div>




    </section>

<?php require_once "template/footer.php"?>