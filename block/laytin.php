<?php
include("../database/dbCon.php");
include("simple_html_dom.php");

$html = file_get_html("http://xoso.me/");
$tins = $html->find("table.kqmb ");
//echo $tins;
//$tins = $html->find("table.bkqtinhmienbac");
$numbers = array();
$arr = array("");
foreach ($tins as $tin) {
    //$db = $tin->find("div.clsGiaiDB", 0)->innertext;
    //$nhat = $tin->find("tr td.number", 0)->innertext;
   // $nhi = $tin->find("tr td.number", 0)->innertext;
    $giais = $tin->find("tr");
    foreach ($giais as $giai) {
        $numbers = $giai->find("b");
        for($i = 0; $i <= count($giais); $i++ ) {
            if(isset($numbers[$i]))
                array_push($arr, $numbers[$i]->innertext);
        }

    }
}

$db = $arr[1];
$giaiNhat = $arr[2];
$giaiNhi = $arr[3] . "-" . $arr[4] ;
$giaiBa = $arr[5] . "-" . $arr[6] . "-" . $arr[7] . "-" . $arr[8]. "-" . $arr[9] . "-" . $arr[10];
$giaiTu = $arr[11] . "-" . $arr[12] . "-" . $arr[13] . "-" . $arr[14];
$giaiNam = $arr[15] . "-" . $arr[16] . "-" . $arr[17] . "-" . $arr[18]. "-" . $arr[19] . "-" . $arr[20];
$giaiSau = $arr[21] . "-" . $arr[22] . "-" . $arr[23];
$giaiBay = $arr[24]. "-". $arr[25] . "-" . $arr[26] . "-" . $arr[27];
$giaiTam = '';

$q = "
    INSERT INTO ketqua
          (dacBiet, giaiNhat, giaiNhi, giaiBa, giaiTu, giaiNam, giaiSau, giaiBay, giaiTam, ngay, idTinh)
          VALUES ('{$db}', 
            '{$giaiNhat}',
            '{$giaiNhi}',
            '{$giaiBa}',
            '{$giaiTu}',
            '{$giaiNam}',
            '{$giaiSau}',
            '{$giaiBay}',
            '{$giaiTam}',
            NOW(),
            0
            )
";
$r = mysqli_query($dbc, $q);

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
