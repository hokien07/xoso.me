<?php
include("../database/dbCon.php");
include("simple_html_dom.php");

$html = file_get_html("http://xoso.me/");
$tins = $html->find("table.fl ");
$dau1 ="";
$duoi1 = "";
$dau2 = "";
$duoi2 = "";

foreach ($tins as $tin) {
    //get thong tin dau1.
    $dau1s = $tin->find("tr")->last_child ();
    for($i = 0; $i < count($dau1s); $i++)
        echo $dau1s[$i]->innertext;
}

//$html = file_get_html("http://xskt.com.vn/tin-tuc/");
//$tins = $html->find("ul.list-news-center li");
/*foreach ($tins as $tin){
  $img = $tin->find("img", 0)->src;
  $title = $tin->find("a",1)->innertext;

    $hinh = '../img/tintuc/'. basename($img);
    file_put_contents($hinh, file_get_contents($img));
   echo  $tenHinh = basename($img);
   echo "<img src = '{$img}' />";
  /*if(isset($img, $title)) {
    $q = "INSERT INTO tintuc (urlHinh, tieuDe) VALUES ('{$tenHinh}', '{$title}')";
    $r = mysqli_query($dbc, $q);
  }*/


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
