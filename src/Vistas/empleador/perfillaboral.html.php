
<?php



 if(isset($error)): ?>
<p class="bg-danger text-white p-4 text-center w-50 m-auto">
            <?= $error ?>
        </p>
<?php endif; ?>    
<?php if(isset($success)): ?>
    <p class="bg-success text-white p-4 text-center w-50 m-auto">
            <?= $success ?>
        </p>
<?php endif; ?> 
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
  
        

          <?php foreach ($artesanos as $artesano): ?>


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">   
          <div class="col"> 
            
            <div class="card text-center" style="width: 30rem;">
            <span class="border border-dark-subtle">

              <div class="card-header">
                <p class="fw-bold"> Perfil laboral</p>
                
             </div>
             <div class="card-header" >
              <img src="<?=$artesano->foto?>" class="img__perfil" alt = "bootstrap" windth="100%" height="225" >
             </div>
             <div class="card-body">
              <h5 class="card-title"><?=$artesano->nombres?></h5>
              <ul class="list-group list-group-flush">

                <p class="fw-dark" > 
                <li class="list-group-item">Nombre: <?=$artesano->nombres?></li>
                </p>

                <p class="fw-dark" > 
                <li class="list-group-item">Apellido: <?=$artesano->apellidos?></li>
                </p>

                <p class="fw-dark" >
                <li class="list-group-item"> Contacto: <?=$artesano->telefono?></li>
                </p>

                <p class="fw-dark">
                <li class="list-group-item">Correo Electrónico: <?=$artesano->correo?></li>
                </p>

                <p class="fw-dark" > 
                <li class="list-group-item"> Dirección: <?=$artesano->direccion?> </li>
              </p>

                <p class="fw-dark" >
                <li class="list-group-item"> Calificación: <?=$artesano->calificacion?></li>
               </p>

                </ul>
              
              <a href="#" class="btn btn-primary">Evaluar</a>
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
              <p class="fw-dark" >
                <li class="list-group-item"> Descripción: <?=$artesano->descripcion1?></li>
               </p>
              <img src="<?=$artesano->imagen1?>" class="card-img-top" alt = "bootstrap" windth="100%" height="225">
              </div>
            </div>

            <div class="col">
              <div class="card-header">
              <p class="fw-dark" >
                <li class="list-group-item"> Descripción: <?=$artesano->descripcion2?></li>
               </p>
              <img src="<?=$artesano->imagen2?>" class="card-img-top" alt = "bootstrap" windth="100%" height="225">
              </div>
            </div>

            <div class="col">
              <div class="card-header">
              <p class="fw-dark" >
                <li class="list-group-item"> Descripción: <?=$artesano->descripcion3?></li>
               </p>
              <img src="<?=$artesano->imagen3?>" class="card-img-top" alt = "bootstrap" windth="100%" height="225">
              </div>
            </div>

            <div class="col">
              <div class="card-header">
              <p class="fw-dark" >
                <li class="list-group-item"> Descripción: <?=$artesano->descripcion4?></li>
               </p>
              <img src="<?=$artesano->imagen4?>" class="card-img-top" alt = "bootstrap" windth="100%" height="225">
              </div>
            </div>
            </div>
             
              <div class="card-footer text-body-secondary">
               JUNTA PROVINCIAL DE DEFENSA DEL ARTESANO-BOLIVAR
              </div>
            
            </span>

          
        </div>



      <?php endforeach;?>

  
          
  
      </div>
    </div>
  
  </main>