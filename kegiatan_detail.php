<?php include 'header.php';

error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek, "SELECT * FROM tbl_file WHERE kategori='$id'");
$data  = mysqli_fetch_array($sqlku);

?>

<head>
	<title>LUZ - <?php echo $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="styles/news.css">
	<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gambar/juduln.jpg" data-speed="0.8"></div>
	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<h3> <?php echo $data['kategori']; ?> Tanggal : <?php echo $data['tgl_posting']; ?></h3>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- News -->


<div class="news">
	<div class="container">
		<div class="row">

			<!-- News Posts -->
			<div class="col-lg-8">
				<div class="news_posts">
					<!-- News Post -->
					<div class="news_post">
						<div class="news_image">
							<p>Tanggal Posting : <?php echo $data['tgl_posting']; ?> Post : <?php echo $data['user']; ?></p>
						</div>
						<div class="news_content">
							<p><?php echo $data['konten']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<!-- Sidebar -->
			<div class="col-lg-4">
				<div class="sidebar">
					<!-- Categories -->
					<div class="sidebar_categories sidebar_section">
						<div class="sidebar_section_title">
							<div class="sidebar_title">KEGIATAN</div>
						</div>
						<ul>
							<?php
							$qry = mysqli_query($konek, "SELECT * FROM tbl_file where kode order by kategori desc limit 100");
							while ($data = mysqli_fetch_assoc($qry)) {
							?>

								<li><a href="kegiatan_detail.php?id=<?php echo base64_encode($data['kategori']); ?>">#. <?php echo $data['kategori']; ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<!-- Archives -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>