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
                    <h3 class="title">ثبت کردن هتل</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <form action="../backend/function.php" method="post" enctype="multipart/form-data">
                            <div class="col-lg-12 col-12 mb-20">

                                <div class="row mbn-15">
                                    <div class="col-12 mb-15"><h3 class="mb-15">نام هتل</h3>
                                        <input type="text" name="name" class="form-control" placeholder="هتل تهران ...">
                                     </div>
                                </div>

                            </div>
                            <button class="button button-success" type="submit" name="submit_add_hotel"><span>ثبت</span></button>
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
