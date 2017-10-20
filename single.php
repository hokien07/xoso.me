<?php
include("database/dbCon.php");
include("function/function.php");
?>
<?php include("block/header.php"); ?>
<body>
<div id="header">
    <div class="title">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php include("block/slogan.php"); ?>
            </div>
        </div>
    </div>
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <?php include("block/logo.php"); ?>

                </div>
                <div class="col-md-8">
                    <div class="banner-qc">
                        <a href="#"><img src="img/banner/banner.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php include("block/topmenu.php"); ?>
            </div>
        </div>
    </div>
</div> <!--header-->
<div class="content">
    <?php
        if(isset($_GET['tentinh'])) {
            $tinh = $_GET['tentinh'];
        }

    ?>
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <?php include("block/sidebarleft.php"); ?>
            </div>

            <div class="col-md-6">
                <div class="content-page">
                    <!--lấy ngày tháng hôm nay-->
                    <div class="date-today">
                        <?php
                        echo ngayHomNay();
                        ?>
                    </div>

                    <div class="link-du-doan">
                        <?php
                        getLinkTraCuu();
                        $links = linkDuDoan();
                        while($link = mysqli_fetch_array($links)){
                            echo "<a href='{$link['linkWeb']}' target='_blank'><span><img src='img/hot2.gif' alt='{$link['nameWeb']}'></span>{$link['nameWeb']}</a>";
                        }
                        ?>
                    </div>

                    <div class="lich-mo-thuong">
                        <h2 class="title-bor clearfix">Các tỉnh mở thưởng hôm nay</h2>
                        <div class="row">
                            <?php
                            $lichs = lichThuong();
                            while($lich = mysqli_fetch_array($lichs)):?>
                                <div class="col-md-4" style="text-align: left;">
                                    <img src="img/hot2.gif" alt="soi cầu 646 - soi cầu chuẩn">
                                    <a href="#"><?php echo $lich['tenTinhThuong'] ?></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <div class="xsmn">
                        <h2 class="title-bor clearfix"><a href="#" title="XSTN <?php echo getThu(); ?>">XS <?php echo $tinh; ?>  <?php echo  getThu(); ?></a></h2>

                        <table class="table table-responsive-md table-bordered" >
                            <tbody style="text-align: center">
                            <?php
                            $kqt = layKetQuaTheoTen($tinh);
                            $kg = mysqli_fetch_array($kqt);
                            ?>
                            <tr>
                                <td>Giải 8</td>
                                <td colspan="12"><?php echo $kg['giaiTam'] ?></td>
                            </tr>
                            <tr>
                                <td>Giải 7</td>
                                <td colspan="12"><?php echo $kg['giaiBay'] ?></td>
                            </tr>
                            <tr>
                                <td>Giải 6</td>
                                <?php
                                $giai6s = $kg['giaiSau'];
                                $giai6 = explode("-", $giai6s);
                                ?>
                                <td colspan="4"><?php echo $giai6['0'] ?></td>
                                <td colspan="4"><?php echo $giai6['1'] ?></td>
                                <td colspan="4"><?php echo $giai6['2'] ?></td>
                            </tr>
                            <tr>
                                <td>Giải 5</td>
                                <td colspan="12"><?php echo $kg['giaiNam'] ?></td>
                            </tr>

                            <tr>
                                <td rowspan="2">Giải 4</td>
                                <?php
                                $giai4s = $kg['giaiTu'];
                                $giai4 = explode("-", $giai4s);
                                ?>
                                <td colspan="3"><?php echo $giai4['0'] ?></td>
                                <td colspan="3"><?php echo $giai4['1'] ?></td>
                                <td colspan="3"><?php echo $giai4['2'] ?></td>
                                <td colspan="3"><?php echo $giai4['3'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="3"><?php echo $giai4['4'] ?></td>
                                <td colspan="3"><?php echo $giai4['5'] ?></td>
                                <td colspan="3"><?php echo $giai4['6'] ?></td>
                            </tr>

                            <tr>
                                <td>Giải 3</td>
                                <?php
                                $giai3s = $kg['giaiBa'];
                                $giai3 = explode("-", $giai3s);
                                ?>
                                <td colspan="6"><?php echo $giai3['0'] ?></td>
                                <td colspan="6"><?php echo $giai3['1'] ?></td>
                            </tr>

                            <tr>
                                <td>Giải 2</td>
                                <?php
                                $giai2s = $kg['giaiNhi'];
                                $giai2 = explode("-", $giai2s);
                                ?>
                                <td colspan="6"><?php echo $giai2['0'] ?></td>
                                <td colspan="6"><?php echo $giai2['1'] ?></td>
                            </tr>

                            <tr>
                                <td>Giải Nhất</td>
                                <td colspan="12"><?php echo $kg['giaiNhat'] ?></td>
                            </tr>

                            <tr style="color: #E80000; font-weight: bold;">
                                <td>Đặc Biệt</td>
                                <td colspan="12"><?php echo $kg['dacBiet'] ?></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <?php include("block/sidebarright.php"); ?>
            </div>

        </div>
    </div>
</div><!--/.content-->
<?php include("block/footer.php"); ?>
