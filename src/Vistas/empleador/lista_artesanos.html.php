
<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">CATEGORIA ARTESANAL: </h1>
          <p class="lead text-muted">A continuación puede observar la amplia variedad de artesanos que posee la junta en esta rama </p>
          
         
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($artesanos as $artesano): ?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="/<?=$artesano->foto?>" alt = "bootstrap" windth="100%" height="225">
             
              <div class="card-body">
                <p class=" text-center" ><?=$artesano->nombres?> </p>
                <p class=" text-center" > Calificación: <?=$artesano->calificacion?> </p>
                <div class="text-center">
                  <div class="btn-group" >
                      
                      <a href='/empleador/lista/artesanos' class="btn btn-outline-warning ">Perfil laboral</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
  
          
  
        </div>
      </div>
    </div>
  
  </main>