<?php if(isset($error)): ?>
  <div class="mt-4">  <p class="bg-danger text-white p-4 text-center w-50 m-auto"> <?= $error ?> </p>
  </div>

<?php endif; ?>

<main class="form-signin w-100 m-auto">

  <form method="post" action="">
    <img class="mb-4" src="/assets/img/JNDA.png" alt="" width="200" height="57">
    <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>
   

    <div class="form-floating">
      <input type="" class="form-control" id="floatingInput"  name="usuario">
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordar
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
  </form>
</main>
