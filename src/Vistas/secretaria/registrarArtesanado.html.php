<?php if(isset($error)): ?>
  <div class="alert alert-danger text-center" role="alert">
            <?= $error ?>
</div>
<?php endif; ?>    
<?php if(isset($success)): ?>
  <div class="alert alert-success text-center" role="alert">
            <?= $success ?>
</div>
<?php endif; ?> 


<div style="background-color: hwb(0 100% 0%);  background-size: auto;">

<center>
   <img src="/assets/img/adduser.png" class= class="bi me-2"  alt="" width="120" height="150">
   
   <div class="py-5">
    
       <h2 class="mb-3 "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Registro de Artesanado</font></font></h2>
       <p class="lead"> Ingrese los datos del nuevo artesanado en el siguiente formulario</p>
       <form action="" method="post" enctype="multipart/form-data">
         <div class="row g-3 col-md-6">

           <div class="col-sm-6">
             <label for="id_ar" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID del Artesanado</font></font></label>
             <input name="idartesanado" type="text" class="form-control border border-primary" id="id_ar" placeholder="" value="" required="">
             <div class="invalid-feedback">
               Se requiere un ID valido
             </div>
           </div>

           <div class="col-sm-6">
             <label for="lastName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre del Artesanado</font></font></label>
             <input name="categoria" type="text" class="form-control border border-primary" id="lastName" placeholder="" value="" required="">
             <div class="invalid-feedback">
               Se requiere un nombre valido 
             </div>
           </div>
           

           <div class="form-group col-md-12">
                    <div class=" col-md-6">
                        <label for="trabajos">Foto</label>
                        <br> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="url_foto" type="file" id="foto">
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>
          
         
         </div>

         <br>
         <div class="text-center">
             <button class="col-sm-2 btn btn-primary btn-lg  "  name="btnreegistrara" type="submit">Registrar</button>
         </div>


       </form>
   </div>
 </center>
</div>