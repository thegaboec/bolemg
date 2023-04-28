<div class="content-documentacion p-5">
    
    <h2 class="fw-light thead-light text-dark text-center">Habilitar - Inhabilitar Publicaciones</h2>
    <br>
        <form action="" method="post">
        <table class=" p-5 table table-hover table-bordered  text-center  caption-top" >
        <thead class="p-5 table-primary ">
            <tr class=" pt-5 border-primary ">
                    <th class=" lead text-body-dark"><strong>FECHA</strong></th>
                    <th class=" lead text-body-dark"><strong>TITULO</strong></th>
                    <th class=" lead text-body-dark"><strong>PUBLICACIÓN</strong></th>
                    <th class=" lead text-body-dark"><strong>ESTADO</strong></th>
                    <th class=" lead text-body-dark"><strong>HABILITAR - INHABILITAR</strong></th></tr>
                </thead>
                <tbody>
                    <?php $count = 0;
                    foreach($publicaciones as $publicacion): ?>
                                <tr class="<?php
                                          if(isset($publicacion->estado) && $publicacion->estado === 'inactivo'){
                                             echo 'remove-publicacion';
                                          }              
                                    ?>">
                                <td><?= $publicacion->fecha ?? 'desconocido'; ?></td>
                                <td><?= $publicacion->titulo ?? 'desconocido'; ?></td>
                                <td><?= $publicacion->publicacion ?? 'desconocido'; ?></td>
                                
                                <td><?= $publicacion->estado ?? 'desconocido'; ?></td>
                                
                                <td>
                                    <input class="text-center" type="checkbox" name="publicacion<?= $count;?>[estado]" id="">
                                    <input type="hidden" name="publicacion<?= $count;?>[idpublicaciones]" value="<?= $publicacion->idpublicaciones;?>">
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