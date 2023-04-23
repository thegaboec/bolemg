     
<?php

use App\Modelos\Artesanados;

 if(isset($error)): ?>
<p class="bg-danger text-white p-4 text-center w-50 m-auto">
            <?= $error ?>
        </p>
<?php endif; ?>    
<?php if(isset($success)): ?>
    <p class="bg-success text-white p-4 text-center w-50 m-auto">
            <?= $success ?>
        </p>
<?php endif; ?> 
<div class ="container" style="background-color: hsl(0, 0%, 100%);  background-size: auto;">
     <center>
        <img src="/assets/img/adduser.png" class= class="bi me-2" alt="" width="120" height="150">
    
        <div class=" py-5">
            <h2 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nuevo Artesano</font></font></h2>
            <p class="lead"> Ingrese los datos del nuevo artesano en el siguiente formulario</p>
            <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data">
            <div class="row g-3 col-md-8">

                <div class="form-group col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <label for="foto">Foto</label>
                        <div class="input-group">
                            <label class="input-group-btn "> 
                                <span class="">
                                    
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="foto" type="file" id="foto"  >
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="nombre_arte" class="form-label"><font style="vertical-align: inherit;">Nombres</font></font></label>
                    <input type="text" class="form-control border border-primary" id="nombre_arte" placeholder="" value="" required="" name="nombres">
                    <div class="invalid-feedback">
                        Se requiere Nombres valido
                    </div>
                </div>
    
                <div class="col-sm-6">
                    <label for="apellido_arte" class="form-label"><font style="vertical-align: inherit;">Apellidos</font></font></label>
                    <input type="text" class="form-control border border-primary" id="apellido_arte" placeholder="" value="" required="" name="apellidos">
                    <div class="invalid-feedback">
                        Se requiere Apellidos valido 
                    </div>
                </div>
               
                <div class="col-sm-6">
                    <label for="cedula" class="form-label text-left"><font style="vertical-align: inherit;">Cédula</font></font></label>
                    <input type="number" class="form-control border border-primary" id="cedula" placeholder="Este item se asignará como usuario y contraseña" value="" required="" name="idartesano">
                    <div class="invalid-feedback">
                        Se requiere una Cédula valida 
                    </div>
                </div>
                 
                <div class="col-sm-6">
                    <label for="telefono" class="form-label"><font style="vertical-align: inherit;">Télefono</font></font></label>
                    <input type="number" class="form-control border border-primary" id="telefono" placeholder="" value="" required="" name="telefono">
                    <div class="invalid-feedback">
                        Se requiere un Teléfono valido 
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="artesanado" class="form-label ">Artesanado</label>
                    <select id="artesanado" class="form-select border border-primary" name="artesanado">

                    <?php foreach ($artesanados as $artesanado): ?>
                        <option value="<?=$artesanado->idartesanado?>"><?=$artesanado->categoria?></option>
                    <?php endforeach;?>
                    </select>
                </div>
        
                <div class="col-sm-6">
                    <label for="correo_electronico" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control border border-primary" id="correo_electronico" placeholder="Ejemplo@gmail.com" name="correo">
                </div>

                <div class="col-sm-6">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control border border-primary" id="direccion" placeholder="" name="direccion">
                </div>

                <div class="form-group col-md-6">
                    <div class="col-6 ">
                        <label for="rol" class="form-label">Calificación: </label>
                        <input type="number" class="form-control border border-primary" id="cédula" name="calificacion">
                    </div>
                </div>

                <p class="lead"> Trabajos realizados</p>
                            
               <div class="form-group col-md-6">
                    <div class=" col-md-6">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="imagen1" type="file" id="trabajos">
                                    
                                </span>
                            </label>  
                        </div>
                    </div>

                    <div class=" col-md-6">
                        
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="imagen2" type="file" id="trabajos">
                                    
                                    
                                </span>
                            </label>  
                        </div>
                    </div>

                    <div class=" col-md-6">
                        
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="imagen3" type="file" id="trabajos">
                                    
                                    
                                </span>
                            </label>  
                        </div>
                    </div>

                    <div class=" col-md-6">
                        
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="imagen4" type="file" id="trabajos" placeholder="opcional">
                                    
                                    
                                </span>
                            </label>  
                        </div>
                    </div>

                </div>

               


                

            </div>
            <br>
            <div class="text-center">
                <button class="col-sm-2 btn btn-primary btn-lg  " type="submit">Registrar</button>
            </div>

            </form>
        </div>
    </center>
</div>  
