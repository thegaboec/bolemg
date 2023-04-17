<?php

namespace App\Controladores\Secretaria;

use App\Modelos\Artesanados;
use PhpOffice\PhpSpreadsheet\{Spreadsheet,IOFactory};

class ActualizarArtesanado{

    private $artesanados;


    public function __construct(Artesanados $artesanados )
    {
        $this->artesanados = $artesanados;}

        

        public function view(){

                    $artesanado = $this->artesanados->select();

                return [
                    'titulo' => 'Actualizar Artesanado',
                    'template' => 'secretaria/actualizarArtesanado.html.php',
                    'variables' => ['artesanados' => $artesanado]
            ];
        }

        public function edit(){
            if(!isset($_GET['id'])){
                header('location: secretaria/actualizar/artesanado');
                exit();
            }
    
            $artesanado = $this->artesanados->getArtesanadoInformation($_GET['idartesanado']);
            return [
                'title' => 'Editar Local Comercial',
                'template' => 'secretaria/editarArtesanado.html.php',
                'variables' => [
                    'artesanados' => $artesanado
                ]
            ];
        }
     
}