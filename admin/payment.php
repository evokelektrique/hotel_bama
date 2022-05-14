<?php session_start();?>
<?php require_once "header-top.php"?>
<?php require_once "sidebar.php"?>
<div class="content-body">
    <div class="col-12 mb-30">


        <div class="box">
            <div class="box-head">
                <h4 class="title">سفارشات اخیر</h4>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-vertical-middle table-selectable">

                        <!-- Table Head Start -->
                        <thead>
                        <tr>
                            <!--<th class="selector h5"><button class="button-check"></button></th>-->
                            <td><span>نام هتل</span></td>
                            <td><span>نام اتاق</span></td>
                            <td><span>نام کاربر</span></td>
                            <td><span>کد رهگیری</span></td>
                            <td><span>تاریخ ورود</span></td>
                            <td><span>تاریخ خروج</span></td>
                            <td><span>روز</span></td>
                            <td><span>مقدار پرداختی</span></td>

                        </tr>
                        </thead><!-- Table Head End -->

                        <!-- Table Body Start -->
                        <tbody>
                        <?php $sum_price=0;?>
                        <?php $data = select_all("payment");?>
                        <?php while ($res = $data->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $res['name_hotel']?></td>
                            <td><?php echo $res['name_room']?></td>
                            <td><?php echo $res['username']?></td>
                            <td><?php echo $res['code_payment']?></td>
                            <td><?php echo $res['start_time']?></td>
                            <td><?php echo $res['end_time']?></td>
                            <td><?php echo $res['date']?></td>
                            <td><?php echo number_format($res['price'])?> تومان </td>
                        </tr>
                        <?php $sum_price +=$res['price']?>

                        <?php endwhile;?>
                        <tr>
                           <td>
                           <span style="padding:10px;background-color: #202334;color: white;border-radius: 8px">
                              مجموع پرداختی ها: <?php echo number_format($sum_price);?> تومان 
                           </span>
                           </td>

                            <td colspan="7"><button onclick="window.print();" style="float:left;border:none;padding:10px;text-align:center; margin-right:10px;background-color: #202334;color: white;border-radius: 8px">گزارش گیری</button></td>
                        </tr>
                        </tbody><!-- Table Body End -->

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"?>
