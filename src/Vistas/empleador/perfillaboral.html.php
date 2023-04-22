
<main>

    <section class="py-12 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-dark">PERFIL LABORAL: </h1>
          <p class="lead text-muted">A continuación puede observar una amplia descripción del artesano </p>
        </div>
      </div>
    </section>


  
    <div class="album py-5 bg-dark" >
      <div class="container">
  
         
            <?php foreach ($artesanos as $artesano): ?>
          
            <div class="card shadow-sm">
              <img src="/<?=$artesano->foto?>" alt = "bootstrap" >
             
              <div class="card-body">

              <ul class="list-group list-group-flush">
             <li class="list-group-item"><?=$artesano->nombres?></li>
                <li class="list-group-item">A second item</li>
             <li class="list-group-item">A third item</li>
            </ul>

                <p class=" text-center" ><?=$artesano->nombres?> </p>
                <p class=" text-center" ><?=$artesano->apellidos?> </p>
                <p class=" text-center" > Calificación: <?=$artesano->calificacion?> </p>
                <p class=" text-center" > Contacto: <?=$artesano->telefono?></p>
                <p class=" text-center" > Correo Electrónico: <?=$artesano->correo?></p>
                <p class=" text-center" > Dirección: <?=$artesano->direccion?> </p>

                
                <p class=" text-center" > TRABAJOS REALIZADOS  </p>

                <img src="/<?=$artesano->imagen1?>" alt = "bootstrap" windth="100%" height="225">


                <div class="text-center">
                  <div class="btn-group" >
                      
                      <a href='/empleador/artesanados' class="btn btn-outline-warning ">Evaluar</a>
                  </div>
                </div>


              </div>
            </div>
          
          <?php endforeach;?>
  
          
  
      </div>
    </div>
  
  </main>