<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TMS Nusindo | Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page dark-mode">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>TMS</b>Nusindo</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register, Choose Your Profile</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <a href="<?php echo base_url(''); ?>Reguser/form/tns20000" class="btn btn-primary btn-block">Technician</a>  
        </div>
        <div class="input-group mb-3">
          <a href="<?php echo base_url(''); ?>Reguser/form/tns30000" class="btn btn-primary btn-block">Marketing</a>
        </div>
        <div class="input-group mb-3">
          <a href="<?php echo base_url(''); ?>Reguser/form/tns40000" class="btn btn-primary btn-block">Customer</a>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-8">
            <a href="<?php echo base_url(); ?>login" class="text-center">Back</a>
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-4">
            
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url(''); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(''); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(''); ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
