<?php
include '../koneksi.php';
session_start();

if (!isset($_SESSION['nama'])) {
	header("location:index.php");
	exit();
} else {
?>
<?php } ?>