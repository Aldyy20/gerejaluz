<?php
include 'valid.php';
include 'header.php';
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek, "SELECT * FROM tbl_pendeta WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
<section class="statistics">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-lg-12">
                <form method="POST" enctype="multipart/form-data">
            </div>
</section>
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="master.php">Home</a></li>
    <li class="breadcrumb-item active">Master
    <li class="breadcrumb-item active">Edit Pendeta</li>
    </li>
</ul>

<section class="statistics">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-lg-12">

                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">Nama Pendeta *</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnama" value="<?php echo $data['nama'] ?>" class="form-control is-valid" placeholder="Nama Pendeta">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">Foto Pendeta</label>
                    <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" value="<?php echo $data['foto'] ?>" placeholder="Foto Pendeta">
                        <!-- Tampilkan nama file yang sudah ada jika ada -->
                        <?php if (!empty($data['foto'])): ?>
                            <p>File yang diunggah: <?php echo $data['foto']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <input type="submit" name="btnedit" class="btn btn-primary" value="UPDATE">
            </div>
        </div>
    </div>
</section>
</form>

<?php
if (isset($_POST["btnedit"])) {
    $txtnama = $_POST['txtnama'];

    // Periksa apakah file baru diunggah
    if ($_FILES['txtgambar']['error'] == 0) {
        // Jika ada file baru, proses file dan simpan
        $nama_foto = strtolower($_FILES['txtgambar']['name']);
        $lokasi_file = $_FILES['txtgambar']['tmp_name'];

        // Pastikan file diupload dengan benar
        if (move_uploaded_file($lokasi_file, "../img/pendeta/$nama_foto")) {
            // Jika upload berhasil, simpan nama file baru ke database
            $foto_file = $nama_foto;
        } else {
            echo "Terjadi kesalahan saat mengupload file.";
            // Jika upload gagal, tetap menggunakan file lama
            $foto_file = $data['foto'];
        }
    } else {
        // Jika tidak ada file yang diupload, tetap gunakan file yang ada di database
        $foto_file = $data['foto']; // Nama file lama
    }

    // Update data lainnya
    $edit = mysqli_query($konek, "UPDATE tbl_pendeta SET nama='$txtnama', foto='$foto_file' WHERE kode='$id'");

    if ($edit) {
        echo "<script>document.location.href = 'pendeta_tampil.php';</script>";
    } else {
        echo "Terjadi kesalahan saat mengupdate data.";
    }
}
?>

<?php include 'footer.php'; ?>