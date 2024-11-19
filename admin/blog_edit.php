<?php
include 'valid.php';
include 'header.php';
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek, "SELECT * FROM tbl_blog WHERE kode='$id'");
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
  <li class="breadcrumb-item active">Edit Berita</li>
  </li>
</ul>

<section class="statistics">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-lg-12">

        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">KATEGORI</label>
          <div class="col-sm-10">
            <input type="text" name="txtkategori" value="<?php echo $data['kategori'] ?>" class="form-control is-valid" placeholder="Kategori Berita">
          </div>
        </div>
        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">JUDUL</label>
          <div class="col-sm-10">
            <input type="text" name="txtjudul" value="<?php echo $data['judul'] ?>" class="form-control is-valid" placeholder="JUDUL NEWS / ARTIKEL">
          </div>
        </div>
        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">KONTEN</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="alamat" placeholder="Konten" name="txtkonten" required><?php echo $data['konten']; ?></textarea>
          </div>
        </div>
        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">TANGGAL POSTING</label>
          <div class="col-sm-10">
            <input type="date" name="txttanggal" value="<?php echo $data['tgl_posting'] ?>" class="form-control is-valid">
          </div>
        </div>
        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">USER</label>
          <div class="col-sm-10">
            <input type="text" name="txtuser" value="<?php echo $data['user'] ?>" class="form-control is-valid" placeholder="Nama Posting ">
          </div>
        </div>
        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">STATUS</label>
          <div class="col-sm-10">
            <input type="text" name="txtstatus" value="<?php echo $data['status'] ?>" class="form-control is-valid" placeholder="Status Berita">
          </div>
        </div>
        <div class="form-group row has-success">
          <label class="col-sm-2 form-control-label">GAMBAR</label>
          <div class="col-sm-10">
            <input type="file" name="txtgambar" class="form-control is-valid" value="<?php echo $data['gambar'] ?>" placeholder="Status Berita">
            <!-- Tampilkan nama file yang sudah ada jika ada -->
            <?php if (!empty($data['gambar'])): ?>
              <p>File yang diunggah: <?php echo $data['gambar']; ?></p>
            <?php endif; ?>
          </div>
        </div>

        <input type="submit" name="btnedit" class="btn btn-primary" value="UPDATE BLOG">
      </div>
    </div>
  </div>
</section>
</form>

<?php
if (isset($_POST["btnedit"])) {
  $txtkategori = $_POST['txtkategori'];
  $txtjudul = $_POST['txtjudul'];
  $txtkonten = $_POST['txtkonten'];
  $txttanggal = $_POST['txttanggal'];
  $txtuser = $_POST['txtuser'];
  $txtstatus = $_POST['txtstatus'];

  // Ambil nama file yang sudah ada di database (untuk digunakan jika file tidak diganti)
  $sql = "SELECT gambar FROM tbl_blog WHERE kode='$id'";
  $result = mysqli_query($konek, $sql);
  $data = mysqli_fetch_assoc($result);
  $gambar_lama = $data['gambar'];  // Nama file lama

  // Jika ada file baru yang diupload
  if ($_FILES['txtgambar']['error'] == 0) {
    $nama_file = $_FILES['txtgambar']['name'];
    $lokasi_file = $_FILES['txtgambar']['tmp_name'];

    // Pindahkan file ke folder yang diinginkan
    move_uploaded_file($lokasi_file, "../img/blog/$nama_file");
  } else {
    // Jika tidak ada file baru, gunakan file lama
    $nama_file = $gambar_lama;
  }

  // Update data di database
  $edit = mysqli_query($konek, "UPDATE tbl_blog SET kategori='$txtkategori',judul='$txtjudul',konten='$txtkonten',tgl_posting='$txttanggal',user='$txtuser',status='$txtstatus',gambar='$nama_file' WHERE kode='$id'");

  if ($edit) {
    echo "<script type='text/javascript'>
            document.location.href = 'blog_tampil.php';
          </script>";
  } else {
    echo "Terjadi kesalahan saat mengupdate data.";
  }
}
?>


<?php include 'footer.php'; ?>