<!-- 負責執行 back資料夾下 del.php的程式 -->
<?php
/*---------------------------------------------------------------------------------*/
include_once "base.php";
/*---------------------------------------------------------------------------------*/
$table=$_GET['table'];
$id=$_GET['id'];
/*---------------------------------------------------------------------------------*/
// 判斷該投票主題在資料庫是否有關連的資料(投票選項)

if($table=='subjects'){
    // 如果有關聯,我要連同選項一起刪除
    del($table,$id);
    del('options',['subject_id'=>$id]);
}else{
    // 如果沒有關聯,我只要刪除投票主題就好
    del($table,$id);
}
/*---------------------------------------------------------------------------------*/
to("../back.php");
// to("./back.php");
?>