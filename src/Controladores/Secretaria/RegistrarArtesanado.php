<?php

namespace App\Controladores\Secretaria;
use App\Modelos\Artesanados;


class RegistrarArtesanado{
    private $artesanados;

    public function __construct( Artesanados $artesanados)
    {
        $this-> artesanados = $artesanados;
    }
    public function registrarArt($variable){
        return [
            'titulo' => 'Registrar Artesanado',
            'template' => 'secretaria/registrarArtesanado.html.php',
            'variable' => $variable
        ];
    }
    public function nuevoArtesanados(){

        $tmp = $_FILES['url_foto']['tmp_name'];
        $name = $_FILES['url_foto']['name'];
        $direccionJson = './src/Includes/imgartesanado.json';
        $DirecionImage = './assets/img/';
        $outputImage = $DirecionImage . $name;

        if(move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
            $jsonImage = file_get_contents($direccionJson);// traemos el archivo json que contien la url de la imagen del logo
            $dataImage = json_decode($jsonImage,true);
            $dataImage['img'] = ltrim($outputImage,'.'); // le damos la nueva direccion del logo
            file_put_contents($direccionJson,json_encode($dataImage)); 
            return $this->registrarArt(['success' => 'Se cambio correctamente el logotipo']);
        }else{
            return $this->registrarArt(['error' => 'Error ocurrio un proble al guardar la imagen intente nuevamente']);
        }
    
        $add =[
            'idartesanado' => trim($_POST['idartesanado']),
            'categoria' => trim($_POST['categoria']), 
            'url_foto' => $DirecionImage, 
            'estado' => Artesanados::ESTADO_ACTIVO
        ];

        try{
            $this ->artesanados->insert($add);
            return[
                'titulo' => 'Registrar Artesanado',
                'template' => 'secretaria/registrarArtesanado.html.php',
                'variables' => [
                        
                    'success' => 'Se registro correctamente el nuevo artesanado'
                ]
                ];
            
        }catch(\PDOException $e){
                return [
                    'titulo'=>'Agregar Secretaria',
                    'template'=>'secretaria/registrarArtesanado.html.php',
                    'variables' => [
                        
                        'error' => 'No se pudo registrar'
                        ] 
                     ];
        }
    }
}