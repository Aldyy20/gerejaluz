<?php
include '../koneksi.php'; // Pastikan koneksi ke database sudah benar

if (isset($_POST['total_laporan'])) {
    $total_laporan = $_POST['total_laporan'];

    // Update data di database
    $sql = "UPDATE tbl_total SET total = '$total_laporan' WHERE kode = 1"; // Misalnya id = 1
    if (mysqli_query($konek, $sql)) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Terjadi kesalahan";
    }
}
