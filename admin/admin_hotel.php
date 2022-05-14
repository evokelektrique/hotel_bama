<?php session_start();?>

<?php require_once "header-top.php"?>
<?php require_once "sidebar.php"?>

<div class="content-body">
    <?php if (isset($_GET['success'])):?>

        <div class="alert alert-success" role="alert">
           هتل جدید با موفقیت ثبت شد
            <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
        </div>

    <?php endif;?>

    <div class="box-body">
        <div class="table-responsive">
            <div class="box-head">
                <h4 class="title">هتل ها</h4>
            </div>
            <table class="table table-vertical-middle">
                <thead>
                <tr>
                    <th>ایدی هتل</th>
                    <th>نام</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $data = select_data_room_hotel("hotels");?>
                    <?php if ($data->num_rows>0):?>
                    <?php while ($res = $data->fetch_assoc()):?>
                    <td><?php echo $res['id'];?></td>
                    <td><?php echo $res['name'];?></td>
                    <td>
                        <div class="table-action-buttons">
                            <a class="edit button button-box button-xs button-info" href="edit_hotel.php?id=<?php echo $res['id'];?>"><i class="zmdi zmdi-edit"></i></a>
                            <a class="delete button button-box button-xs button-danger" href="delete.php?id=<?php echo $res['id'];?>&delete_hotel"><i class="zmdi zmdi-delete"></i></a>
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
