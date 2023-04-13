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

    <header class="p-3 bg-dark text-white">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="JPDA"> <img src="/assets/img/logo_jnda.png" width="100" height="55" ></use></svg>
            </a>
            
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                 <li><a href="/secretaria/inicio" class="nav-link px-2 text-start active">Inicio</a></li>
                 
                 <li class="nav-item dropdown">
                     <a class="nav-item nav-link dropdown-toggle " href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue;">
                       Artesanado
                     </a>
                     <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions">
                       <a class="dropdown-item " href="/secretaria/registrar/artesanado">Registrar</a>
                       <a class="dropdown-item" href="/secretaria/modificarinhabilitar/artesanado">Modificar-Inhabilitar</a>
                     </div>
                 </li>
 
                 <li class="nav-item dropdown ">
                     <a class="nav-item nav-link dropdown-toggle " href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue;">
                       Artesano
                     </a>
                     <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions">
                       <a class="dropdown-item " href="/secretaria/registrar/artesano">Registrar</a>
                       <a class="dropdown-item" href="/secretaria/modificarinhabilitar/artesano">Modificar-Inhabilitar</a>
                     </div>
                 </li>
                 
                 <li><a href="/secretaria/publicar/anuncio" class="nav-link px-2 text-white ">Publicar Anuncio</a></li>
                 <li><a href="/secretaria/cambiar_contraseña_secretaria" class="nav-link px-2 text-white">Cambiar Contraseña</a></li>
                 
           
             </ul>  
                
        <div class="text-end">
        <a href='/cerrar_cesion' class="btn btn-outline-danger me-2">Cerrar Sesión</a>
            </div>
        </div>
        </div>
    </header>

    <?=$contenido?>

<!--Pie de pagina-->   
<footer class="footer mt-auto py-3 bg-light text-center">
  <div class="container">
    <span class="text-muted">BOLEM Guaranda 2023</span>
  </div>
</footer>

<script src="/assets/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="/assets/js/chechout.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>