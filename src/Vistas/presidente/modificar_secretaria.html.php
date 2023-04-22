<div class="content-documentacion p-5">
    
    <h2 class="fw-light thead-light text-dark text-center">Habilitar - Inhabilitar Secretaria </h2>
    <br>
        <form action="" method="post">

        <table class="table  table-bordered border-primary text-center  caption-top" >
        <thead class="table-primary ">
            <tr class=" pt-5 border-primary ">
                    <th class="border-primary lead text-body-dark" ><strong>CEDULA</strong></th>
                    <th class="border-primary lead text-body-dark"><strong>NOMBRES</strong></th>
                    <th class="border-primary lead text-body-dark"><strong>APELLIDOS</strong></th>
                    <th class="border-primary lead text-body-dark "><strong>CORREO</strong></th>
                    <th class="border-primary lead text-body-dark"><strong>ESTADO</strong></th>
                    <th class="border-primary lead text-body-dark"><strong>HABILITAR/INHABILITAR</strong></th></tr>
                </thead>
                <tbody>
                    <?php $count = 0;
                    foreach($secretaria as $personal): ?>
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
            <br>
            <button style="display:block; margin: 0.5rem auto;" class="button-submit col-sm-2 btn  btn-primary button-submit" type="submit">Guardar Cambios</button>                          
        </form>
    </div>
</div>