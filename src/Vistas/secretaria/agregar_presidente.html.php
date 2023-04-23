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


<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/assets/img/delegar.png" alt="" width="120" height="150">
      <h2>Nuevo Presidente</h2>
      <p class="lead"> Ingrese los datos del nuevo presidente de la Junta Provincial de Defensa del Artesano en el siguiente formulario</p>
    </div>

    
      <div class="py-5  ">
        <form class="needs-validation" novalidate action="" method="POST" enctype="multipart/form-data">
          <div class="row g-3">

          <center>
          <div class="form-group col-md-12">
                    <div class=" col-md-4">
                        <label for="trabajos">Foto</label>
                        <br> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="fotousuario" type="file" id="fotousuario">
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>
          </center>

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
                <input type="text" class="form-control border border-primary" id="cédula" placeholder="Este item se asignará como usuario y contraseña" name="id">
                <div class="invalid-feedback">
                  Ingrese un número de cédula válido.
                </div>
              </div>

              <div class="col-6">
              <label for="email" class="form-label">Teléfono</label>
              <input type="text" class="form-control border border-primary" id="email" placeholder="" name="telefono">
              <div class="invalid-feedback">
                Ingrese un telefono válido.
              </div>
            </div>
            <center>
            <div class="col-6">
              <label for="email" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control border border-primary" id="email" placeholder="nombre@ejemplo.com" name="email">
              <div class="invalid-feedback">
                Ingrese una dirección de correo electrónico válida.
              </div>
            </div></center>
            <br>

            <div class="text-center">
                <button class="col-sm-4 btn btn-primary btn-lg  " type="submit">Registrar</button>
            </div>
          
        </form>
      </div>
    </div>
    </div>