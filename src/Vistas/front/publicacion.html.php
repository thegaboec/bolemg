
<center>
<div class="justify-content-center">
    <?php foreach ($publicaciones as $publicacion): ?>
    <p class=" lead fw-light text-center" > <strong><?=$publicacion->titulo?></strong>  </p> 
    <p class="   text-dark text-center" >  <?=$publicacion->fecha?> </p>
    <img src="/<?=$publicacion->foto_publicacion?>" alt = "bootstrap" windth="100%" height="335"></center></div>
       <center><div class="justify-content-center" >
       <br> <div class="col-lg-6 col-md-8 mx-5 justify-content-center">
        <p class="text-body-secondary tex-center" ><?=$publicacion->publicacion?></p>
      </div>
      </div> </center>


    </div> 
    <?php endforeach;?>
  
</div></center>
