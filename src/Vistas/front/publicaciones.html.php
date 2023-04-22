
<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Publicaciones o Anuncios</h1>
          <p class="lead text-muted">Enterate de las ultimas novedades de la Junta Provincial de Defensa del Artesano</p>
          
         
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($publicaciones as $publicacion): ?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="/<?=$publicacion->foto_publicacion?>" alt = "bootstrap" windth="100%" height="225">
             
              <div class="card-body">
                <p class=" text-center" ><?=$valordebusqueda=$publicacion->titulo?> </p>
                <p class=" text-center" ><?=$publicacion->fecha?> </p>
                <div class="text-center">
                  <div class="btn-group" >
                      
                      <a href='/publicacion?idpublicaciones=<?=$publicacion->idpublicaciones?>' class="btn btn-outline-primary ">Ver más</a>
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