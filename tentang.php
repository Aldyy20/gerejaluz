<?php include 'header.php'; ?>

<head>
	<link rel="stylesheet" type="text/css" href="styles/elements.css">
	<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
	<title>Profil - Gereja Injil Kristus Indonesia</title>
</head>

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gambar/salib2.png" data-speed="0.8"></div>
	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title">Profil <span>GMIT LUZ FATUKOA</span></div>
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Beranda</a></li>
								<li>Profil</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Accordions & Tabs -->

<div class="accordions_tabs">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title">
					<h2>Profil Gereja Luz Fatukoa</h2>
				</div>
			</div>
		</div>

		<div class="row accordions_tabs_row">
			<div class="col-lg-12">

				<!-- Accordions -->
				<div class="accordions">

					<div class="elements_accordions">

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center active">
								<div>PROFIL PENDETA</div>
							</div>
							<div class="accordion_panel">
								<?php
								$sql3 = "SELECT nama, foto FROM tbl_pendeta"; // Mengambil semua data di tbl_pendeta
								$result3 = $konek->query($sql3);
								// Cek apakah data ditemukan
								if ($result3->num_rows > 0) {
									// Ambil data dari hasil query
									while ($row3 = $result3->fetch_assoc()) {

										$nama_pendeta = $row3['nama'];
										$foto_pendeta = $row3['foto'];
								?>
										<div style="margin-bottom: 20px;">
											<!-- Tampilkan gambar dan nama pendeta dari database -->
											<p> </p>
											<img src="img/pendeta/<?php echo $foto_pendeta; ?>" width="50%" style="display: block; margin: auto;">
											<p style="text-align: center; font-size: 20px; font-weight: 500; color: #323232;">
												<?php echo $nama_pendeta; ?>
											</p>
										</div>
								<?php
									}
								} else {
									// Tampilkan pesan jika tidak ada data pendeta
									echo "<p style='text-align: center; color: #ff0000;'>Data pendeta tidak ditemukan.</p>";
								}
								?>
								<!-- <div>
									<p> </p>
									<img src="img/pendeta/pendeta1.png" width="50%" style="display: block; margin: auto;">
									<p style="text-align: center; font-size: 20px; font-weight: 500; color: #323232;">Pdt. Marlin Ellen Pie Saiya-Bani, S.Th.</p>
								</div> -->
							</div>
						</div>
						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center">
								<div>SEJARAH GEREJA</div>
							</div>
							<div class="accordion_panel">
								<div>
									<p>NULL</p>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center">
								<div>MAJELIS HARIAN</div>
							</div>
							<div class="accordion_panel">
								<div class="profile_grid">
									<?php
									$sql = "SELECT foto, nama, jabatan FROM tbl_mjh"; // Mengambil 5 profil
									$result = $konek->query($sql);
									// Cek apakah ada hasil
									if ($result->num_rows > 0) {
										// Menampilkan setiap profil
										while ($row = $result->fetch_assoc()) {
											$imagePath = $row['foto'];
											$name = $row['nama'];
											$profession = $row['jabatan']; // Mengambil profesi
											// Menambahkan direktori di depan image_path
											$fullImagePath = 'img/mjh/' . $imagePath;
									?>
											<div class="profile_item">
												<img src="<?php echo htmlspecialchars($fullImagePath); ?>" width="50%" style="display: block; margin: auto;">
												<p style="text-align: center; font-size: 20px; font-weight: 500; color: #323232;">
													<?php echo htmlspecialchars($name); ?><br>
													<span style="font-size: 18px; font-weight: 400; color: #666666;">
														<?php echo htmlspecialchars($profession); ?>
													</span>
												</p>
											</div>
									<?php
										}
									} else {
										echo "<p>Tidak ada profil ditemukan.</p>";
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<!-- Milestones -->

<div class="milestones">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title">
					<h2>Statistik Jemaat</h2>
				</div>
			</div>
		</div>
		<div class="row milestones_container">

			<?php
			// Query untuk mengambil data dari tabel tbl_statistik dengan kolom kode, kategori, dan jumlah
			$sql2 = "SELECT katagori, jumlah FROM tbl_jemaat WHERE katagori IN ('Pendeta', 'Jemaat Pria', 'Jemaat Wanita', 'Total Jemaat')";
			$result2 = $konek->query($sql2);

			// Inisialisasi variabel dengan nilai default 0
			$pendeta = 0;
			$jemaatpria = 0;
			$jemaatwanita = 0;
			$jumlahjemaat = 0;

			// Cek apakah ada data yang ditemukan
			if ($result2->num_rows > 0) {
				// Ambil setiap baris hasil query dan perbarui nilai sesuai dengan kategorinya
				while ($row2 = $result2->fetch_assoc()) {
					switch ($row2['katagori']) {
						case 'Pendeta':
							$pendeta = $row2['jumlah'];
							break;
						case 'Jemaat Pria':
							$jemaatpria = $row2['jumlah'];
							break;
						case 'Jemaat Wanita':
							$jemaatwanita = $row2['jumlah'];
							break;
						case 'Total Jemaat':
							$jumlahjemaat = $row2['jumlah'];
							break;
					}
				}
			}
			?>
			<!-- Milestone -->
			<div class="col-lg-3 milestone_col">
				<div class="milestone text-center">
					<div class="milestone_icon"><img src="images/pendeta.svg" alt=""></div>
					<div class="milestone_counter" data-end-value="<?php echo htmlspecialchars($pendeta); ?>">0</div>
					<div class="milestone_text">Pendeta</div>
				</div>
			</div>

			<!-- Milestone -->
			<div class="col-lg-3 milestone_col">
				<div class="milestone text-center">
					<div class="milestone_icon"><img src="images/jemaat_laki.svg" alt=""></div>
					<div class="milestone_counter" data-end-value="<?php echo htmlspecialchars($jemaatpria); ?>">0</div>
					<div class="milestone_text">Jemaat Pria</div>
				</div>
			</div>

			<!-- Milestone -->
			<div class="col-lg-3 milestone_col">
				<div class="milestone text-center">
					<div class="milestone_icon"><img src="images/jemaat_perempuan.svg" alt=""></div>
					<div class="milestone_counter" data-end-value="<?php echo htmlspecialchars($jemaatwanita); ?>">0</div>
					<div class="milestone_text">Jemaat Wanita</div>
				</div>
			</div>

			<!-- Milestone -->
			<div class="col-lg-3 milestone_col">
				<div class="milestone text-center">
					<div class="milestone_icon"><img src="images/jumlah_jemaat.svg" alt=""></div>
					<div class="milestone_counter" data-end-value="<?php echo htmlspecialchars($jumlahjemaat); ?>">0</div>
					<div class="milestone_text">Total Jemaat</div>
				</div>
			</div>

		</div>
	</div>
</div>
<br><br>

<?php include 'footer.php'; ?>