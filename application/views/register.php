<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Register</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-60x60.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/admin/dist/assets/favicon/apple-icon-180x180.png');?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/admin/dist/assets/favicon/android-icon-192x192.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/admin/dist/assets/favicon/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/admin/dist/assets/favicon/favicon-96x96.png');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/admin/dist/assets/favicon/favicon-16x16.png');?>">
    <link rel="manifest" href="<?php echo base_url('assets/admin/dist/assets/favicon/manifest.json');?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png');?>">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/vendors/simplebar/css/simplebar.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/vendors/simplebar.css');?>">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/admin/dist/css/style.css');?>" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="<?php echo base_url('assets/admin/dist/css/examples.css');?>" rel="stylesheet">
  </head>
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                <h1>Registrasi</h1>
                <p class="text-medium-emphasis">Buat akunmu</p>
                <form action="<?php echo site_url('auth/registrasi');?>"  method="post">
                <div class="form-group mb-3">
                  <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Nama Lengkap" value="<?= set_value('fullname');?>">
                  <small class="text-danger"><?= form_error('fullname');?></small>
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="<?= set_value('username');?>">
                  <small class="text-danger"><?= form_error('username');?></small>
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email');?>">
                  <small class="text-danger"><?= form_error('email');?></small>
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" type="password" id="pass1" name="pass1" placeholder="Password">
                  <small class="text-danger"><?= form_error('pass1');?></small>
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" type="password" id="pass2" name="pass2" placeholder="Ulang password">
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" type="text" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat');?>">
                  <small class="text-danger"><?= form_error('alamat');?></small>
                </div>
                <div class="form-group mb-4">
                  <input class="form-control" type="text" id="telepon" name="telepon" placeholder="No. Telepon" value="<?= set_value('telepon');?>">
                  <small class="text-danger"><?= form_error('telepon');?></small>
                </div>
                <div class="row">
                  <div class="input-group">
                  <button class="btn btn-block btn-success input-group" type="submit">Daftarkan akun</button>
                  </div>
                </div>
                </form>
                <br>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Lupa password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?php echo base_url('auth');?>">Sudah punya akun? Login!</a>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('assets/admin/dist/vendors/@coreui/coreui/js/coreui.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/dist/vendors/simplebar/js/simplebar.min.js');?>"></script>
    <script>
    </script>

  </body>
</html>