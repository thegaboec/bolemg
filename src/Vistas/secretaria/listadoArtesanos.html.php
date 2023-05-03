
<div class="content-documentacion p-5">
    <h2 class="fw-light thead-light text-dark text-center">Listado de  Artesanos </h2>
    <br>
    <div class="">

        <form action="" method="">

        <table class="table table-hover text-center  caption-top" >
        <thead class="table-primary ">
            <tr class=" pt-5 border-primary ">
                    <th class=" lead text-body-dark"><strong>CEDULA</strong></th>
                    <th class=" lead text-body-dark"><strong>NOMBRES</strong></th>
                    <th class=" lead text-body-dark"><strong>APELLIDOS</strong></th>
                    <th class=" lead text-body-dark"><strong>ARTESANADO</strong></th>
                    <th class=" lead text-body-dark"><strong>ESTADO</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0;
                    foreach($artesanos as $artesano): ?>
                            <tr class="<?php
                                          if(isset($artesano->estado) && $artesano->estado === 'inactivo'){
                                             echo 'remove-artesano';
                                          }              
                                    ?>">
                                <td><?= $artesano->idartesano ?? 'desconocido'; ?></td>
                                <td><?= $artesano->nombres ?? 'desconocido'; ?></td>
                                <td><?= $artesano->apellidos ?? 'desconocido'; ?></td>
                                <td><?= $artesano->idartesanado?? 'desconocido'; ?></td>
                                <td><?= $artesano->estado?? 'desconocido'; ?></td>
                                
                            </tr>
                    <?php $count ++; endforeach; ?>
                </tbody>
            </table>
            <br>
        </form>
        <a href="/secretaria/reporte/artesano" style="display:block; margin: 0.5rem auto;" class="button-submit col-sm-2 btn btn-primary  btn-lg button-submit" >Imprimir</a>                          

    </div>
</div>
</div>