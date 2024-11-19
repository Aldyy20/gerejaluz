<?php
include 'valid.php';
include '../koneksi.php';

if (isset($_GET['id'])) {
	// Pastikan id yang diterima adalah string yang aman
	$id = mysqli_real_escape_string($konek, $_GET['id']);

	// Ambil data gambar sebelum menghapus
	$qry = mysqli_query($konek, "SELECT laporan FROM tbl_laporan WHERE kode='$id'");

	if ($qry && mysqli_num_rows($qry) > 0) {
		$data = mysqli_fetch_array($qry);

		$lokasi = $data['laporan'];
		$hapus_laporan = "../laporan/pdf/$lokasi";

		// Hapus gambar dari server
		if (file_exists($hapus_laporan)) {
			unlink($hapus_laporan);
		}

		// Hapus data dari database
		mysqli_query($konek, "DELETE FROM tbl_laporan WHERE kode='$id'");

		// Redirect ke halaman folio_tampil.php
		header('Location: folio_tampil.php');
		exit; // Pastikan untuk keluar setelah melakukan redirect
	} else {
		// Jika tidak ada data ditemukan, Anda bisa mengarahkan ke halaman error atau menampilkan pesan
		echo "Data tidak ditemukan.";
	}
} else {
	// Jika id tidak ada dalam parameter GET
	echo "ID tidak valid.";
}
