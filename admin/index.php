<?php
session_start();
session_destroy();
include 'header2.php'; ?>

<head>
  <link rel="stylesheet" type="text/css" href="../styles/services.css">
  <link rel="stylesheet" type="text/css" href="../styles/services_responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>LOGIN - Admin LUZ Fatukoa</title>
  <style type="text/css">

  </style>
</head>

<div class="features">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="features_container d-flex flex-row flex-wrap align-items-start justify-content-space-evenly">

          <div class="signin-signup">
            <form action="login.php" method="POST" class="sign-in-form">
              <h2 class="title">LOGIN</h2>
              <?php
              // Cek jika ada parameter error pada URL
              if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p style='color:red;'>Username atau password salah. Silakan coba lagi.</p>";
              }
              ?>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="txtusername" placeholder="Username" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="txtpassword" placeholder="Password" />
              </div>
              <input type="submit" name="btnlogin" value="Login" class="btn solid" />
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer2.php'; ?>