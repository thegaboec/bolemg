<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
    <link rel="shortcut icon" href="/assets/img/JNDA.png"  type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/js/popper.min.js">
    
</head>
<body> 
 <!--Menu-->
<div>
     <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="JPDA"> <img src="/assets/img/logo_jnda.png" width="100" height="55" ></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="/artesano/inicio" class="nav-link px-2 text-white">Inicio</a></li>             
              <li><a href="/artesano/perfil" class="nav-link px-2 text-start active ">Perfil Laboral</a></li>
              <li><a href="/artesano/cambiarcontraseña" class="nav-link px-2 text-white">Cambiar Contraseña</a></li>
          </ul>                
            <div class="text-end">
                <a href='/cerrar_cesion' class="btn btn-outline-danger me-2">Cerrar Sesión</a>
            </div>
      </div>
        </header>

        <?=$contenido?>


        </body>
    </div>
             
</div>

<!--Pie de pagina-->   
<footer class="footer mt-auto py-3 bg-light text-center">
    <div class="container">
      <span class="text-muted">BOLEM Guaranda 2023</span>
    </div>
  </footer>

  <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <script src="checkout.js"></script>


</html>