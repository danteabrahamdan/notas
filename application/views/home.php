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
            <a href="./post" class="btn btn-primary">Read More &rarr;</a>
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
            <a href="./post" class="btn btn-primary">Read More &rarr;</a>
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
            <a href="./post" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
						Creado el 5 de Enero del 2021 por 
            <a href="#">Lorem</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

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

	<!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>res/js/jquery-3.4.1.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>res/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>res/js/bootstrap.min.js"></script>

</body>
</html>