<?php
include 'valid.php';
include 'header.php';
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek, "SELECT * FROM tbl_jemaat WHERE kode='$id'");
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
    <li class="breadcrumb-item active">Edit Statistik</li>
    </li>
</ul>

<section class="statistics">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-lg-12">

                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">Katagori *</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtkategori" value="<?php echo $data['katagori'] ?>" class="form-control is-valid" placeholder="Katagori">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">Jumlah *</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtjumlah" value="<?php echo $data['jumlah'] ?>" class="form-control is-valid" placeholder="Jumlah">
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
    $txtkategori = $_POST['txtkategori'];
    $txtjumlah = $_POST['txtjumlah'];
    $edit = mysqli_query($konek, "UPDATE tbl_jemaat SET katagori='$txtkategori', jumlah='$txtjumlah' WHERE kode='$id'");

    if ($edit) {
        // Redirect menggunakan JavaScript jika berhasil
        echo "<script type='text/javascript'>
                document.location.href = 'jemaat_tampil.php';
              </script>";
    } else {
        echo "Terjadi kesalahan";
    }
}
?>

<?php include 'footer.php'; ?>