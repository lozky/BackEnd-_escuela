
<?php
require '../controlator/iniciar_sesiones.php';
?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>- Sistema Escolar -</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
<link rel="stylesheet" href="../css/estilo_formularios.css">
<link  href="../css/dashboard.css" rel="stylesheet">
   
   
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Sistema Escolar</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../controlator/logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <h6>
            <a class="link-secondary href="#" aria-label="Add a new report"  >
            <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <li class="nav-item">
            
            <a class="nav-link active" aria-current="page" href="home.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form_alumno.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Alumnos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forrm_docente.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Docentes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form_materia.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Materias
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="mostrar_alumno.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Mostar Alumnos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mostrar_docente.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Mostrar Docentes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mostrar_materia.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Mostrar materia
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Asignar materia a alumnos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Asignar materia a Docentes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Informe General
            </a>
          </li>
        </ul>
      </div>
    </nav>
<!----------------aqui va codigo externo---->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mostrar Docentes</h1>
      </div>

      <?php
      $mostrar_dosente = "SELECT * from docente ";

        echo'<table class="table">
        <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Numero de empleado</th>
          <th scope="col">Nombre</th>
          <th scope="col">Correo</th>
          <th scope="col">Perfil</th>
          <th scope="col">Direccion</th>
          <th scope="col">Telefono</th>
        </tr>
        </thead>';
        if($result = $db_connection -> query($mostrar_dosente)){
          while($row = $result -> fetch_assoc()){
            $id = $row["id_docente"];
            $numero = $row["num_empledo"];
            $nombre = $row["nombre"];
            $email = $row["email"];
            $perfil = $row["perfil"];
            $direccion = $row["direccion"];
            $telefono = $row["telefono"];


        echo'<tbody>
        <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$numero.'</td>
          <td>'.$nombre.'</td>
          <td>'.$email.'</td>
          <td>@'.$perfil.'</td>
          <td>@'.$direccion.'</td>
          <td>@'.$telefono.'</td>
        </tr>
        </tbody>';
          } 
        $result->free();
        }

      ?>
     </table>
    </main>
<!----------------aqui termina codigo externo---->

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="../js/dashboard.js"></script>
     
    </body>
</html>


