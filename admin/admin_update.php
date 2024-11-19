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
    <li class="breadcrumb-item active"> Tambah Admin</li>
    </li>
</ul>

<section class="statistics">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-lg-12">

                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">USERNAME LAMA</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtoldusername" class="form-control is-valid" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">PASSWORD LAMA</label>
                    <div class="col-sm-10 input-group">
                        <input type="password" name="txtoldpassword" id="txtoldpassword" class="form-control is-valid" placeholder="Password">
                        <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('txtoldpassword', this)">
                            <i class="fa fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">USERNAME BARU</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtusername" class="form-control is-valid" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">PASSWORD BARU</label>
                    <div class="col-sm-10 input-group">
                        <input type="password" name="txtpassword" id="txtpassword" class="form-control is-valid" placeholder="Password">
                        <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('txtpassword', this)">
                            <i class="fa fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">KONFIRMASI PASSWORD BARU</label>
                    <div class="col-sm-10 input-group">
                        <input type="password" name="txtkonfir" id="txtkonfir" class="form-control is-valid" placeholder="Konfirmasi Password">
                        <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('txtkonfir', this)">
                            <i class="fa fa-eye"></i>
                        </button>
                    </div>
                </div>


                <input type="submit" name="btnsimpan" class="btn btn-primary" value="Update Admin">
            </div>
        </div>
    </div>
</section>
</form>




<?php
if (isset($_POST["btnsimpan"])) {
    $txtoldusername = $_POST['txtoldusername'];
    $txtoldpassword = md5($_POST['txtoldpassword']); // Password lama di-hash
    $txtusername = $_POST['txtusername'];
    $txtpassword = $_POST['txtpassword'];
    $txtkonfir = $_POST['txtkonfir'];

    // Periksa apakah username dan password lama cocok
    $cek_lama = mysqli_query($konek, "SELECT * FROM tbl_user WHERE user_name='$txtoldusername' AND password='$txtoldpassword'");
    if (mysqli_num_rows($cek_lama) > 0) {
        // Jika username dan password lama cocok
        if ($txtpassword === $txtkonfir) {
            $txtpassmd5 = md5($txtpassword); // Hash password baru

            // Update username dan password baru
            $update = mysqli_query($konek, "UPDATE tbl_user SET user_name='$txtusername', password='$txtpassmd5' WHERE user_name='$txtoldusername' AND password='$txtoldpassword'");

            if ($update) {
                echo "<script>alert('Data berhasil diperbarui!');</script>";
            } else {
                echo "<script>alert('Gagal memperbarui data: " . mysqli_error($konek) . "');</script>";
            }
        } else {
            // Password baru dan konfirmasi tidak cocok
            echo "<script>alert('Password baru dan konfirmasi password tidak cocok!');</script>";
        }
    } else {
        // Username atau password lama tidak cocok
        echo "<script>alert('Username atau password lama tidak sesuai!');</script>";
    }

    // Menutup koneksi
    mysqli_close($konek);
}
?>








<?php include 'footer.php'; ?>