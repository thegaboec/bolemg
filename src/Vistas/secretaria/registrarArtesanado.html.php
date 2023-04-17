<?php if(isset($error)): ?>
  <div class="mt-4">  <p class="bg-danger text-white p-4 text-center w-50 m-auto">
            <?= $error ?>
        </p>
<?php endif; ?>    
<?php if(isset($success)): ?>
  <div class="mt-4">  <p class="bg-danger text-white p-4 text-center w-50 m-auto">
            <?= $success ?>
        </p>
<?php endif; ?> 


<div style="background-color: hwb(0 100% 0%);  background-size: auto;">

<center>
   <img src="/assets/img/adduser.png" class= class="bi me-2"  alt="" width="120" height="150">
   
   <div class="py-5">
    
       <h2 class="mb-3 "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Registro de Artesanado</font></font></h2>
       <p class="lead"> Ingrese los datos del nuevo artesanado en el siguiente formulario</p>
       <form action="" method="post">
         <div class="row g-3 col-md-6">

           <div class="col-sm-6">
             <label for="id_ar" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID del Artesanando</font></font></label>
             <input name="idartesanado" type="text" class="form-control" id="id_ar" placeholder="" value="" required="">
             <div class="invalid-feedback">
               Se requiere un ID valido
             </div>
           </div>

           <div class="col-sm-6">
             <label for="lastName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre del Artesanado</font></font></label>
             <input name="categoria" type="text" class="form-control" id="lastName" placeholder="" value="" required="">
             <div class="invalid-feedback">
               Se requiere un Nombre valido 
             </div>
           </div>
           
           <div class="col-sm-6">
             <label for="lastName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Foto del Artesanado </font></font></label>
             <input name="url_foto" type="url" class="form-control" id="lastName" placeholder="URL de la foto" value="" required="">
             <div class="invalid-feedback">
               Se requiere un Nombre valido 
             </div>
           </div> 
         
         </div>

         <br>
         <div class="text-center">
             <button class="col-sm-2 btn btn-dark btn-lg  "  name="btnreegistrara" type="submit">Registrar</button>
         </div>


       </form>
   </div>
 </center>
</div>