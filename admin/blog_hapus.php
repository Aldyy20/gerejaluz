<?php
include 'valid.php';
include '../koneksi.php';

if (isset($_GET['id'])) {
	// Menggunakan prepared statement untuk menghindari SQL Injection
	$stmt = $konek->prepare("SELECT gambar FROM tbl_blog WHERE kode = ?");
	$stmt->bind_param("s", $_GET['id']);
	$stmt->execute();
	$result = $stmt->get_result();

	// Cek apakah ada data yang ditemukan
	if ($data = $result->fetch_assoc()) {
		$lokasi = $data['gambar'];
		$hapus_gambar = "../img/blog/$lokasi";

		// Cek apakah file gambar ada sebelum menghapus
		if (file_exists($hapus_gambar)) {
			unlink($hapus_gambar);
		}

		// Menghapus data dari tabel
		$stmt = $konek->prepare("DELETE FROM tbl_blog WHERE kode = ?");
		$stmt->bind_param("s", $_GET['id']);
		$stmt->execute();
	}

	// Redirect ke halaman blog_tampil.php
	header('Location: blog_tampil.php');
	exit();
}
