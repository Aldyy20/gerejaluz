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
    <li class="breadcrumb-item active"> Tambah MJH</li>
    </li>
</ul>

<section class="statistics">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-lg-12">

                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">NAMA</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnama" class="form-control is-valid" placeholder="Nama MJH">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">JABATAN</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtjabatan" class="form-control is-valid" placeholder="Jabatan MJH">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">FOTO</label>
                    <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" placeholder="Gambar MJH">
                    </div>
                </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="Tambah MJH">
            </div>
        </div>
    </div>
</section>
</form>




<?php
if (isset($_POST["btnsimpan"])) {
    //$txtkategori = mysql_real_escape_string($_POST['txtkategori']);
    $txtnama = $_POST['txtnama'];
    $txtjabatan = $_POST['txtjabatan'];
    $nama_file   = $_FILES['txtgambar']['name'];
    $lokasi_file = $_FILES['txtgambar']['tmp_name'];
    $simpan = mysqli_query($konek, "INSERT INTO tbl_mjh (nama,jabatan,foto) VALUES ('$txtnama','$txtjabatan','$nama_file')");
    if (!empty($lokasi_file)) {
        move_uploaded_file($lokasi_file, "../img/mjh/$nama_file");
        echo "Data Berhasil di simpan";
?>
        <script type="text/javascript">
            alert('Data Anda Berhasil di Simpan');
            document.location.href = "mjh_add.php";
        </script>
<?php
    }
}
?>






<?php include 'footer.php'; ?>