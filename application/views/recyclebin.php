<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Papelera de reciclaje</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
          <li class="nav-item active">
            <a class="nav-link" href="./">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cuenta</a>
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
        <h1 class="my-4">Papelera de reciclaje
          <small>notas borradas</small>
        </h1>

        <!-- Notas -->
        <?php foreach($notas as $row){ ?>
          <div>
            <div class="card mb-4">
              <div class="card-body">
                <h2 class="card-title"><?php echo $row['titulo']; ?></h2>
                <p class="card-text"><?php echo $row['descripcion']; ?></p>
                <a href="pages/restore/<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-undo"></i></a>
                <button class="btn btn-danger" data-target="#modalBorrarNota<?php echo $row['id']; ?>" data-toggle="modal">
                  <i class="fa fa-recycle"></i>
                </button>
              </div>
              <div class="card-footer text-muted">
                Actualizado el <?php echo $row['updated']; ?>
              </div>
            </div>

            <div class="modal fade" id="modalBorrarNota<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    ¿Desea eliminar permanentemente la nota, esta acción no es reversible?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a href="pages/borrarItemDef/<?php echo $row['id']; ?>" class="btn btn-primary" id="btnConfirmDelItem">Aceptar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <div class="card my-4">
          <h5 class="card-header">Acciones</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="pages/restoreall">Restaurar todo</a>
                  </li>
                  <li>
                    <a href="#" data-target="#modalBorrarTodoDef" data-toggle="modal">Vaciar todo</a>
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

  <div class="modal fade" id="modalBorrarTodoDef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          ¿Deseas eliminar permanentemente todas las notas, esta accion no es reversible?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <a href="pages/deleteall" class="btn btn-primary" id="btnConfirmDelItem">Aceptar</a>
        </div>
      </div>
    </div>
  </div>

	<!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>res/js/jquery-3.4.1.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/app.js"></script>
  
</body>
</html>