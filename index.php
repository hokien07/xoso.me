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
	<div class="container">
		<div class="row">
			<?php include("block/bannerqc.php"); ?>
		</div>
	</div><!--/.quang cao-->

	<div class="content">
		<div class="container">
			<div class="row">

				<div class="col-md-3">
					<?php include("block/sidebarleft.php"); ?>
				</div>

				<div class="col-md-6">
					<div class="content-page">
						<img src="img/banner/content.png" alt="" class="img-responsive center-block">
					</div>
				</div>

				<div class="col-md-3">
					<?php include("block/sidebarright.php"); ?>
				</div>

			</div>
		</div>
	</div><!--/.content-->
<?php include("block/footer.php"); ?>
