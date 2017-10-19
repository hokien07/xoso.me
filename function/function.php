<?php
require_once ("block/simple_html_dom.php");

function tentinh($mienTinh) {
    //lay ten tinh trong database
    /**idMien :
     *0: xo so mien bac
     *1: so xo violet
     *2: xo so mien nam
     *3: xo so mien trung
     */

    global $dbc;
    $q = "
    SELECT * tinh
    ";
    $result = mysqli_query($dbc,$q);
    return $result;
}

//lay tin moi nhat tu xoso.me
function get_tinMoiNhat() {
    global  $dbc;
    $html = file_get_html("http://xoso.me/");
    $tins = $html->find("ul.list-news li");
    foreach ($tins as $tin) {
        $img = $tin->find("img", 0)->src;
        $title = $tin->find("a", 1)->innertext;

        $hinh = 'img/tintuc/' . basename($img);
        file_put_contents($hinh, file_get_contents($img));
        $tenHinh = basename($img);
        if (isset($img, $title)) {
            $q = "INSERT INTO tintuc (urlHinh, tieuDe) VALUES ('{$tenHinh}', '{$title}')";
            $r = mysqli_query($dbc, $q);
        }
    }
}

//lay tin mới nhất từ database
function tinMoiNhat() {
  global $dbc;
  $q = "SELECT * FROM tintuc ORDER BY idTinTuc DESC LIMIT 0, 5";
  $result = mysqli_query($dbc, $q);
  return $result;
}

//lay thong tin ket quả miền bắc từ xoso.me
function get_kqMienBac() {
    global $dbc;
    $html = file_get_html("http://xoso.me/");
    $tins = $html->find("table.kqmb ");
    //$numbers = array();
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
          VALUES (
            '{$db}', 
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
    $resault = mysqli_query($dbc, $q);
}

//lấy kết quả xổ số miền bắc từ database.
function kqMienBac() {
    global $dbc;
    $q = "
        SELECT * FROM ketqua WHERE idTinh = 0 ORDER BY idKetQua DESC LIMIT 0,1;
    ";
    $result = mysqli_query($dbc, $q);
    return $result;
}

//chuyển đổi ngày tháng qua tiếng việt.
function getThu() {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $weekday = date("l");
    $weekday = strtolower($weekday);
    switch($weekday) {
        case 'monday':
            $weekday = 'Thứ hai';
            break;
        case 'tuesday':
            $weekday = 'Thứ ba';
            break;
        case 'wednesday':
            $weekday = 'Thứ tư';
            break;
        case 'thursday':
            $weekday = 'Thứ năm';
            break;
        case 'friday':
            $weekday = 'Thứ sáu';
            break;
        case 'saturday':
            $weekday = 'Thứ bảy';
            break;
        default:
            $weekday = 'Chủ nhật';
            break;
    }
    return $weekday;
}

//lấy ngày và thời gian hiện tại.
function ngayHomNay() {
    $thu = getThu();
    $ngay = date("d/m/Y");
    return "<h3> {$thu} - {$ngay}  </h3>";
}

//lấy link chèn web
function linkDuDoan() {
    global $dbc;
    $q = "SELECT * FROM linkdudoan ORDER BY idLink DESC";
    $result = mysqli_query($dbc, $q);
    return $result;
}
?>
