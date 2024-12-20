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
  <li class="breadcrumb-item"><a href="master.php"></a></li>
  <li class="breadcrumb-item active">Master
  <li class="breadcrumb-item active">Laporan Keuangan</li>
  </li>
</ul>

<section class="statistics">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-lg-12">

        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">Nama *</label>
          <div class="col-sm-10">
            <input type="text" name="txtnama" class="form-control is-valid" placeholder="Nama Laporan Keuangan">
          </div>
        </div>
        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">TANGGAL LAPORAN</label>
          <div class="col-sm-10">
            <input type="date" name="txttanggal" class="form-control is-valid">
          </div>
        </div>
        <!-- <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">Link Gambar</label>
          <div class="col-sm-10">
            <input type="text" name="txtalamat" class="form-control is-valid" value="-" placeholder="Alamat Link Gambar">
          </div>
        </div> -->
        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">File Laporan *</label>
          <div class="col-sm-10">
            <input type="file" name="txtgambar" class="form-control is-valid" placeholder="File Laporan">
          </div>
        </div>

        <input type="submit" name="btnsimpan" class="btn btn-primary" value="SIMPAN">
      </div>
    </div>
  </div>
</section>
</form>

<?php

if (isset($_POST["btnsimpan"])) {
  $txtnama = $_POST['txtnama'];
  $txttanggal = $_POST['txttanggal'];
  $nama_file   = strtolower($_FILES['txtgambar']['name']);
  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
  $simpan = mysqli_query($konek, "INSERT INTO tbl_laporan (nama,tanggal,laporan) VALUES ('$txtnama','$txttanggal','$nama_file')");
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file, "../laporan/pdf/$nama_file");
    echo "Data Berhasil di simpan";
?>
    <script type="text/javascript">
      alert('Data Anda Berhasil di Simpan');
      document.location.href = "folio_tampil.php";
    </script>
<?php
  }
}
?>






<?php include 'footer.php'; ?>