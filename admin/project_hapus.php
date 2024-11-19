<?php
include 'valid.php';
include '../koneksi.php';

if (isset($_GET['id'])) {
	// Menggunakan prepared statement untuk mencegah SQL Injection
	$id = $_GET['id'];

	// Mencari data file berdasarkan id
	$qry = mysqli_query($konek, "SELECT * FROM tbl_file WHERE kode='$id'");

	if ($qry) {
		$data = mysqli_fetch_array($qry);

		// Pastikan data ditemukan
		if ($data) {
			// Menghapus data dari tabel
			$delete_qry = mysqli_query($konek, "DELETE FROM tbl_file WHERE kode='$id'");
			if (!$delete_qry) {
				// Tampilkan error jika query delete gagal
				echo "Error deleting record: " . mysqli_error($konek);
			}
		} else {
			echo "Data not found.";
		}
	} else {
		// Tampilkan error jika query select gagal
		echo "Error fetching data: " . mysqli_error($konek);
	}

	// Redirect ke halaman project_tampil.php
	header('Location: project_tampil.php');
	exit();
}
