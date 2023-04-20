<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
    <link rel="shortcut icon" href="/assets/img/JNDA.png"  type="image/x-icon">
    <link rel="stylesheet" href="/assets/js/popper.min.js">
    <link href="/assets/css/sign-in.css" rel="stylesheet">
</head>
<body>
    <!--Menu-->

      <header class="p-3 bg-dark text-white">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="JPDA"> <img src="assets/img/logo_jnda.png" width="100" height="55" ></use></svg>
            </a>
            
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/inicio" class="nav-link px-2 text-white" >Inicio</a></li>
                <li><a href="/artesanados" class="nav-link px-2 text-white">Artesanados</a></li>
                <li><a href="/contactos" class="nav-link px-2 text-white">Contactos</a></li>
            </ul>
                
        <div class="text-end">
        <a href='/login' class="btn btn-outline-light me-2">Iniciar Sesión</a>
        <a href='/registro' class="btn btn-warning">Registrarse</a>
        </div>


        </div>
        </div>
    </header>
     <!--Informacion
        <div class="contenedor2">
        <img src="assets/img/fondo1.jpg" alt = "bootstrap" windth="100" height="537">-->

   <?=$contenido?>
     
    
    <!--Pie de pagina-->   
    <footer class="footer mt-auto py-3 bg-light text-center">
      <div class="container">
        <span class="text-muted">BOLEM Guaranda 2023</span>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <script src="assets/js/bootstrap.min.js"></script>
    <script src = "assets/js/pooper.min.js" ></script>
</body>
</html>