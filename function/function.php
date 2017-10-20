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

function getLinkTraCuu() {
    global  $dbc;
    $html = file_get_html("http://xoso.me/");
    $links = $html->find("div.link-du-doan");
    foreach ($links as $link) {
        $title = $link->find("a", 0)->innertext;
        $href = $link->find("a", 0)->href;
        if (isset($img, $title)) {
            $q = "INSERT INTO linkdudoan (linkWeb, nameWeb) VALUES ('{$href}', '{$title}')";
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
    $arr = array("");
    foreach ($tins as $tin) {
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

//lấy ngày hiện tại
function getNgay() {

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

function get_thongKeDuoi(){
    global $dbc;
    $html = file_get_html("http://xoso.me/");
    $tins = $html->find("table.fl tbody");
    foreach ($tins as $tin) {
        //get thong tin dau1.
        $tds = $tin->find("tr td");
        foreach ($tds as $td){
            $s =  $td->next_sibling();
            $q = "INSERT INTO thongkedauduoi
                (duoi1, dau2, idTinh)
                VALUES ('{$s}', '', 0)";
            $r = mysqli_query($dbc, $q);
        }
    }
}
//lấy kết quả thông kê loto từ database
function thongKeDuoi() {
    global $dbc;
    $q = "SELECT * FROM thongkedauduoi WHERE idTinh = 0";
    $result = mysqli_query($dbc, $q);
    return $result;
}

//lâý keets quả theo tiỉnh từ trang xoso.me.
function ketQuaTinh($src, $idtinh) {
    global $dbc;
    $html = file_get_html($src);
    $xsmn = $html->find("div#load_kq_tinh_0 div.one-city table.extendable td.number b");
    $giai = array();
    foreach ($xsmn as $xs){
        //đưa kêts quả vfào amngr.
        array_push($giai, $xs->innertext);
    }

    $giaiTam = $giai[0];
    $giaiNhat = $giai[16];
    $giaiNhi = $giai[15] . "-" . $giai[4] ;
    $giaiBa = $giai[14]."-" . $giai[13];
    $giaiTu = $giai[12] . "-" . $giai[12] . "-" . $giai[10] . "-" . $giai[9] . "-" . $giai[8] . "-" . $giai[7] . "-" . $giai[6];
    $giaiNam = $giai[5];
    $giaiSau = $giai[4] . "-" . $giai[3] . "-" . $giai[3];
    $giaiBay = $giai[1];
    $db = $giai[17];

    //chenf vaào datab.
    $q = "INSERT INTO ketqua 
          (dacBiet, giaiNhat, giaiNhi, giaiBa, giaiTu, giaiNam, giaiSau, giaiBay, giaiTam, ngay, idTinh)
          VALUES 
          (
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
            '$idtinh'
          )";
    $result = mysqli_query($dbc, $q);
}

//lấy lịch thuownrt từ xoso.me.
function getLichThuong() {
    global $dbc;
    $html = file_get_html("http://xoso.me/");
    $mtn = $html->find("div.mo-thuong-ngay table.colgiai tr td a");
    foreach ($mtn as $t){
        $tmt = $t->innertext;
        $q = "INSERT INTO lichmothuong (tenTinhThuong, ngayThuong) VALUES ('{$tmt}', NOW())";
        $r = mysqli_query($dbc, $q);
    }
}
//layslichj mở thưởng.
function lichThuong() {
    global $dbc;
    $q = "SELECT * FROM lichmothuong";
    $result = mysqli_query($dbc, $q);

    return $result;
}

//lấy  kết quả theo id Tinh và tên Tỉnh.
function layKetQuaTheoTen($name) {
    global $dbc;
    $q = "SELECT kq.*, t.tenTinh
          FROM ketqua kq
          INNER JOIN tinh t ON t.idTinh = kq.idTinh 
          WHERE t.tenTinh = '{$name}'
          ORDER BY kq.idKetQua DESC LIMIT 0, 1";
    $result = mysqli_query($dbc,$q);

    return $result;
}

//lấy  kết quả theo id Tinh và tên Tỉnh đợt trước
function layKetQuaTheoTen1($name) {
    global $dbc;
    $q = "SELECT kq.*, t.tenTinh
          FROM ketqua kq
          INNER JOIN tinh t ON t.idTinh = kq.idTinh 
          WHERE t.tenTinh = '{$name}'
          ORDER BY kq.idKetQua DESC LIMIT 1, 1";
    $result = mysqli_query($dbc,$q);

    return $result;
}

//chia sẻ bài viết lên facebook
function facebookShare() {?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-like" data-href="http://soicau646.com" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
<?php }




?>
