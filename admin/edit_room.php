<?php session_start();?>

<?php require_once "header-top.php"?>
<?php require_once "sidebar.php"?>

<?php if (isset($_GET['id'])):?>

<?php $id = $_GET['id'];?>
<?php $data = select_single("rooms", $id);?>

<?php if ($data->num_rows>0):?>

<div class="content-body">

    <!-- Page Headings Start -->


    <div class="row">

        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">ویرایش اتاق</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <form action="../backend/function.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                            <div class="col-lg-12 col-12 mb-20">
                                <?php while ($res = $data->fetch_assoc()):?>

                                <h3 class="mb-15">نام اتاق</h3>

                                <div class="row mbn-15">
                                    <div class="col-12 mb-15"><input type="text" name="name" class="form-control" placeholder="ورودی" value="<?php echo $res['name'];?>"></div>

                                    <div class="col-12 mb-15"><h3 class="mb-15">تعداد نفر</h3>
                                        <input type="number" name="number_room" class="form-control" placeholder="چن نفره بودن اتاق" value="<?php echo $res['number'];?>"></div>
                                    <div class="col-12 mb-15"><h3 class="mb-15">قیمت</h3>
                                        <input type="number" name="price" class="form-control" placeholder="قیمت اتاق به ازا روز" value="<?php echo $res['price']?>"></div>
                                    <div class="col-12 mb-15">
                                          <h3 class="mb-15">انتخاب هتل</h3>
                                          <select class="form-control" name="hotel" required>
                                             <option value="0">انتخاب</option>
                                             <?php $data2 = select_data_room_hotel("hotels");?>
                                             <?php if ($data2->num_rows>0):?>
                                             <?php while ($res2 = $data2->fetch_assoc()):?>
                                             <option value="<?= $res2["id"] ?>" ><?= $res2["name"] ?></option>

                                             <?php endwhile; ?>
                                             <?php endif; ?>
                                          </select>
                                    </div>
                                    <div class="col-12 mb-15">
                                        <h3 class="mb-15">دسته بندی</h3>
                                        <select class="form-control" name="category" required>
                                            <option value="no_category" >بدونه دسته بندی</option>
                                            <option <?php if ($res['category']=="master_room"){echo "selected";}?> value="master_room">اتاق ویژه</option>
                                            <option <?php if ($res['category']=="room_to"){echo "selected";}?> value="room_to">اتاق دو نفره</option>
                                            <option <?php if ($res['category']=="room_one"){echo "selected";}?> value="room_one">اتاق یک نفره</option>
                                            <option <?php if ($res['category']=="room_three"){echo "selected";}?> value="room_three">اتاق سه نفره</option>
                                            <option <?php if ($res['category']=="room_for"){echo "selected";}?> value="room_for">اتاق چهار نفره</option>

                                        </select>
                                    </div>
                                    <h6 class="mb-15">توضیحات اتاق</h6>

                                    <div class="col-12 mb-15"><textarea name="description" class="form-control" placeholder="متن"><?= $res['description'];?></textarea></div>
                                    <div class="col-12 mb-15 imag">
                                        <h3 class="mdb-15">اپلود عکس</h3>
                                        <input id="input" type="file" name="file[]"  >
                                        <a class="button button-success add_imag" href="#">اضافه کردن عکس بیشتر</a>
                                    </div>

                                </div>

                            </div>
                            <button class="button button-success" type="submit" name="submit_edit_room"><span>ویرایش</span></button>
                        </form>
                        <?php endwhile;?>
                        <!--Form Field-->

                        <!--Form Field-->

                    </div>
                </div>
            </div>
        </div>
        <!--Form controls End-->

        <script>
            document.querySelector(".add_imag").addEventListener("click",function (e) {
                e.preventDefault();
                let input_let = document.querySelector("#input");
                let input = document.createElement("div");
                document.querySelector(".imag").insertAdjacentHTML('afterend', '<input id="input" type="file" name="file[]" required >');
            })
        </script>





    </div>

</div>
<?php endif;?>
<?php endif;?>

<?php require_once "footer.php"?>
