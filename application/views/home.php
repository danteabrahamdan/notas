<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Notas</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style>
    .float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#000;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      box-shadow: 2px 2px 3px rgba(99, 99, 99, .4);
    }

    .my-float{
      margin-top:22px;
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
        <h1 class="my-4">Todas las notas
          <small>actuales</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">Titulo nota</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="./post" class="btn btn-primary">Ver más &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Creado el 1 de Enero del 2021 por 
            <a href="#">Lorem</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
						<h2 class="card-title">Titulo nota</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="./post" class="btn btn-primary">Ver más &rarr;</a>
          </div>
          <div class="card-footer text-muted">
						Creado el 2 de Enero del 2021 por 
            <a href="#">Lorem</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
						<h2 class="card-title">Titulo nota</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="./post" class="btn btn-primary">Ver más &rarr;</a>
          </div>
          <div class="card-footer text-muted">
						Creado el 5 de Enero del 2021 por 
            <a href="#">Lorem</a>
          </div>
        </div>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Buscar nota</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Parametros de busqueda">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Buscar</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Ver todas</a>
                  </li>
                  <li>
                    <a href="#">Por fecha</a>
                  </li>
                  <li>
                    <a href="#">Por descripción</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Eliminadas</a>
                  </li>
                  <li>
                    <a href="#">Borrar todo</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Usuario</h5>
          <div class="card-body">
            <h6>Nombre: <?php echo $this->session->userdata('nombre'); ?></h6>
            <h6>Correo: <?php echo $this->session->userdata('correo'); ?></h6>
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
  
  <!-- ------------------------------------------------------------------------- -->
  <!--                                   Nuevo código                            -->
  <!-- ------------------------------------------------------------------------- -->
  <a href="#" class="float" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus my-float"></i>
  </a>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nueva Nota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" action="" method="POST">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre de la nota</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa un titulo para la nota" name="titulo" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción de la nota</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" required></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <input type="submit" value="Guardar" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------------------------------------------------- -->
  <!--                               fin Nuevo código                            -->
  <!-- ------------------------------------------------------------------------- -->

	<!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>res/js/jquery-3.4.1.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/app.js"></script>
  
</body>
</html>