<!-- 登出頁面 -->
<?php
/*---------------------------------------------------------------------------------*/
include_once "base.php";
/*---------------------------------------------------------------------------------*/

unset($_SESSION['user']);

/*---------------------------------------------------------------------------------*/
// to("../index.php?do=login");
to("./index.php?do=login");
?>