<?php include 'header.php'; ?>

<head>
	<link rel="stylesheet" type="text/css" href="styles/services.css">
	<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
	<title>Laporan Keuangan LUZ Fatukoa</title>
	<style type="text/css">
		/* img { transition: all .2s ease-in-out; }
img:hover { transform: scale(1.5); }  */
	</style>
</head>

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gambar/salib1.jpg" data-speed="0.8"></div>
	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title"><span>LUZ</span> LAPORAN</div>
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Beranda</a></li>
								<li>Laporan</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="features">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="features_container d-flex flex-row flex-wrap align-items-start justify-content-space-evenly">


					<?php
					$qry = mysqli_query($konek, "SELECT * FROM tbl_laporan where kode order by kode limit 200");
					while ($data = mysqli_fetch_assoc($qry)) {
						$pdfPath = "/laporan/pdf/" . $data['laporan'];
					?>

						<div class="feature">
							<div class="feature_image">
								<a href="/plugins/pdfjs/web/viewer.html?file=<?php echo urlencode($pdfPath); ?>" target="_blank">
									<img src="laporan/gambar/laporan.png" alt="">
									<!--<embed src="laporan/pdf/krs.pdf" height="500" width="1000" type="application/pdf"/>-->

								</a>
							</div>
							<div class="feature_content">
								<div class="section_title">
									<!-- <h2><?php echo $data['nama']; ?></h2> -->
									<h2 style="color: #22354d;">
										<a href="/plugins/pdfjs/web/viewer.html?file=<?php echo urlencode($pdfPath); ?>" target="_blank" style="color: inherit;">
											<?php echo $data['nama']; ?>
										</a>
									</h2>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>