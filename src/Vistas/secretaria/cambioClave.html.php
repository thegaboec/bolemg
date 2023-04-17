<?php if(isset($error)): ?>
    <p class=" text-center error bg-danger text-white p-4 text-center w-50 m-auto">
            <?= $error ?>
        </p>
<?php endif; ?>    
<?php if(isset($success)): ?>
    <p class=" text-center error bg-danger text-white p-4 text-center w-50 m-auto">
            <?= $success ?>
        </p>
<?php endif; ?>  


   
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
                var cambio = document.getElementById("txtPassword");
                if(cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
        } 
     </script>


<div class="container-form">
<center>
<img src="/assets/img/password.png" class= class="bi me-2" alt="" width="120" height="150">
        
        <div class=" py-5">
           
            <h2 class="mb-3 "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cambio de Contraseña</font></font></h2>
            <p class="lead"> Ingrese los datos para actualizar su contraseña en el siguiente formulario</p>
  

    <form action="" method="post">
    <div class="col-sm-4 justify-content-lg-start m ">
           
           <div class="row align-items-center">

             <div class="col-auto">
               <label for="txtPassword" class="col-form-label">Contraseña Actual</label>
             </div>
             <div class="input-group">
               <input type="text" name="actual" class="form-control" aria-describedby="passwordHelpInline">
             </div>
             
           </div>

         <br>
         <div class="row align-items-center">

             <div class="col-auto">
               <label for="txtPassword" class="col-form-label">Nueva Contraseña</label>
             </div>
             <div class="input-group">
               <input type="password" name="newpass" id="" class="form-control" aria-describedby="passwordHelpInline">
               <div class="input-group-append">
                 <button id="show_password" class="btn btn-dark" type="button" onclick="mostrarclave1()"> <span class="fa fa-eye-slash icon"></span> </button>
               </div>
             </div>
             
         </div>

         <br> 
         <div class="row align-items-center">

             <div class="col-auto">
               <label for="txtPassword" class="col-form-label">Repita Nueva Contraseña</label>
             </div>
             <div class="input-group">
               <input type="password" name="repitpass" id="" class="form-control" aria-describedby="passwordHelpInline">
               <div class="input-group-append">
                 <button id="show_password" class="btn btn-dark" type="button" onclick="mostrarclave2()"> <span class="fa fa-eye-slash icon"></span> </button>
               </div>
             </div>
             
         </div>
     </div>

         

     
   </div>
  
   <div class="text-center">
       <button class="col-sm-2 btn btn-dark btn-lg button-submit " type="submit">Guardar</button>
   </div>
 </form>
</div>
</center>
</div>
    </form>
</div>