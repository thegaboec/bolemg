<div class="container">

    <center>
        <img src="/assets/img/publicar.png" class= class="bi me-2" width="300" height="170" alt="Responsive image">
        
        <div class="py-5">
           
            <h2 class="mb-3 "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Publicar Anuncio</font></font></h2>
            <p class="lead"> Ingrese los datos de la publicación a realizar</p>
            <form class="needs-validation" novalidate="">
            <div class="">
                <div class="col-sm-4">
                  <label for="anuncio" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Titulo de la Publicación</font></label>
                  <input type="text" class="form-control" id="anuncio" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                        Se requiere ingresar una publicación
                  </div>
                </div>
                <br>
                <div class="col-sm-4">
                  <label for="publicacion" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publicación</font></font></label>
                  <input type="text" class="form-control" id="publicacion" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                        Se requiere ingresar una publicación 
                  </div>
                </div>
                <br>
                <div class="col-sm-4">
                    <label for="fecha_publ" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de Publicación</font></font></label>
                    <input type="date" class="form-control" id="fecha_publ" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                          Se requiere ingresar una publicación 
                    </div>
                  </div>
                  <br>
                <div class="col-sm-2">
                    <div class=" ">
                        <label for="img_publ">Imagen de la Publicación</label>
                        <br> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="img_publ" type="file" id="trabajos">
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>

            </div>
    
            <br>
          <div class="text-center">
              <button class="col-sm-2 btn btn-primary btn-lg  " type="submit">Registrar</button>
          </div>
         </form>
        </div>
      </center>
</div>