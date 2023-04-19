<?php if(isset($error)): ?>
  <div class="mt-4">  <p class="bg-danger text-white p-4 text-center w-50 m-auto">
            <?= $error ?>
        </p>
<?php endif; ?>    
<?php if(isset($success)): ?>
  <div class="mt-4">  <p class="bg-success text-white p-4 text-center w-50 m-auto">
            <?= $success ?>
        </p>
<?php endif; ?> 



<div class="container">

    <center>
        <img src="/assets/img/publicar.png" class= class="bi me-2" width="300" height="170" alt="Responsive image">
        
        <div class="py-5">
           
            <h2 class="mb-3 "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Publicar Anuncio</font></font></h2>
            <p class="lead"> Ingrese los datos de la publicación a realizar</p>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="">
                <div class="col-sm-4">
                  <label for="anuncio" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Titulo de la Publicación</font></label>
                  <input type="text" name="idpublicacion" class="form-control" id="anuncio" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                        Se requiere ingresar una publicación
                  </div>
                </div>
                <br>

                <div class="col-sm-4 ">
                    <label for="publicacion" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publicación</font></font></label>
                    <textarea class="form-control" name="publicacion" aria-label="With textarea"></textarea>
                </div>
                <br>

                <div class="col-sm-4">
                    <label for="fecha_publ" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de Publicación</font></font></label>
                    <input type="date" name="fecha" class="form-control" id="fecha_publ" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                          Se requiere ingresar una publicación 
                    </div>
                  </div>
                  <br>
                  <label for="img_publ">Imagen de la Publicación</label>
                <div class="col-sm-4">
                    <div class=" ">
                        
                        <br> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="foto_publicacion" type="file" id="trabajos">
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>

            </div>
    
            <br>
          <div class="text-center">
              <button class="col-sm-2 btn btn-dark btn-lg  " type="submit">Registrar</button>
          </div>
         </form>
        </div>
      </center>
</div>