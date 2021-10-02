<?php
require $_SERVER["DOCUMENT_ROOT"]."/inc/conn.php";
$sqls = "delete from dataa";
if (1==1){
    mysqli_query($conn,$sqls);
}
?>