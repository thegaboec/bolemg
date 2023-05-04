<?php
namespace App\Controladores\Web;

use App\Modelos\Usuarios;

class RegistrarEmpleador{

    private $empleador;


    public function __construct(

        Usuarios $empleador

    )
    {
        $this->empleador=$empleador;
    }


    public function registroE($variables=[]){

        $redireccion=[
            Usuarios::ARTESANO=>'/artesano/inicio',
            Usuarios::SECRETARIA=>'/secretaria/inicio',
            Usuarios::PRESIDENTE=>'/presidente/inicio',
            Usuarios::EMPLEADOR=>'/empleador/inicio'
        ];

        if(isset($_SESSION['usuario'])){
            $rol=$_SESSION['rol'];
            $direccion=$redireccion[$rol];
            header('location: '.$direccion);
            exit();
        }

        return[
            'titulo'=> 'Registro',
            'template'=>'front/registro_empleador.html.php',
            'variables'=> $variables


        ];


    }

    public function add(){
        
        if(empty($_FILES['fotousuario']['name'])){
            return $this->registroE(
                ['error' => 'Error no ingreso ninguna imagen']
            );
        }

        $tmp = $_FILES['fotousuario']['tmp_name'];
        $name = $_FILES['fotousuario']['name'];
        $DirecionImage = './assets/fotosempleador/';
        $outputImage = $DirecionImage . $name;
        

        $data=[

            'idusuarios' => trim($_POST['idusuarios']),
            'nombres'=> $_POST['nombres'],
            'apellidos'=> $_POST['apellidos'],
            'correo'=> $_POST['correo'],
            'clave'=> password_hash($_POST['idusuarios'],PASSWORD_DEFAULT),
            'rol'=> Usuarios::EMPLEADOR,
            'estado'=> Usuarios::ESTADO_ACTIVO,
            'telefono' => trim($_POST['telefono']),
            'fotousuario' => trim($outputImage)


        ];

       

        try {
            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
               
            }
            $this->empleador->insert($data);

            return $this->registroE(['success'=>"Se registro correctamente"]);
        } catch (\PDOException $e) {
            return $this->registroE(['error'=>"No se pudo registrar correctamente"]);
        }

    }


}