<?php

namespace App\Controladores\Presidente;


use App\MarcoTrabajo\Autentificacion;
use App\Modelos\Usuarios;

use EmptyIterator;

class Modificar{

    private  $secretaria;

    public function __construct(  Usuarios $secretaria )
    {
        $this->secretaria = $secretaria;
        
    }


    public function view(){
        $secretaria =  $this->secretaria->selectFromColumn('rol',Usuarios::SECRETARIA);
        return [
            'titulo' => 'Habilitar - Deshabilitar Secretaria',
            'template' => 'presidente/modificar_secretaria.html.php',
            'variables' => [
                'secretaria' => $secretaria
            ]
        ];
        
    }
    public function saveRemoveSecretaria(){
        $dataSecretaria = [];
        foreach($_POST as $usuario){
            if(isset($usuario['rol'])){
                array_push($dataSecretaria,$usuario);
                
            }
        }
        
       

        $error = '';
        foreach($dataSecretaria as $personal){
            $person = $this->secretaria->selectFromColumn('idusuarios',$personal['idusuarios'])[0];
            $estado = '';
            if($person->estado === 'activo'){
                $estado = 'inactivo';
            }else{
                $estado = 'activo';
            }

            $dataFinal = [
                'estado' => $estado,
                'idusuarios' => $personal['idusuarios']
            ];

            try{
                $this->secretaria->update($dataFinal);
            }catch(\PDOException $e){
                $error = 'Error: ' . $e->getMessage();
            }
        }
        return $this->view();
    }

    
}