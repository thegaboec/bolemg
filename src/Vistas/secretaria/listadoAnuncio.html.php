<div class="content-documentacion">
    <div class="">
        <form action="" method="post">

            <table class="table text-center table-hover " >

                <thead class="thead-light">
                    <th>Fecha</th>
                    <th>Titulo</th>
                    <th>Anuncio</th>
    
                    <th>Estado</th>
                    <th>Habilitar/Deshabilitar</th>
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
                                    <input type="hidden" name="publicacion<?= $count;?>[idpublicacion]" value="<?= $publicacion->idpublicacion;?>">
                                </td>

                            </tr>
                    <?php $count ++; endforeach; ?>
                </tbody>
            </table>
            <button style="display:block; margin: 0.5rem auto;" class="col-sm-2 btn btn-dark  btn-lg button-submit " type="submit">Guardar Cambios</button>                          
        </form>
    </div>
</div>