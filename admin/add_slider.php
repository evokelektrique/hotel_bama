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
                    <h3 class="title">اضافه کردن اسلایدر</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <form action="../backend/function.php" method="post" enctype="multipart/form-data">
                            <div class="col-lg-12 col-12 mb-20">


                                <div class="row mbn-15">

                                    <h6 class="mb-15">توضیحات اسلایدر</h6>

                                    <div class="col-12 mb-15"><textarea name="discription" class="form-control" placeholder="متن"></textarea></div>
                                    <div class="col-12 mb-15 imag">
                                        <h3 class="mdb-15">اپلود عکس</h3>
                                        <input id="input" type="file" name="file" required >
                                    </div>

                                </div>

                            </div>
                            <button class="button button-success" type="submit" name="submit_add_slider"><span>ثبت</span></button>
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
