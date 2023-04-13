<?php
function autocargador($classDir){
    // src\\marcoTrabajo\\EntryPoitn
    $routa = str_replace('\\','/',$classDir) . '.php';

    require __DIR__ . '/' . $routa;
}

spl_autoload_register('autocargador');