     
<div class ="container" style="background-color: hsl(0, 0%, 100%);  background-size: auto;">
     <center>
        <img src="/assets/img/adduser.png" class= class="bi me-2" alt="" width="120" height="150">
    
        <div class=" py-5">
            <h2 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nuevo Artesano</font></font></h2>
            <p class="lead"> Ingrese los datos del nuevo artesano en el siguiente formulario</p>
            <form class="needs-validation" novalidate="">
            <div class="row g-3 col-md-8">

                <div class="form-group col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <label for="foto">Foto</label>
                        <div class="input-group">
                            <label class="input-group-btn "> 
                                <span class="">
                                    <input type="image" src="/assets/img/foto.png" style="border: dodgerblue" height="90" width="100">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="foto" type="file" id="foto"  height="90" width="100">
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="nombre_arte" class="form-label"><font style="vertical-align: inherit;">Nombres</font></font></label>
                    <input type="text" class="form-control" id="nombre_arte" placeholder="Alex Fernando" value="" required="">
                    <div class="invalid-feedback">
                        Se requiere Nombres valido
                    </div>
                </div>
    
                <div class="col-sm-6">
                    <label for="apellido_arte" class="form-label"><font style="vertical-align: inherit;">Apellidos</font></font></label>
                    <input type="text" class="form-control" id="apellido_arte" placeholder="Sanchez  Velazco" value="" required="">
                    <div class="invalid-feedback">
                        Se requiere Apellidos valido 
                    </div>
                </div>
               
                <div class="col-sm-6">
                    <label for="cedula" class="form-label text-left"><font style="vertical-align: inherit;">Cédula</font></font></label>
                    <input type="number" class="form-control" id="cedula" placeholder="0202655878" value="" required="">
                    <div class="invalid-feedback">
                        Se requiere una Cédula valida 
                    </div>
                </div>
                 
                <div class="col-sm-6">
                    <label for="telefono" class="form-label"><font style="vertical-align: inherit;">Télefono</font></font></label>
                    <input type="number" class="form-control" id="telefono" placeholder="0969874902" value="" required="">
                    <div class="invalid-feedback">
                        Se requiere un Teléfono valido 
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="artesanado" class="form-label">Artesanado</label>
                    <select id="artesanado" class="form-select">
                        <option><?=$artesanado->categoria?> </option>
                  
                    </select>
                </div>
        
                <div class="col-sm-6">
                    <label for="correo_electronico" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" id="correo_electronico" placeholder="juanito@gmail.com">
                </div>

                <div class="col-sm-6">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Panamericana Sur">
                </div>
                            
               <div class="form-group col-md-6">
                    <div class=" col-md-6">
                        <label for="trabajos">Trabajos Realizados</label>
                        <br> 
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="trabajos" type="file" id="trabajos">
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>


                <div class="form-group col-md-6">
                    <div class="col-6">
                        <label for="rol" class="form-label">Rol: </label>
                        <label id="rol"  class="ms-TextField-field fw-bold">Artesano</label>
                    </div>
                </div>

            </div>
            <br>
            <div class="text-center">
                <button class="col-sm-2 btn btn-dark btn-lg  " type="submit">Registrar</button>
            </div>

            </form>
        </div>
    </center>
</div>  
