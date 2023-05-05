<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
    <link rel="shortcut icon" href="/assets/img/JPDA.jpg"  type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/js/popper.min.js">
    <link rel="stylesheet" href="/assets/css/util.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/js/jquery.min.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        function mostrarclave1(){
                var cambio = document.getElementById("txtPassword");
                if(cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
        } 
        function mostrarclave2(){
                var cambio = document.getElementById("txt-Password");
                if( cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
        } 
        
     </script> 
</head>
<body> 
   <!--Menu-->
   <div class="" style="background-image: url(/assets/img/BOLEMG.png)">
  /

  <header class="p-3  text-white" style="background-color:aliceblue;" >
        
        <div class="shadow-sm p-8 mb-10 bg-white rounded d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 ">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="JPDA"> <img src="/assets/img/JPDA.jpg" width="200" height="100" ></use></svg>
            </a>
          
            <ul class="nav  mx-auto  col-lg-8  "   >
              <li><strong><FONT FACE="arial"> <h5><a href="/secretaria/inicio" class="nav-link px-8 " style="color:#0E4280" > Inicio</a></h5> </FONT></strong></li>
              <li class="nav-item dropdown"><strong><FONT FACE="arial"> <h5> <a class="nav-item nav-link px-8" style="color:#0E4280" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue;">
                          Presidente </a>
                        <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions">
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/registrar/presidente">Registrar</a></h5> </FONT></strong>
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/modificar/presidente">Habilitar-Inhabilitar</a></h5> </FONT></strong>
                          
                        </div>
              </h5> </FONT></strong></li>
              <li class="nav-item dropdown"><strong><FONT FACE="arial"> <h5> <a class="nav-item nav-link px-8" style="color:#0E4280" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue;">
                          Artesanados </a>
                        <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions">
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/registrar/artesanado">Registrar</a></h5> </FONT></strong>
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/habilitar-deshabilitar/artesanado">Habilitar-Inhabilitar</a></h5> </FONT></strong>
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/listado/artesanado">Listado</a></h5> </FONT></strong>
                       
                        </div>
              </h5> </FONT></strong></li>
              <li class="nav-item dropdown"><strong><FONT FACE="arial"> <h5> <a class="nav-item nav-link px-8" style="color:#0E4280" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue;">
                          Artesanos </a>
                        <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions">
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/registrar/artesano">Registrar</a></h5> </FONT></strong>
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/habilitar-deshabilitar/artesano">Habilitar-Inhabilitar</a></h5> </FONT></strong>
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/listado/artesano">Listado</a></h5> </FONT></strong>
                          
                        </div>
              </h5> </FONT></strong></li>
              <li class="nav-item dropdown"><strong><FONT FACE="arial"> <h5> <a class="nav-item nav-link px-8" style="color:#0E4280" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue;">
                          Publicaciones </a>
                        <div class="dropdown-menu dropdown-menu-right mr-md-0 " aria-labelledby="bd-versions">
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/publicar/anuncio">Registrar</a></h5> </FONT></strong>
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/listado/anuncio">Habilitar-Inhabilitar</a></h5> </FONT></strong>
                        <strong><FONT FACE="arial"> <h5><a class="dropdown-item" style="color:#0E4280" href="/secretaria/listado/publicaciones">Listado</a></h5> </FONT></strong>
                          
                        </div>
              </h5> </FONT></strong></li>
              <li><strong><FONT FACE="arial"> <h5><a href="/secretaria/cambio/clave " class="nav-link px-8 "  style="color:#0E4280" > Cambiar Contraseña</a></h5> </FONT></strong></li>
                
            </ul>
        <div class="text-end">
       
        <strong>  <a href='/logout' class="btn btn-outline-primary me-2" >Cerrar Sesión</a></strong>
        
        </div>


        </div>
        </div>
    </header>

<!--Contenido--> 

    <?=$contenido?>

    

<!--Pie de pagina-->  
 
<div class="" style="background-image: url(/assets/img/BOLEMG.png)">
      /
 

<footer class="footer  mt-auto py-3 bg-light text-center">
  <div class="container">
    <span class="text-muted">BOLEM Guaranda 2023</span>
  </div>
</footer>

<script src="/assets/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="/assets/js/chechout.js"></script>
<script src="/src/public/js/main.js" type="module"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>