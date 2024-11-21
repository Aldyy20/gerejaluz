<?php include 'header.php'; ?>

<head>
	<link rel="stylesheet" type="text/css" href="styles/elements.css">
	<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
	<title>Profil - Gereja Injil Kristus Indonesia</title>
</head>

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gambar/profil.jpg" data-speed="0.8"></div>
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
									<h3>I. Injil Masuk di Fatukoa</h3>
									<p>Pada zaman Hindia-Belanda, leluhur kami diajak oleh Raja Kupang untuk berbakti di Amnesi yang sekarang adalah gereja Rehobot Bakunase. Hal ini terbukti dalam sebuah dokumen yang masih tersimpan, yakni surat baptis dari Bapak Titus Nau (Alm) yang dibaptis pada tanggal 12 Februari 1914 di gereja Amnesi. Kemudian Bapak Titus Nau (Alm) mengajak saudara, keluarga dan teman-temannya untuk setiap hari Minggu ikut beribadah di gereja Amnesi. Beberapa dari mereka yang turut beribadah kemudian dibaptiskan di gereja Amnesi antara lain:</p>
									<ol>
										<li>Fai Niuflapu dibaptis dengan nama Frans Niuflapu.</li>
										<li>Fai Taibenu dibaptis dengan nama Ferdinan Taebenu.</li>
										<li>Obe Asanab dibaptis dengan nama Orias Asanab.</li>
										<li>Hati Kolmate dibaptis dengan nama Hermanus Kolmate.</li>
										<li>Bai Lasa dibaptis dengan nama Benediktus Lasa.</li>
									</ol>
									<p>Waktu terus berjalan dan semakin banyak anggota keluarga yang ikut bergereja di Amnesi, hingga sekitar tahun 1946. Kemudian datang permintaan agar Jemaat di Fatukoa tetap beribadah di Fatukoa dan akan dilayani oleh Majelis dari Jemaat Amnesi, sehingga seorang Majelis Jemaat bernama Paulus Bunda diutus untuk melayani Jemaat di Fatukoa, namun karena belum ada tempat untuk beribadah waktu itu, maka temukung Fatukoa Zakarias Nau (Alm) menyediakan rumahnya sebagai tempat beribadah. Semua Jemaat yang beribadah belum mendapatkan pelayanan baptisan, sehingga pada tahun 1947 Pelayanan Baptisan Kudus dilayani oleh Pdt. Chr. Rissi (Alm).</p>

									<h3>II. Gedung Gereja</h3>
									<h4>1. Gedung Darurat</h4>
									<p>Seiring berjalannya waktu; iman Jemaat semakin bertumbuh. Hal ini terbukti dengan bertambahnya jumlah anggota jemaat sehingga tempat untuk beribadah menjadi pergumulan bersama. Atas dasar itu, temukung Fatukoa Zakarias Nau (Alm) dengan sukarela menyerahkan sebidang tanah sekaligus menghimbau warganya (sebagai Jemaat) untuk membangun sebuah rumah ibadah. Pembangunan rumah ibadah ini dilaksanakan tanggal 28 Februari 1948. Bangunan pertama ini menggunakan daun kelapa dan berdinding bambu. Bangunan ini tidak bertahan dan kemudian direnovasi dengan atap alang-alang dan tiang bulat. Bangunan ini kemudian diresmikan pada tanggal 28 Februari 1949.</p>
									<p>Karena rumah ibadah sudah tersedia, maka kemudian raja Kupang meminta Pdt. Esau Amtiran dari So’E-TTS untuk melayani di Jemaat Fatukoa. Masa Pelayanan Pdt. Esau Amtiran di Fatukoa didampingi oleh 8 (delapan) orang jemaat yang ditabiskan sebagai Majelis.</p>
									<ol>
										<li>Bpk. Orias Asanab (Alm).</li>
										<li>Bpk. Hermanus Kolmate (Alm).</li>
										<li>Bapak Hary Lassa (Alm).</li>
										<li>Bpk. Frans Niuflapu (Alm).</li>
										<li>Bpk. Ferdinan Taebenu (Alm).</li>
										<li>Bpk. Benediktus Lasa (Alm).</li>
										<li>Bpk. Thomas Pentau (Alm).</li>
										<li>Bpk. Bernadus Tokael (Alm).</li>
									</ol>
									<p>Setelah gereja diresmikan pada tanggal 28 Februari 1949, maka pada tanggal 1 Maret 1952 dibuka 1 unit SD di Fatukoa dengan nama SD Negeri No.16. Dengan jumlah guru yang sangat terbatas, maka Pdt. Esau Amtiran waktu itu sebagai motivator diberi tugas tambahan untuk mengajar mata pelajaran Agama. Tahun 1954 Pdt. Esau Amtiran dimutasikan dari Jemaat Fatukoa–Klasis Kota Kupang ke Jemaat Noekele–Klasis Kupang Timur, sehingga terjadi kekosongan Pendeta untuk melayani Jemaat Fatukoa. Atas permintaan Jemaat Fatukoa, pada tanggal 18 April 1954, Majelis Sinode GMIT menunjuk salah seorang guru Agama di SD Negeri No. 16 bernama Bpk. Thobias Nenot'Ek untuk melaksanakan tugas tambahan sebagai pelayan Firman Tuhan menggantikan Pdt. Esau Amtiran. Pada tanggal 11 Oktober 1955, Bpk. Thobias Nenot’Ek ditahbiskan sebagai Pendeta baru oleh Ketua Sinode GMIT Pdt. J.L.Ch.Abineno, didampingi oleh Pdt. B.J. Jacob, Ketua Klasis Kota Kupang dan Pdt. Chr. Rissi.</p>
									<h4>2. Bangunan Semi Permanen dan Permanen</h4>
									<p>Sejak diresmikan tanggal 28 Februari 1949, gedung kebaktian Jemaat Fatukoa yang ada masih darurat, dan pada tahun 1955 direnovasi menjadi semi permanen dengan ukuran 20 x 8 M dan diberi nama Jemaat “LUZ” (Kejadian 28 : 19) oleh Pdt. Thobias Nenot’Ek, BA. Pada tahun 1984 direnovasi lagi menjadi permanen dengan ukuran 30 x 8 M. Kondisi ini bertahan sampai tahun 2008, dan karena termakan usia, melalui Sidang Jemaat Tahunan tahun 2009, salah satu keputusan Sidang adalah Pembangunan Gedung Kebaktian Jemaat Luz Fatukoa yang baru yang ditandai dengan Peletakan Batu Pertama oleh Gubernur NTT diwakili oleh Asisten Bidang Pemerintahan, Setda Provinsi NTT pada tanggal 18 Oktober 2009. Pekerjaan pembangunan gedung gereja yang baru dimulai pada tanggal 18 Oktober tahun 2009 sampai selesai pada tahun 2021, dan ditahbiskan oleh Ketua Majelis Sinode GMIT ibu Pdt. Dr. Mery L.Y. Kolimon dan diresmikan oleh Gubernur NTT Bpk. Viktor Bungtilu Laiskodat pada tanggal 14 November 2021 sekaligus Emeritasi Pdt. Cornelis Banobe, S.Th dan serah terima Pdt. Marlin Ellen Pie Saiya-Bani, S.Th.</p>
									<h4>3. Masa Pelayanan 1949 s/d 2024</h4>
									<p><strong>a. Periode 1949-1954:</strong> Jemaat Fatukoa dilayani oleh Pdt. Esau Amtiran, dibantu oleh 4 (empat) orang Penatua dan 4 (empat) orang Diaken.</p>
									<p><strong>b. Periode 1954-22 April 2001:</strong> Jemaat Luz Fatukoa dilayani oleh Pdt. Thobias Nenot’ek, BA, dibantu oleh 7 (tujuh) orang Penatua dan 7 (tujuh) orang Diaken. Pada tahun 1996, tiga rayon pelayanan dalam Jemaat Luz Fatukoa di Rayon 5-7 dibuka 1 unit Pos Pelayanan dan pada tahun 2001 ditingkatkan menjadi 1 Mata Jemaat yaitu Mata Jemaat Istana Kasih Talaka.</p>
									<p><strong>c. Periode 2001-2006:</strong> Jemaat Luz Fatukoa dilayani oleh Pdt. Agustina Padak-Djawa Udju, Sm.Th, dibantu oleh 9 (sembilan) orang Penatua, 9 (sembilan) orang Diaken dan 5 (lima) orang Majelis Jemaat Harian. Pada masa Pelayanan itu, Jemaat Wilayah Fatukoa ditambah 1 Mata Jemaat dari Jemaat Wilayah Oelomin yaitu Jemaat Imanuel Petu pada tanggal 22 April 2001, sehingga Jemaat Wilayah Fatukoa terdiri dari 3 Mata Jemaat yaitu Mata Jemaat Luz Fatukoa, Mata Jemaat Istana Kasih-Talaka dan Mata Jemaat Imanuel Petu.</p>
									<p><strong>d. Periode 2006-2013:</strong> Jemaat Luz Fatukoa dilayani oleh Pdt. Bastiana Y.S.G.M Leopenu-Foekh, Sm.Th, dibantu oleh 8 (delapan) orang Penatua, 16 (enam belas) orang Diaken dan 6 (enam) orang Majelis Jemaat Harian. Pada masa Pelayanan ini Mata Jemaat Imanuel Petu ditingkatkan menjadi Jemaat Mandiri.</p>
									<p><strong>e. Periode 2013-2021:</strong> Jemaat Wilayah Fatukoa dilayani oleh Pdt. Cornelis Banobe, S.Th. Pada masa pelayanan itu, Mata Jemaat Istana Kasih-Talaka ditingkatkan menjadi Jemaat Mandiri pada tanggal 15 Desember 2015, dan sejak 2015 Jemaat Luz Fatukoa adalah jemaat tunggal. Pada tanggal 25 Mei 2017, telah dibuka 1 unit Pos Pelayanan yaitu Pos Pelayanan Bukit Kalvari-Nunuteta dan saat ini telah ditingkatkan menjadi Mata Jemaat, sehingga pada periode itu Jemaat Luz Fatukoa dilayani oleh Pdt. Cornelis Banobe, S.Th, dibantu oleh 12 (dua belas) orang Penatua, 18 (delapan belas) orang Diaken dan 6 (enam) orang Majelis Jemaat Harian. Jumlah Kepala Keluarga: 185, jumlah jiwa 750 jiwa, terdiri dari Laki-laki: 363 jiwa, Perempuan: 387 jiwa.</p>
									<p><strong>f. Periode 2021-sekarang:</strong> Jemaat Luz Fatukoa sejak tanggal 14 November 2021, dilayani oleh Pdt. Marlin Ellen Pie Saiya-Bani, S.Th dibantu oleh 12 (dua belas) orang Penatua, 17 (tujuh belas) orang Diaken, 6 (enam) orang Majelis Jemaat Harian dan 1 orang Calon Vikaris. Jumlah Kepala Keluarga: 203 KK, jumlah jiwa 853 jiwa, terdiri dari Laki-laki: 411 jiwa dan Perempuan: 442 jiwa.</p>
									<h3>Daftar Pendeta</h3>
									<p>Sejak berdirinya Jemaat Luz Fatukoa, Pendeta yang melayani adalah:</p>
									<ol>
										<li>Pdt. Esau Amtiran.</li>
										<li>Pdt. Thobias Nenot'Ek, S.Th.</li>
										<li>Pdt. Agustina Padak-Djawa Udju, Sm.Th.</li>
										<li>Pdt. Bastiana Y.S.G.M Leopenu-Foekh, Sm.Th.</li>
										<li>Pdt. Cornelis Banobe, S.Th.</li>
										<li>Pdt. Marlin Ellen Pie Saiya-Bani, S.Th.</li>
									</ol>
									<p>Yang pernah melayani sebagai Vikaris adalah:</p>
									<ol>
										<li>Pdt. Jimi H.C.Irot.</li>
										<li>Pdt. J.P. Hosang-Ledo, M.Th.</li>
										<li>Pdt. Aleida Y. Salean-Sola, S.Th.</li>
										<li>Pdt. Stefanus Pandie, S.Th.</li>
									</ol>
									<p>Yang pernah melayani sebagai Calon Vikaris adalah:</p>
									<ol>
										<li>Calon Vikaris Rian Pering, S.Th.</li>
										<li>Calon Vikaris Christin Yunita Ekandari Nenotek, S.Si.</li>
										<li>Calon Vikaris Samuel Adoe, S.Th.</li>
										<li>Calon Vikaris Aplomina Nenobahan, S.Th.</li>
									</ol>
									<p>Demikian sejarah singkat gereja Luz Fatukoa, sejak tanggal 28 Februari 1949 hingga 28 Februari 2024.</p>
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