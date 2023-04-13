
<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">JUNTA PROVINCIAL DE DEFENSA DEL ARTESANO</h1>
          <p class="lead text-muted">Promueve el desarrollo de los artesanos visitando cada una de las categorias disponibles en el siguiente apartado</p>
          
         
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($artesanados as $artesanado): ?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="/<?=$artesanado->url_foto?>" alt = "bootstrap" windth="100%" height="225">
             
              <div class="card-body">
                <p class=" text-center" ><?=$artesanado->categoria?> </p>
                <div class="text-center">
                  <div class="btn-group" >
                      <button type="button" class="btn btn-sm btn-outline-secondary " >Lista de Artesanos</button>
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