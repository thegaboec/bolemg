<?php if(isset($error)): ?>
  <div class="alert alert-danger text-center" role="alert">
            <?= $error ?>
  </div>    
<?php endif; ?>    
<?php if(isset($exito)): ?>
  <div class="alert alert-success text-center" role="alert">
            <?= $exito ?>
</div> 
<?php endif; ?> 
    
<div class="container ">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/assets/img/adduser.png" alt="" width="120" height="150">
      <h2>Nueva secretaria</h2>
      <p class="lead"> Ingrese los datos de la nueva secretaria en el siguiente formulario</p>
    </div>

    
      <div class=" " >
        <form class="needs-validation" novalidate action="" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombres</label>
              <input type="text" class="form-control border border-primary" id="firstName" placeholder="" value="" required name="nombres">
              <div class="invalid-feedback">
                Se requiere un nombre válido
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellidos</label>
              <input type="text" class="form-control border border-primary" id="lastName" placeholder="" value="" required name="apellidos">
              <div class="invalid-feedback">
                Se requiere un apellido válido
              </div>
            </div>

            <div class="col-6">
                <label for="cedula" class="form-label">Número de cédula</label>
                <input type="number" class="form-control border border-primary" id="cédula" placeholder="Este item se asignará como usuario y contraseña" name="id">
                <div class="invalid-feedback">
                  Ingrese un número de cédula válido.
                </div>
              </div>

            <div class="col-6">
              <label for="email" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control border border-primary" id="email" placeholder="nombre@ejemplo.com" name="email">
              <div class="invalid-feedback">
                Ingrese una dirección de correo electrónico válida.
              </div>
            </div>
            <br>
            <div class="text-center">
                <button class="col-sm-4 btn btn-primary btn-lg  " type="submit">Registrar</button>
            </div>
          
        </form>
      </div>
    </div>
  </main>

  
</div>
<br>