
<main>

    <section class="py-12 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-dark">PERFIL LABORAL: </h1>
          <p class="lead text-muted">A continuación puede observar una amplia descripción del artesano </p>
        </div>
      </div>
    </section>


  
    <div class="album py-5 bg-primary-subtle" width="200px" >
      <div class="container">
  
    <form method="post" action="" enctype="multipart/form-data" >



        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">   
          <div class="col"> 
            
            <div class="card text-center" style="width: 30rem;">
            <span class="border border-dark-subtle">

              <div class="card-header">
                <p class="fw-bold"> Perfil laboral</p>

            <input type="hidden" value="<?=$perfil->idartesano?> " name="idartesano">
                
             </div>
             <div class="card-header" >
              <img src="<?=$perfil->foto?>" class=" img__perfil" alt = "bootstrap" windth="100%" height="225" >
              <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="foto" type="file" id="foto">

             </div>
             <div class="card-body">
              
              <ul class="list-group list-group-flush">

                <p class="fw-dark" > 
                <li class="list-group-item">Nombre: 
                <input type="text" name="nombres" value="<?=$perfil->nombres?>">
                </li>
                </p>

                <p class="fw-dark" > 
                <li class="list-group-item">Apellido:
                <input type="text" name="apellidos" value="<?=$perfil->apellidos?>"></li>
                </p>

                <p class="fw-dark" >
                <li class="list-group-item">Contacto:
                <input type="text" name="telefono" value="<?=$perfil->telefono?>"></li>
                </p>

                <p class="fw-dark" >
                <li class="list-group-item">Correo Electrónico:
                <input type="text" name="correo" value="<?=$perfil->correo?>"></li>
                </p>

                <p class="fw-dark" >
                <li class="list-group-item">Dirección:
                <input type="text" name="direccion" value="<?=$perfil->direccion?>"></li>
                </p>
               

                </ul>
              
              <button class="btn btn-primary" type="submit">Guardar cambios</button>
             </div>
              <div class="card-footer text-body-secondary">
               JUNTA PROVINCIAL DE DEFENSA DEL ARTESANO-BOLIVAR
              </div>
              </span>
            </div>
          </div>


          <div class="col"> 
            <div class="card text-center" >

            <span class="border border-dark-subtle">
            <div class="card-header">
                <p class="fw-bold"> Trabajos Realizados</p>
                
             </div>

             <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">   

              <div class="col">
              <div class="card-header">
              <img src="<?=$perfil->imagen1?>" class="card-img-top" alt = "bootstrap" windth="100%" height="225">
              <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="imagen1" type="file" id="trabajos">
              </div>
            </div>

            <div class="col">
              <div class="card-header">
              <img src="<?=$perfil->imagen2?>" class="card-img-top" alt = "bootstrap" windth="100%" height="225">
              <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="imagen2" type="file" id="trabajos">
              </div>
            </div>

            <div class="col">
              <div class="card-header">
              <img src="<?=$perfil->imagen3?>" class="card-img-top" alt = "bootstrap" windth="100%" height="225">
              <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="imagen3" type="file" id="trabajos">
              </div>
            </div>

            <div class="col">
              <div class="card-header">
              <img src="<?=$perfil->imagen4?>" class="card-img-top" alt = "bootstrap" windth="100%" height="225">
              <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="imagen4" type="file" id="trabajos">
              </div>
            </div>
            </div>
             
              <div class="card-footer text-body-secondary">
               JUNTA PROVINCIAL DE DEFENSA DEL ARTESANO-BOLIVAR
              </div>
            
            </span>

          
        </div>



  
</form>
  
          
  
      </div>
    </div>


  
  </main>