<?php
include 'valid.php';
include '../koneksi.php';

if (isset($_GET['id'])) {
    // Pastikan id yang diterima adalah string yang aman
    $id = mysqli_real_escape_string($konek, $_GET['id']);

    // Ambil data gambar sebelum menghapus
    $qry = mysqli_query($konek, "SELECT foto FROM tbl_pendeta WHERE kode='$id'");

    if ($qry && mysqli_num_rows($qry) > 0) {
        $data = mysqli_fetch_array($qry);

        $lokasi = $data['foto']; // Sesuaikan dengan nama kolom yang menyimpan nama file
        $hapus_file = "../img/pendeta/$lokasi"; // Sesuaikan dengan path file yang benar

        // Hapus file dari server
        if (file_exists($hapus_file)) {
            unlink($hapus_file);
        }

        // Hapus data dari database
        mysqli_query($konek, "DELETE FROM tbl_pendeta WHERE kode='$id'");

        // Redirect ke halaman yang sesuai
        header('Location: pendeta_tampil.php'); // Sesuaikan dengan halaman yang diinginkan
        exit; // Pastikan untuk keluar setelah melakukan redirect
    } else {
        // Jika tidak ada data ditemukan
        echo "Data tidak ditemukan.";
    }
} else {
    // Jika id tidak ada dalam parameter GET
    echo "ID tidak valid.";
}
