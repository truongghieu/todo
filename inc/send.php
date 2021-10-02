<?php
require $_SERVER["DOCUMENT_ROOT"]."/inc/conn.php";
if (isset($_POST["list"])){
$list = json_decode( $_POST["list"]);


$sqll = 'insert into dataa (list) values ("'.$list.'")';

mysqli_query($conn,$sqll);

}
?>