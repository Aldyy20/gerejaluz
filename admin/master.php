<?php
include 'valid.php';
include 'header.php';
?>

<!-- Counts Section -->
<br>
<section class="statistics">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-lg-4">
        <!-- Income-->
        <div class="card income text-center">
          <div class="sidenav-header-inner text-center"><img src="../icon.png" alt="person" class="img-fluid rounded-circle" style="width: 50%; height: auto;">
          </div>
          <strong class=" text-primary">SELAMAT DATANG ADMIN</strong>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- Monthly Usage-->
        <?php
        $sql2 = "SELECT katagori, jumlah FROM tbl_jemaat WHERE katagori IN ('Total Jemaat')";
        $result2 = $konek->query($sql2);
        $jumlahjemaat = 0;
        if ($result2->num_rows > 0) {
          // Ambil setiap baris hasil query dan perbarui nilai sesuai dengan kategorinya
          while ($row2 = $result2->fetch_assoc()) {
            switch ($row2['katagori']) {
              case 'Total Jemaat':
                $jumlahjemaat = $row2['jumlah'];
                break;
            }
          }
        }
        ?>
        <div class="card data-usage">
          <div class="card income text-center">
            <div class="icon"><i class="icon-line-chart"></i></div>
            <div class="number"><?php echo htmlspecialchars($jumlahjemaat); ?></div><strong class="text-primary">JUMLAH TOTAL JEMAAT</strong>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- User Actibity-->
        <?php
        // Ambil data total laporan dari database
        $sql2 = "SELECT total FROM tbl_total WHERE kode = 1"; // Misalnya id = 1
        $result2 = mysqli_query($konek, $sql2);
        $data2 = mysqli_fetch_assoc($result2);
        $total_laporan = $data2['total'];

        // Periksa apakah form disubmit dan ada aksi (Tambah/Kurang)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $nominal = $_POST['nominal'];
          $action = $_POST['action'];

          // Validasi input
          if (!is_numeric($nominal)) {
            echo '<script>alert("Nominal harus berupa angka.")</script>';
          } else {
            // Lakukan penambahan atau pengurangan berdasarkan aksi
            if ($action == 'tambah') {
              $total_laporan += $nominal;
            } elseif ($action == 'kurang') {
              $total_laporan -= $nominal;
            }

            // Update nilai total laporan di database
            $sql_update = "UPDATE tbl_total SET total = $total_laporan WHERE kode = 1";
            if (mysqli_query($konek, $sql_update)) {
              echo '<script>alert("Data berhasil diperbarui.")</script>';
            } else {
              echo '<script>alert("Gagal mengupdate data.")</script>';
            }
          }
        }
        ?>

        <div class="card user-activity">
          <h2 class="display h4">Total Laporan Keuangan</h2>
          <div class="number" id="totalLaporan"><?php echo 'Rp. ' . number_format($total_laporan, 0, ',', '.'); ?></div>

          <form method="POST">
            <!-- Tombol untuk menambah dan mengurangi angka -->
            <input type="number" name="nominal" class="form-control" placeholder="Masukkan nominal" required>
            <p> </p>
            <button type="submit" name="action" value="tambah" class="btn btn-success">Tambah</button>
            <button type="submit" name="action" value="kurang" class="btn btn-danger">Kurang</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Updates Section -->
<br>
<script src="js/total.js"></script>
<?php include 'footer.php'; ?>