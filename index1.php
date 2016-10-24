<?php
include("controllers/Smarty_thoi_trang.php");
$smarty =new Smarty_thoi_trang();
$smarty->assign("thongtin","Thông Tin Dev");
$smarty->assign("title","Jean Shop");
$smarty->assign("view","views/v_thong_tin_nhom.tpl");
$smarty->display("layout.tpl");

?>