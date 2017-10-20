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
                                        <a href="single.php?tentinh=<?php echo $lich['tenTinhThuong'] ?>"><?php echo $lich['tenTinhThuong'] ?></a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>


                        <div class="xsmb">
                            <?php
                            //lấy kết quả từ database
                            $mb =  kqMienBac();
                            $gia_mb = mysqli_fetch_array($mb);

                            $date = $gia_mb['ngay']."";
                            $dt = new DateTime($date);
                            $ngay = $dt->format('d/m/Y');
                            ?>
                            <h2 class="title-bor clearfix"><a href="#">XSMB <?php echo getThu(); ?></a> - Kết quả xổ số miền Bắc ngày <?php echo $ngay ?></h2>
                            <table class="table table-bordered" style="font-size: 18px;">

                                <tbody class="text-center">
                                <tr style="color: #E80000; font-weight: bold;">
                                    <td>Đặc Biệt</td>
                                    <td colspan="12"><b><?php echo $gia_mb['dacBiet'] ?></b></td>
                                </tr>
                                <tr>
                                    <td>Gải Nhất</td>
                                    <td colspan="12"><?php echo $gia_mb['giaiNhat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Giải Nhì</td>
                                    <?php
                                    $gianhis = $gia_mb['giaiNhi'];
                                    $giainhi = explode("-", $gianhis);

                                    ?>
                                    <td colspan="6"><?php echo $giainhi[0] ?></td>
                                    <td colspan="6"><?php echo $giainhi[1] ?></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Giải Ba</td>
                                    <?php
                                    $giaibas = $gia_mb['giaiBa'];
                                    $giaiba = explode("-", $giaibas);

                                    ?>
                                    <td colspan="4"><?php echo $giaiba[0] ?></td>
                                    <td colspan="4"><?php echo $giaiba[1] ?></td>
                                    <td colspan="4"><?php echo $giaiba[2] ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><?php echo $giaiba[3] ?></td>
                                    <td colspan="4"><?php echo $giaiba[4] ?></td>
                                    <td colspan="4"><?php echo $giaiba[5] ?></td>
                                </tr>

                                <tr>
                                    <td>Giải Tư</td>
                                    <?php
                                    $giaitus = $gia_mb['giaiBa'];
                                    $giaitu = explode("-", $giaitus);

                                    ?>
                                    <td colspan="3"><?php echo $giaitu[0] ?></td>
                                    <td colspan="3"><?php echo $giaitu[1] ?></td>
                                    <td colspan="3"><?php echo $giaitu[2] ?></td>
                                    <td colspan="3"><?php echo $giaitu[3] ?></td>
                                </tr>

                                <tr>
                                    <td rowspan="2">Giải Năm</td>
                                    <?php
                                    $giainams = $gia_mb['giaiBa'];
                                    $giainam = explode("-", $giainams);

                                    ?>
                                    <td colspan="4"><?php echo $giainam[0] ?></td>
                                    <td colspan="4"><?php echo $giainam[1] ?></td>
                                    <td colspan="4"><?php echo $giainam[2] ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><?php echo $giainam[3] ?></td>
                                    <td colspan="4"><?php echo $giainam[4] ?></td>
                                    <td colspan="4"><?php echo $giainam[5] ?></td>
                                </tr>

                                <tr>
                                    <td>Giải Sáu</td>
                                    <?php
                                    $giaisaus = $gia_mb['giaiBa'];
                                    $giaisau = explode("-", $giaisaus);

                                    ?>
                                    <td colspan="3"><?php echo $giaisau[0] ?></td>
                                    <td colspan="3"><?php echo $giaisau[1] ?></td>
                                    <td colspan="3"><?php echo $giaisau[2] ?></td>
                                    <td colspan="3"><?php echo $giaisau[3] ?></td>
                                </tr>

                                <tr>
                                    <td>Giải Bảy</td>
                                    <?php
                                    $giaibays = $gia_mb['giaiBa'];
                                    $giaibay = explode("-", $giaibays);

                                    ?>
                                    <td colspan="3"><?php echo $giaibay[0] ?></td>
                                    <td colspan="3"><?php echo $giaibay[1] ?></td>
                                    <td colspan="3"><?php echo $giaibay[2] ?></td>
                                    <td colspan="3"><?php echo $giaibay[3] ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <!--xo so long ann-->
                        <div class="xsmn">
                            <h2 class="title-bor clearfix"><a href="#" title="XSTN <?php echo getThu(); ?>">XSLA <?php echo getThu(); ?></a> - Kết quả xổ số ngày <?php echo $ngay ?></h2>

                            <table class="table table-responsive-md table-bordered" >
                                <tbody style="text-align: center">
                                <?php
                                    $longan = layKetQuaTheoTen('Long An');
                                    $count = 8;
                                    $kg = mysqli_fetch_array($longan);
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

                        <!--xo so an giang-->
                        <div class="xsmn">
                            <h2 class="title-bor clearfix"><a href="#" title="XSTN <?php echo getThu(); ?>">XSAG <?php echo getThu(); ?></a> - Kết quả xổ số ngày <?php echo $ngay ?></h2>

                            <table class="table table-responsive-md table-bordered" >
                                <tbody style="text-align: center">
                                <?php
                                $longan = layKetQuaTheoTen('An Giang');
                                $kg = mysqli_fetch_array($longan);
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
