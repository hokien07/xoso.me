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
                            <a href="#"><span><img src="img/hot2.gif" alt=""></span>Soi Cầu Miền Bắc</a>
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
					</div>
				</div>

				<div class="col-md-3">
					<?php include("block/sidebarright.php"); ?>
				</div>

			</div>
		</div>
	</div><!--/.content-->
<?php include("block/footer.php"); ?>
