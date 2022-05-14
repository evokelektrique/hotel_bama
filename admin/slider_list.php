<?php session_start();?>
<?php require_once "header-top.php"?>
<?php require_once "sidebar.php"?>
<div class="content-body">
    <?php if (isset($_GET['success'])):?>

        <div class="alert alert-success" role="alert">
            اسلایدر جدید ثبت شد
            <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
        </div>

    <?php endif;?>

    <div class="box-body">
        <div class="table-responsive">
            <div class="box-head">
                <h4 class="title">اسلایدر ها</h4>
            </div>
            <table class="table table-vertical-middle">
                <thead>
                <tr>
                    <th>ایدی اسلایدر</th>
                    <th>توضیحات</th>
                    <th>عکس اسلایدر</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $data = select_all("slider");?>
                    <?php if ($data->num_rows>0):?>
                    <?php while ($res = $data->fetch_assoc()):?>

                    <td><?php echo $res['slider_id'];?></td>
                    <td style="overflow: hidden !important;text-overflow: ellipsis;overflow-wrap: break-word;width: 162px;display: inline-block;"><a href="#"><?php echo $res['text'];?></a></td>
                    <td><img style="width: 70px ;height: 70px" src="../asetss/images/<?php echo $res['photo']?>" alt="" class="product-image "></td>
                    <td>
                        <div class="table-action-buttons">
                            <a class="edit button button-box button-xs button-info" href="edit_room.php?action=hotel_safar&id=<?php echo $res['room_id'];?>"><i class="zmdi zmdi-edit"></i></a>
                            <a class="delete button button-box button-xs button-danger" href="delete.php?action=hotel_safar&id=<?php echo $res['room_id'];?>"><i class="zmdi zmdi-delete"></i></a>
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
