<div class="content-list">
    <form action="" method="post" class="form-edit" enctype="multipart/form-data">
        <div>        
            <label for="">Editar Nombre del Artesanado </label>
            <input type="text" name="categoria" value="<?= $artesanado->categoria;?>">
            <input type="hidden" name="idartesanado" value="<?= $artesanado->idartesanado?>" >
        </div>

        <div>
            <label for="">Editar la URL de la Foto </label>
            <input type="url" name="url_foto" value="<?= $artesanado->url_foto;?>">
        </div>
        
        <button type="submit" id="pasar" class="button-submit">
            Guardar
        </button>
        <a href="/" id="reload-page" class="button-cancel">Cancelar</a>
    </form>
</div>