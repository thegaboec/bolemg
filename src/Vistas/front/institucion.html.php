<center>
      <div class=" pt-5 col-md-12  rounded-2 p-3 mb-2  text-dark " style="background-color:#F3F5F8" >
      
      <div class="col-lg-6 col-md-8 mx-auto " style="color:#F3F5F8">
        <h1 class="fw-light text-dark">¿Quiénes Somos?</h1>
        <p class="lead  text-dark" ">La Junta Nacional de Defensa del Artesano es una institución  que lidera el fortalecimiento,
            profesionalización y desarrollo del sector artesanal, mediante el impulso de una política, la formación, la investigación y
            la presentación de servicios a los artesanos. </p>
      </div>
      
    </div>
   </center>

   <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-9">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="/assets/img/jn1.jpg" class="d-block w-100" alt="bootstrap" 
                              width="620px" height="450px">
                          </div>
                          <div class="carousel-item">
                              <img src="/assets/img/secretaria.jpg" class="d-block w-100" alt="..." 
                              width="620px" height="450px">
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/img/juntaf.jpg" class="d-block w-100" alt="..." 
                            width="620px" height="450px">
                        </div>

                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                      </a>
                  </div>
              </div>
          </div>
</div>


</center>



<br>

     <div class=" p-5 rounded float-end">
              <img src="/assets/img/mision.png"  width="480" height="300" class="" ></center></div>
      <div class="row py-lg-5 bg-primary-subtle" >
      <div class="col-lg-6 col-md-8 mx-5">

        <p class="lead text-body-secondary"><em>
                  "La misión de JNDA es reconocer la calidad de Maestro de Taller, operario, aprendiz y taller artesanal; promover la calificación Artesanal 
                  como medio para acogerse a los beneficios Tributarios, Laborales, Sociales establecidos en el ordenamiento jurídico vigente a través de un
                  servicio que fortalezca la actividad artesanal y motive la calidad eficiente y ágil de los artesanos del país."</em></p>
        
      </div>
      
    </div>
    </div>
    <br>
  
 
    <br>
    <div class=" p-5  rounded float-start">
              <img src="/assets/img/vision.png"  width="480" height="300" class="" ></center></div>
      <div class="row py-lg-5  " style="background-color:#F3F5F8">
      <div class="col-lg-6 col-md-8 mx-5">
        <p class="lead text-body-secondary" ><em>
                "Vemos a la Junta Nacional de Defensa del Artesano como una institución pública especializada que implementa y coordina una política artesanal 
                que se aplica en todo el Estado y la Sociedad. Se cuenta con un sistema integral de formación y desarrollo profesional que incorpora innovación,
                ciencia y tecnología para la formación y capacitación de los artesanos y artesanas, así como la calificación de sus talleres artesanales."</p></em>

      </div>


      </div> 

    </div> 
    <br>


    <center>
      <div class=" pt-5 col-md-12 py-lg-12 rounded-2 p-3 mb-2  text-dark " >
      <h1 class="fw-light text-dark">Autoridades </h1>
          <p class="lead  text-dark" >Conoce las autoridades de la Junta Provincial de Defensa del Artesano </p>   
    </div>
   </center>
<center>

   <div class="row justify-content-center">
    

   <?php foreach ($usuarios as $usuario): ?>
  <div class="p-5 col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      
    
      <h4 class="fw-light text-dark"><strong> Presidente</strong></h4>
      <div class="card-header" >
               <img src="<?=$usuario->fotousuario?>" class="img" alt = "" windth="100%" height="225">    
      </div>
       <div class="card-body">
        <h5 class="card-title lead  text-dark">Nombres:<?=$usuario->nombres?></h5>
        <h5 class="card-title lead  text-dark">Apellidos:<?=$usuario->apellidos?> </h5>
        <h5 class="card-title lead  text-dark">Teléfono:<?=$usuario->telefono?> </h5>
        <h5 class="card-title lead  text-dark">Correo:<?=$usuario->correo?> </h5>
        </div>
    </div>
  </div>
  <?php endforeach;?>


  <?php foreach ($usuarios1 as $usuario1): ?>
  <div class="p-5 col-sm-4 mb-3 mb-sm-0">
    <div class="card">
  
      <h4 class="fw-light text-dark"> <strong> Secretaria</strong></h4>
      <div class="card-header" >
               <img src="<?=$usuario1->fotousuario?>" class="img" alt = "" windth="100%" height="225">    
      </div>
       <div class="card-body">
       <h5 class="card-title lead  text-dark">Nombres:<?=$usuario1->nombres?></h5>
        <h5 class="card-title lead  text-dark">Apellidos:<?=$usuario1->apellidos?> </h5>
        <h5 class="card-title lead  text-dark">Teléfono:<?=$usuario1->telefono?> </h5>
        <h5 class="card-title lead  text-dark">Correo:<?=$usuario1->correo?> </h5>
        </div>
    </div>
  </div>
  <?php endforeach;?>
</div>
</center>
    <br>