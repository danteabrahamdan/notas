<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Perfil</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style>
    .img-center-v {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .w170 {
      display: flex;
      width: 170px;
      height: 170px;
      border-radius: 50%;
    }    
  </style>
</head>
<body style="padding-top: 56px;">

	<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./">NOTAS.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home">Inicio</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="account">Cuenta
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>usuarios/logout">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <h1 class="my-4" style="text-align: center;">Perfil
          <small>de usuario</small>
        </h1>

        <div>
          <div class="card-mb-4">
            <div class="img-center-v">
              <img src="<?php echo base_url(); ?>res/img/no-image.png" alt="imagen perfil" class="w170">
            </div>
            <br>
            <p>Nombre de usuario: <strong><?php echo $nombre; ?></strong></p>
            <p>Correo electronico: <strong><?php echo $correo; ?></strong></p>

            <?php if($showMsg) : ?>
              <div class="alert alert-<?php echo $tipo; ?>" role="alert">
                <small><?php echo $msg; ?></small>
              </div>
            <?php endif; ?>

            <form role="form" action="cambiopwd" method="POST">
              <div class="form-group">
                <label for="exampleFormControlInput1">Ingresa tu contraseña actual</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa tu contraseña actual" name="password" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput2">Nueva contraseña</label>
                <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="Ingresa tu nueva contraseña" name="passwordnew" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput3">Vuelve a ingresar tu nueva contraseña</label>
                <input type="password" class="form-control" id="exampleFormControlInput3" placeholder="Vuelve a ingresar tu nueva contraseña" name="passwordrenew" required>
              </div>
              <div class="form-group">
                <input type="submit" value="Cambiar contraseña" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Información</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                  <li>
                    Fecha creacion: <strong><?php echo $created; ?></strong>
                  </li>
                  <li>
                    Ult. actualización: <strong><?php echo $updated; ?></strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white" id="presYear">Copyright &copy; Mis Notas.</p>
    </div>
  </footer>

	<!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>res/js/jquery-3.4.1.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/app.js"></script>
  
</body>
</html>