<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/styles.css">
</head>
<body>

  <div class="sidenav">
    <div class="login-main-text">
      <h2>BLOG<br>Registrate</h2>
      <p>Autenticate o registrate.</p>
    </div>
  </div>

  <div class="main">
    <div class="col-md-6 col-sm-12">
      <div class="register-form">
        <form role="form" action="signup" method="POST">
          <!-- condición de mensaje -->
          <?php if($showMsg) : ?>
            <div class="alert alert-danger" role="alert">
              <small><?php echo $msg; ?></small>
            </div>
          <?php endif; ?>

          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" placeholder="Ingresa tu nombre" name="nombre" required>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Ingresa tu correo electronico" name="correo" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="password" required>
          </div>

          <input type="submit" class="btn btn-black" value="REGISTRAR">

          <button type="submit" class="btn btn-secondary"><a href="./login">IR A INICIO SESIÓN</a></button>

        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>res/js/jquery-3.4.1.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/bootstrap.min.js"></script>

</body>
</html>
