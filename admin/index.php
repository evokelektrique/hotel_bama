<?php session_start();?>
<?php if (isset($_SESSION['admin_login'])):?>
   <?php require_once "header-top.php"?>
   <?php require_once "sidebar.php"?>
   <?php require_once "footer.php"?>
<?php else: ?>
   <?php header("location:../?error"); ?>
<?php endif;?>