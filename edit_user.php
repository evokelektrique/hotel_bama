<?php require_once "template/top-heder-link.php"?>
<?php require_once "template/header_nav.php"?>
<?php require_once  "backend/function.php"?>
<section class="register">
    <?php $users = select_user("email",$_SESSION['user_login']['email'])?>
    <?php if ($users->num_rows>0):?>
    <?php $user = $users->fetch_assoc();?>

    <div class="box_register">

        <h3 class="iranb">ویرایش کاربر</h3>
        <form action="action_edit_user.php" method="post">
            <label for="username">نام</label><br>
            <input type="text" id="username" name="username" required placeholder="نام خود را وارد کنید" value="<?php echo $user['firstname'];?>">
            <label for="firstName">نام خانوادگی</label><br>
            <input type="text" id="firstName" name="firtsname" required placeholder="نام خانوادگی خود را وارد کنید" value="<?php echo $user['lastname'];?>">
            <label for="number">شماره تماس</label><br>
            <input type="number" id="number" name="number" required placeholder="شماره تماس خود را وارد کنید" value="<?php echo $user['phone'];?>">
            <label for="password">رمز عبور</label><br>
            <input type="password" name="password" id="password" required placeholder="رمز خود را وارد کنید"  value="<?php echo $user['password'];?>">

            <div class="box_sent">

                <button type="submit" name="edit_user">ویرایش</button>
            </div>

        </form>
    </div>
    <?php endif;?>




</section>

<?php require_once "template/footer.php"?>
