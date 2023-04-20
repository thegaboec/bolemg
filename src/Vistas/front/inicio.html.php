<div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="assets/img/fondo1.jpg" class="d-block w-100" alt="bootstrap" 
                              width="620px" height="450px">
                          </div>
                          <div class="carousel-item">
                              <img src="assets/img/logo_jnda.png" class="d-block w-100" alt="..." 
                              width="620px" height="450px">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/fondo1.jpg" class="d-block w-100" alt="..." 
                            width="620px" height="450px">
                        </div>

                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
      <br>
     <center>
    <div class="contenedor3  col-sm-9">
      <p><strong> <h2>PROVINCIAL DE DEFENSA DEL ARTESANO</h2></strong>  </p>
    </div></center>
    <br>
    </div> <center>
    <div class="contenedor3  col-sm-9">
       
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
            <a class="nav-link active show" id="mision-tab" data-toggle="tab" href="#mision-" role="tab" aria-controls="mision-" aria-selected="true">MISIÓN</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="false">VISIÓN</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="mision-" role="tabpanel" aria-labelledby="mision--tab">
            <p>La JNDA tiene la mission de liderar el fortalecimiento, profesionalizacion y desarrllo del sector artesanal, mediante el impulso de una politica...</p>
            </div>
            <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
            <p>La JNDA tiene la mission de liderar el fortalecimiento, profesionalizacion y desarrllo del sector artesanal, mediante el impulso de una politica...</p>
            </div>
        </div>
   
    </div> </center>
    <br>
     <center>
    <div class="contenedor4  col-sm-9 text-info ">
      <p><strong> <h3>PUBLICACIONES</h3></strong>  </p>
    </div></center>
    <br>
    
<center>
    
        <div class="row mb-1 justify-content-center"> 
            <?php foreach ($publicaciones as $publicacion): ?>
            <div class="col-md-5">
                 
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                        
                            <h4 class="mb-0  text-uppercase"><?=$publicacion->titulo?></h4>
                           <small> <div class="mb-1 text-secondary"><?=$publicacion->fecha?></div></small>
                            <p class="card-text mb-auto text-body-secondary"><?=$publicacion->publicacion?></p>
                        
                        </div>
                            <div class="col-auto d-none d-lg-block">
                                
                                <img src="/<?=$publicacion->foto_publicacion?>" alt = "bootstrap" windth="100%" height="225">
                            </div>
                        
                    </div>
                
            </div>
            <?php endforeach;?>    

            
        </div>

  </center>
    <br>


  
