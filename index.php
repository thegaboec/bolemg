<?php
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/config/database.php';

use App\MarcoTrabajo\{EntryPoint,RutasAplicacion};
use Symfony\Component\Dotenv\Dotenv;



$ruta= ltrim(strtok($_SERVER["REQUEST_URI"],'?'),'/');
try {
    //code...
    $metodo=($_SERVER["REQUEST_METHOD"]);
    $rutasApp = new RutasAplicacion();
    $startPoint= new EntryPoint($ruta,$metodo,$rutasApp);
    
    $startPoint->iniciar();
} catch (\PDOException $e) {
    //throw $th;
    echo $e->getMessage() . ' in ' . $e->getFile() .' : ' . $e->getLine();
}






