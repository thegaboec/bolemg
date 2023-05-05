<?php if(isset($error)): ?>
  <div class="mt-4">  <p class="alert alert-danger  p-4 text-center w-50 m-auto" role="alert"> <?= $error ?> </p>
  </div>



<?php endif; ?>

<main class="form-signin w-100 m-auto">

  <form method="post" action="">
    <img class="mb-4" src="/assets/img/JPDA.jpg" alt="" width="200" height="57">
    <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>
   

    <div class="form-floating">
      <input type="" class="form-control" id="floatingInput"  name="usuario">
      <label for="floatingInput">Usuario</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword"  name="password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <br><br>   

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
  </form>
</main>
