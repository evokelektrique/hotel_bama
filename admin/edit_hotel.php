<?php session_start();?>

<?php require_once "header-top.php"?>
<?php require_once "sidebar.php"?>

<?php if (isset($_GET['id'])):?>

<?php $id = $_GET['id']?>
<?php $data = select_single("hotels", $id);?>
<?php if ($data->num_rows>0):?>

<div class="content-body">

    <!-- Page Headings Start -->


    <div class="row">

        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">ثبت کردن اتاق ها</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <?php while ($res = $data->fetch_assoc()):?>
                        <form action="../backend/function.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                            <div class="col-lg-12 col-12 mb-20">
                              <div class="col-lg-12 col-12 mb-20">

                                  <div class="row mbn-15">
                                      <div class="col-12 mb-15"><h3 class="mb-15">نام هتل</h3>
                                          <input type="text" name="name" class="form-control" placeholder="هتل تهران ..." value="<?= $res["name"] ?>">
                                       </div>
                                  </div>

                              </div>
                            </div>
                            <button class="button button-success" type="submit" name="submit_edit_hotel"><span>ویرایش</span></button>
                        </form>
                        <?php endwhile;?>
                        <!--Form Field-->

                        <!--Form Field-->

                    </div>
                </div>
            </div>
        </div>
        <!--Form controls End-->




    </div>

</div>
<?php endif;?>
<?php endif;?>

<?php require_once "footer.php"?>
