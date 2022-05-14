<?php session_start();?>

<?php require_once "header-top.php"?>
<?php require_once "sidebar.php"?>

<div class="content-body">
    <?php if (isset($_GET['success'])):?>

        <div class="alert alert-success" role="alert">
           اتاق جدید با موفقیت ثبت شد
            <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
        </div>

    <?php endif;?>

    <div class="box-body">
        <div class="table-responsive">
            <div class="box-head">
                <h4 class="title">اتاق ها</h4>
            </div>
            <table class="table table-vertical-middle">
                <thead>
                <tr>
                    <th>ایدی اتاق</th>
                    <th>عکس</th>
                    <th>نام اتاق</th>
                    <th>قیمت</th>
                    <th>ظرفیت اتاق</th>
                    <th>هتل</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $data = select_data_room_hotel("rooms");?>
                    <?php if ($data->num_rows>0):?>
                    <?php while ($res = $data->fetch_assoc()):?>

                    <td><?php echo $res['id'];?></td>
                    <?php $photo = json_decode($res['photo'])?>
                    <td><img style="width: 70px ;height: 70px" src="../asetss/images/upload/<?php echo $photo[0];?>" alt="" class="product-image "></td>
                    <td><a href="#"><?php echo $res['name'];?></a></td>
                    <td><?php echo $res['price'];?> تومان</td>
                    <td><?php echo $res['number'];?></td>
                    <td>
                        <?php 
                        $hotel = select_single("hotels", $res["hotel_id"]);
                        while ($hotel_result = $hotel->fetch_assoc()) {
                           echo $hotel_result["name"];
                        }
                        ?>
                    </td>
                    <td>
                        <div class="table-action-buttons">
                            <a class="edit button button-box button-xs button-info" href="edit_room.php?id=<?php echo $res['id'];?>"><i class="zmdi zmdi-edit"></i></a>
                            <a class="delete button button-box button-xs button-danger" href="delete.php?id=<?php echo $res['id'];?>&delete_room"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <?php endwhile;?>
                <?php endif;?>
               
                </tbody>
            </table>
        </div>
    </div>
    
</div>

<?php require_once "footer.php"?>
