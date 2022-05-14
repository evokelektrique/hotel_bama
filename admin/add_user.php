<?php session_start();?>

<?php require_once "header-top.php"?>
<?php require_once "sidebar.php"?>

<div class="content-body">

    <!-- Page Headings Start -->


    <div class="row">

        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">اضافه کردن کاربر</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <form action="../backend/function.php" method="post">
                            <div class="col-lg-12 col-12 mb-20">

                                <h6 class="mb-15">نام کاربر</h6>

                                <div class="row mbn-15">
                                    <div class="col-12 mb-15">
                                       <input name="firstname" type="text" class="form-control" placeholder="نام">
                                    </div>
                                    <div class="col-12 mb-15">
                                       <input name="lastname" type="text" class="form-control" placeholder="نام خانوادگی">
                                    </div>
                                    <div class="col-12 mb-15">
                                        <h6 class="mb-15">تغییر وضعیت کاربر</h6>
                                        <select name="type" class="form-control">
                                            <option>انتخاب</option>
                                            <option value="admin">مدیر</option>
                                            <option value="user">کاربر</option>
                                        </select>
                                    </div>
                                    <h6 class="mb-15">رمز کاربر</h6>
                                    <div class="col-12 mb-15"><input name="password" type="password" class="form-control" placeholder="رمز">
                                    </div>

                                    <h6 class="mb-15">شماره همراه</h6>
                                    <div class="col-12 mb-15">
                                       <input class="form-control" type="text" pattern="\d*" minlength="11" maxlength="11" id="number" name="phone" required placeholder="شماره تماس خود را وارد کنید, مانند 093..." >
                                    </div>

                                    <h6 class="mb-15">ایمیل کاربر</h6>
                                    <div class="col-12 mb-15"><input name="email" type="email" class="form-control" placeholder="ایمیل"></div>
                                </div>

                            </div>
                            <button class="button button-success" type="submit" name="submit_add_user"><span>ثبت</span></button>
                        </form>
                        <!--Form Field-->

                        <!--Form Field-->

                    </div>
                </div>
            </div>
        </div>
        <!--Form controls End-->







    </div>

</div>

<?php require_once "footer.php"?>
