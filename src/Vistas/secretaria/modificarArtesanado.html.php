<div class="content-documentacion">
    <div class="">
        <form action="" method="post">

            <table class="table text-center table-hover " >

                <thead class="thead-light">
                    <th>ID</th>
                    <th>Nombre</th>
                    
                    <th>Estado Actual</th>
                    <th>Habilitar/Deshabilitar</th>
                </thead>
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
            <button style="display:block; margin: 0.5rem auto;" class="col-sm-2 btn btn-dark  btn-lg button-submit " type="submit">Guardar Cambios</button>                          
        </form>
    </div>
</div>