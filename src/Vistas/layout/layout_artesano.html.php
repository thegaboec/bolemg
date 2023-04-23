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
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
          
            <ul class="nav  mx-auto  col-lg-4  "   >
              <li><strong><FONT FACE="arial"> <h5><a href="/artesano/inicio" class="nav-link px-8 " style="color:#0E4280" > Inicio</a></h5> </FONT></strong></li>
              <li><strong><FONT FACE="arial"> <h5><a href="/artesano/perfil" class="nav-link px-8 "  style="color:#0E4280" > Perfil Laboral</a></h5> </FONT></strong></li>
              <li><strong><FONT FACE="arial"> <h5><a href="/artesano/cambio/clave " class="nav-link px-8 "  style="color:#0E4280" > Cambiar Contraseña</a></h5> </FONT></strong></li>
                
            </ul>
                
        <div class="text-end">
       
        <strong>  <a href='/logout' class="btn btn-outline-primary me-2" >Cerrar Seción</a></strong>
        
        </div>


        </div>
        </div>
    </header>
     <!--Informacion-->
 

        <?=$contenido?>


        </body>
    </div>
             
</div>

<!--Pie de pagina-->   

<div class="" style="background-image: url(/assets/img/BOLEMG.png)">
      /
<footer class="footer mt-auto py-3 bg-light text-center">
    <div class="container">
      <span class="text-muted">BOLEM Guaranda 2023</span>
    </div>
  </footer>

  <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <script src="checkout.js"></script>


</html>