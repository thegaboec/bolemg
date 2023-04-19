<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
    <link rel="shortcut icon" href="/assets/img/logo_jnda.png"  type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <!--Menu-->
    <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <img src="/assets/img/logo_jnda.png" alt = "bootstrap" windth="30" height="55">
              <li><a href="/empleador/visualizar/artesanados" class="nav-link px-2 text-start">Artesanados</a></li>
              <li><a href="/cambio/clave" class="nav-link px-2 text-white">Cambiar contraseña</a></li>
            </ul>
    
    
            <div class="text-end">
              <a href='/logout' class="btn btn-outline-danger me-2">Cerrar Seción</a>
           
            </div>
          </div>
        </div>
      </header>

      <?=$contenido?>


</body>
     <!--Informacion-->





    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

      <script src="checkout.js"></script>



     <!--Pie de pagina-->

     <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">BOLEM Guaranda 2023</p>
        
      </footer>
    
    
    <script src="assets/js/bootstrap.min.js"></script>
    <script src = "assets/js/pooper.min.js" ></script>
</body>
</html>