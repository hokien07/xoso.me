<?php
include("../database/dbCon.php");
include("simple_html_dom.php");


$html = file_get_html("http://xoso.me/");
$mtn = $html->find("div.mo-thuong-ngay table.colgiai tr td a");
foreach ($mtn as $t){
    $tmt = $t->innertext;
    $q = "INSERT INTO lichmothuong (tenTinhThuong, ngayThuong) VALUES ('{$tmt}', NOW())";
    $r = mysqli_query($dbc, $q);
}





/*foreach ($tins as $tin) {
  $tentinh = $tin->innertext;
  $tens = explode( '-', $tentinh);
  $q = "
    INSERT INTO tinh (tenTinh, mienTinh) VALUES('$tens[0]', 0)
  ";
  mysqli_query($dbc, $q);
}

//up date mien tinh.
$q = "SELECT * FROM tinh";
$r= mysqli_query($dbc, $q);
for($idtinh = 27; $idtinh <=40; $idtinh++) {
  $q = "UPDATE tinh SET mienTinh = 3 WHERE idTinh = $idtinh";
  $r = mysqli_query($dbc, $q);
}*/


/*
$tins = $html->find("ul.stastic-lotery li a");
foreach ($tins as $tin) {
  $thongke = $tin->innertext;

  $q = "
    INSERT INTO thongke (tenThongKe) VALUES('{$thongke}')
  ";
  mysqli_query($dbc, $q);
}*/


?>
