<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $titulo?></title>
    <link rel="shortcut icon" href="/assets/img/delegar.png"  type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  
    
  </head>
<body>
    <!--Menu-->
    <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <img src="/assets/img/logo_jnda.png" alt = "bootstrap" windth="30" height="55">
              <li class="nav-item dropdown">
                     <a class="nav-item nav-link dropdown-toggle " href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue;">
                      Secretaria
                     </a>
                     <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions">
                       <a class="dropdown-item" href="/presidente/registrar/secretaria">Registrar</a>
                       <a class="dropdown-item" href="/presidente/modificar/secretaria">Habilitar-Inhabilitar</a>
                       
                     </div>
                 </li>
              <li><a href="/presidente/cambio/clave " class="nav-link px-2 text-white">Cambiar contraseña</a></li>
            </ul>
 
            <div class="text-end">
              <a href='/logout' class="btn btn-outline-danger me-2">Cerrar Seción</a>
           
            </div>
          </div>
        </div>
      </header>

      <?=$contenido?>

    
</body>

<footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">BOLEM Guaranda 2023</p>
        
      </footer>
      <script src="/assets/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="/assets/js/chechout.js"></script>
<script src="/src/public/js/main.js" type="module"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</html>



