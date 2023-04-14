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
              <li><a href="/presidente/agregar/secretaria" class="nav-link px-2 text-white">Agregar Secretaria</a></li>
              <li><a href="/presidente/cambiar/contraseña" class="nav-link px-2 text-white">Cambiar contraseña</a></li>
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
    
</html>



