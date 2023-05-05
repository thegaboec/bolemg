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
    <link rel="shortcut icon" href="/assets/img/JPDA.jpg"  type="image/x-icon">
    <link rel="stylesheet" href="/assets/js/popper.min.js">
    <link href="/assets/css/sign-in.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/util.css">
</head>
<body style="background-color:ligth ;">
    <!--Menu-->
    <div class="" style="background-image: url(/assets/img/BOLEMG.png)">
    <span style="opacity:0;">/ </span>

      <header class="p-3  text-white" style="background-color:aliceblue;" >
        
        <div class="shadow-sm p-8 mb-10 bg-white rounded d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 ">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="JPDA"> <img src="/assets/img/JPDA.jpg" width="200" height="100" ></use></svg>
            </a>
          
            <ul class="nav  mx-auto  col-lg-6  "   >
           <li><strong><FONT FACE="arial"> <h5><a href="/inicio" class="nav-link px-8 " style="color:#0E4280" > Inicio</a></h5> </FONT></strong></li>
           <li><strong><FONT FACE="arial"> <h5><a href="/institucion" class="nav-link px-8 " style="color:#0E4280" > Institución</a></h5> </FONT></strong></li>
           <li><strong><FONT FACE="arial"> <h5><a href="/artesanados" class="nav-link px-8" style="color:#0E4280" > Artesanados</a></h5> </FONT></strong></li>
           <li><strong><FONT FACE="arial"> <h5><a href="/publicaciones" class="nav-link px-8" style="color:#0E4280" > Publicaciones</a></h5> </FONT></strong></li>
           <li><strong><FONT FACE="arial"> <h5><a href="/contactos" class="nav-link px-8" style="color:#0E4280" > Contactos</a></h5> </FONT></strong></li>
               
            </ul>
                
        <div class="text-left">
          <?php if(isset($_SESSION['usuario'])):?>
        <strong><a href='/logout' class="btn btn-outline-primary me-2" >Cerrar Sesión</a></strong>
        <?php else:?>
        <strong>  <a href='/login' class="btn btn-outline-primary me-2" >Iniciar Sesión</a></strong>
        <strong>  <a href='/registro' class="btn btn-primary " >Registrarse</a> </strong>
        <?php endif?>
        </div>


        </div>
        </div>
    </header>
     
   <?=$contenido?>
     
   <div class="" style="background-image: url(/assets/img/BOLEMG.png)">
  <span style="opacity:0;">/ </span>
 
    <!--Pie de pagina-->   
    <footer class="footer mt-auto py-3 bg-light text-center ">
      <div class="container">
        <span class="text-muted">BOLEM Guaranda 2023</span>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src = "/assets/js/pooper.min.js" ></script>

    
</body>
</html>