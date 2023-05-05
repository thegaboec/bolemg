<?php if(isset($error)): ?>
  <div class="mt-4">  <p class="alert alert-danger  p-4 text-center w-50 m-auto" role="alert"> <?= $error ?> </p>
  </div>



<?php endif; ?>
<br>

<form method="post" action="">
<div class="container ">
<div class="row justify-content-center">
 
  <div class="p-5 col-sm-8 mb-3 mb-sm-0">
    <div class="">
      
      <img class="mb-4" src="/assets/img/BOLSA DE EMPLEO GUARANDA.png" alt="" width="700" height="390">
   
    </div>
  </div>


     <div class="py-5 col-4">
    <div class="">
      <h1 class="fw-light text-dark text-center"><strong> Iniciar Sesión</strong></h1>
    
      <br> <br>
      <div class="form-floating">
        <input type="" class="form-control  border border-primary" id="floatingInput" placeholder="Usuario" name="usuario">
        <label class ="lead  text-dark " for="floatingInput">Usuario</label>
      </div>
      <br>
      <div class="form-floating">
        <input type="password" class="form-control border border-primary" id="floatingPassword" placeholder="Contraseña" name="password">
        <label class ="lead  text-dark "  for="floatingPassword">Contraseña</label>
      </div>

    <br>
      <button class="w-100 btn btn-lg btn-primary lead" type="submit">Iniciar</button>

</div></div></diV></diV>
</form>
