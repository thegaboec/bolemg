<div class="content-documentacion">
    <div class="">
        <form action="" method="post">

            <table class="list">
                <thead> 
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Habilitar/Deshabilitar</th>
                </thead>
                <tbody>
                    <?php $count = 0;
                    foreach($presidentes as $personal): ?>
                            <tr class="<?php
                                          if(isset($personal->estado) && $personal->estado === 'inactivo'){
                                             echo 'remove-agentente';
                                          }              
                                    ?>">
                                <td><?= $personal->idusuarios ?? 'desconocido'; ?></td>
                                <td><?= $personal->nombres ?? 'desconocido'; ?></td>
                                <td><?= $personal->apellidos ?? 'desconocido'; ?></td>
                                <td><?= $personal->correo?? 'desconocido'; ?></td>
                                <td><?= $personal->estado?? 'desconocido'; ?></td>
                                <td>
                                    <input type="checkbox" name="usuario<?= $count;?>[rol]" id="">
                                    <input type="hidden" name="usuario<?= $count;?>[idusuarios]" value="<?= $personal->idusuarios;?>">
                                </td>
                            </tr>
                    <?php $count ++; endforeach; ?>
                </tbody>
            </table>
            <button style="display:block; margin: 0.5rem auto;" class="button-submit" type="submit">Guardar Cambios</button>                          
        </form>
    </div>
</div>