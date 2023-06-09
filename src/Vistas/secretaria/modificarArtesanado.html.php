<div class="content-documentacion p-5">
    
    <h2 class="fw-light thead-light text-dark text-center">Habilitar - Inhabilitar Artesanados </h2>
    <br>
    <div class="">
        <form action="" method="post">

        <table class="table table-hover table-bordered  text-center  caption-top" >
        <thead class="table-primary ">
            <tr class=" pt-5 ">
                    <th class=" lead text-body-dark"><strong>ID</strong></th>
                    <th class=" lead text-body-dark"><strong>NOMBRE</strong></th>                   
                    <th class="lead text-body-dark"><strong>ESTADO</strong></th>
                    <th class=" lead text-body-dark"><strong>HABILITAR - INHABILITAR</strong></th></tr>
                </thead >
                <tbody>
                    <?php $count = 0;
                    foreach($artesanados as $artesanado): ?>
                                <tr class="<?php
                                          if(isset($artesanado->estado) && $artesanado->estado === 'inactivo'){
                                             echo 'remove-artesanado';
                                          }              
                                    ?>">
                                <td><?= $artesanado->idartesanado?? 'desconocido'; ?></td>
                                <td><?= $artesanado->categoria ?? 'desconocido'; ?></td>
                                
                                <td><?= $artesanado->estado ?? 'desconocido'; ?></td>
                                <td>
                                    <input class="text-center" type="checkbox" name="artesanado<?= $count;?>[estado]" id="">
                                    <input type="hidden" name="artesanado<?= $count;?>[idartesanado]" value="<?= $artesanado->idartesanado;?>">
                                </td>
                            </tr>
                    <?php $count ++; endforeach; ?>
                </tbody>
            </table>
            <br>
            <button style="display:block; margin: 0.5rem auto;" class="col-sm-2 btn btn-primary btn-lg button-submit " type="submit">Guardar Cambios</button>                          
        </form>
    </div>
</div>