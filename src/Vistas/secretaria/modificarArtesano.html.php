<div class="content-documentacion">
    <div class="">
        <form action="" method="post">

        <table class="table text-center table-hover " >
        <thead class="thead-light">
                    <th>Cédula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Artesanado</th>
                    <th>Estado</th>
                    <th>Habilitar/Deshabilitar</th>
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
                                <td>
                                    <input type="checkbox" name="artesano<?= $count;?>[estado]" id="">
                                    <input type="hidden" name="artesano<?= $count;?>[idartesano]" value="<?= $artesano->idartesano;?>">
                                </td>
                            </tr>
                    <?php $count ++; endforeach; ?>
                </tbody>
            </table>
            <button style="display:block; margin: 0.5rem auto;" class="button-submit col-sm-2 btn btn-dark  btn-lg button-submit" type="submit">Guardar Cambios</button>                          
        </form>
    </div>
</div>