<?php 
namespace App\Controladores\Secretaria;

use App\Modelos\Usuarios;

class ModificarPresidente{

    private $presidentes;



    public function __construct(
        Usuarios $presidentes
    )
    {
        $this->presidentes=$presidentes;
    }

    public function index(){

        return[
            'titulo' => 'Modificar lista de presidentes',
            'template'=> 'secretaria/modificar_presidente.html.php'
        ];


    }

    public function removePresidente(){
        $presidentes =  $this->presidentes->selectFromColumnPaginacion('rol',Usuarios::PRESIDENTE);
        return [
            'titulo' => 'Habilitar - Deshabilitar Presidentes',
            'template' => 'secretaria/modificar_presidente.html.php',
            'variables' => [
                'presidentes' => $presidentes
            ]
        ];
        
    }
    public function saveRemovePresidente(){
        $dataPresidentes = [];
        foreach($_POST as $usuario){
            if(isset($usuario['rol'])){
                array_push($dataPresidentes,$usuario);
                
            }
        }
        
       

        $error = '';
        foreach($dataPresidentes as $personal){
            $person = $this->presidentes->selectFromColumn('idusuarios',$personal['idusuarios'])[0];
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
                $this->presidentes->update($dataFinal);
            }catch(\PDOException $e){
                $error = 'Error: ' . $e->getMessage();
            }
        }
        return $this->removePresidente();
    }

}