<?php
include("../database/dbCon.php");
include("simple_html_dom.php");

$html = file_get_html("http://xoso.me/");
/*
$tins = $html->find("div.bullet ul li a strong");
foreach ($tins as $tin) {
  $tentinh = $tin->innertext;
  $tens = explode( '-', $tentinh);
  $q = "
    INSERT INTO tinh (tenTinh, mienTinh) VALUES('$tens[0]', 0)
  ";
  mysqli_query($dbc, $q);
}
*/

$tins = $html->find("ul.stastic-lotery li a");
foreach ($tins as $tin) {
  $thongke = $tin->innertext;

  $q = "
    INSERT INTO thongke (tenThongKe) VALUES('{$thongke}')
  ";
  mysqli_query($dbc, $q);
}
?>
