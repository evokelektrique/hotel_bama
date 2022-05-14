<div class="top_header">
    <div class="container irann">
        <div class="login_class" style="direction: ltr">

            <?php if (isset($_SESSION['user_login'])):?>
                <ul>
                    <li><a href="remove_seestion.php">خروج</a></li>
                    <li><a href="user_room.php">پروفایل</a></li>
                </ul>
                <div class="user_login">
                    <a href="#" class="user_text"> <?php echo $_SESSION['user_login']['username'];?>خوش امدید</a>
                    <i class="fas fa-user"></i>
                </div>
            <?php elseif(isset($_SESSION['admin_login'])):?>
                <ul>
                    <li><a href="remove_seestion.php">خروج</a></li>
                    <li><a href="admin">پنل مدیر</a></li>
                </ul>
                <div class="user_login">
                    <a href="#" class="user_text">مدیر <?php echo $_SESSION['admin_login'];?> خوش امدید </a>
                    <i class="fas fa-user"></i>
                </div>
            <?php else:?>

                <ul>
                    <li><a href="login.php">ورود</a></li>
                    <li><a href="register.php">ثبت نام</a></li>
                </ul>
                <div class="user_login">
                    <a href="#" class="user_text">کاربر مهمان خوش امدید</a>

                    <i class="fas fa-user"></i>
                </div>
            <?php endif;?>

        </div>
    </div>

</div>
<header class="irann">
    <nav class="container">
        <a href="index.php"><img style="width: auto;" src="admin/assets/images/website1-min.png"></a>

        <i  class=" icon_bar far fa-bars"></i>
        <ul class="icon_piper">
            <li><a href="https://telegram.org/"><i class="fab fa-telegram-plane"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
            <li><a href="tel:09142125047"><i class="far fa-phone"></i>&nbsp;&nbsp;09142125047</a></li>
        </ul>
    </nav>
</header>