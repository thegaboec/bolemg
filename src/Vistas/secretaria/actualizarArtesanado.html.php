<div class="content-list">
<?php if(isset($error)): ?>
    <p class=" text-center error bg-danger text-white p-4 text-center w-50 m-auto">
              <?= $error ?>
        </p>
<?php endif; ?>    
<?php if(isset($success)): ?>
    <p class=" text-center error bg-danger text-white p-4 text-center w-50 m-auto">
           <?= $success ?>
        </p>
<?php endif; ?>  

<table class="table text-center table-hover " >
        <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>URL de la Foto</th>

                </tr>
            </thead>
            <tbody>
                <?php  foreach($artesanados as $artesanado): ?>

                    <tr>
                        <td><?= $artesanado->idartesanado  ?? 'sin datos' ?></td>
                        <td><?= $artesanado->categoria?? 'sin datos' ?></td>
                        <td><?= $artesanado->url_foto ?? 'sin datos' ?></td>
                        <td><a class="button-submit" href="/editar/artesanado"<?= $artesanado->idartesanado ?>">EDITAR</a></td>
                    </tr>

                <?php endforeach;?>
            </tbody>
        </table>
</div>