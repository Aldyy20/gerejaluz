<?php
include 'valid.php';
include 'header.php'; ?>
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
    <li class="breadcrumb-item active"> Tambah Pendata</li>
    </li>
</ul>

<section class="statistics">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-lg-12">
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">NAMA</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnama" class="form-control is-valid" placeholder="Nama Pendeta">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">FOTO</label>
                    <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" placeholder="Gambar Pendeta">
                    </div>
                </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="Tambah Pendeta">
            </div>
        </div>
    </div>
</section>
</form>




<?php
if (isset($_POST["btnsimpan"])) {
    //$txtkategori = mysql_real_escape_string($_POST['txtkategori']);
    $txtnama = $_POST['txtnama'];
    $nama_foto   = $_FILES['txtgambar']['name'];
    $lokasi_file = $_FILES['txtgambar']['tmp_name'];
    $simpan = mysqli_query($konek, "INSERT INTO tbl_pendeta (nama,foto) VALUES ('$txtnama','$nama_foto')");
    $target_file = "../img/pendeta/" . $nama_foto;
    if (!empty($lokasi_file)) {
        move_uploaded_file($lokasi_file, "../img/pendeta/$nama_foto");
        echo "Data Berhasil di simpan";
?>
        <script type="text/javascript"> 
            alert('Data Anda Berhasil di Simpan');
            document.location.href = "pendeta_add.php";
        </script>
<?php
    }
}
?>






<?php include 'footer.php'; ?>