<?php session_start();?>
<?php require_once "header-top.php"?>
<?php require_once "sidebar.php"?>

<div class="content-body">
    <div class="col-md-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">مدیریت کاربران</h4>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-vertical-middle">
                        <thead>
                        <tr>
                            <th>ایدی کاربر</th>
                            <th>نام کاربر</th>
                            <th>رمز کاربر</th>
                            <th>ایمیل کاربر</th>
                            <th>شماره تماس</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $data = select_all("users");?>
                        <?php while ($res = $data->fetch_assoc()):?>
                            <tr>
                                <td><?php echo $res['user_id']?></td>
                                <td><?php echo $res['firstname']." ".$res['lastname'];?></td>
                                <td><?php echo $res['password']?></td>
                                <td><?php echo $res['email']?></td>
                                <td><?php echo $res['phone']?></td>
                                <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" href="edit_user.php?action=users&id=<?php echo $res['user_id'];?>"><i class="zmdi zmdi-edit"></i></a>
                                        <a class="delete button button-box button-xs button-danger" href="delete_user.php?action=users&id=<?php echo $res['user_id'];?>"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile;?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php"?>
