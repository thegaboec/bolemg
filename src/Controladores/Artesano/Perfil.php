<?php

namespace App\Controladores\Artesano;

use App\MarcoTrabajo\Autentificacion;
use App\Modelos\Artesanos;

class Perfil{


    private $artesanos;
    private $autenticacion;

    public function __construct(

        Artesanos $artesanos,
        Autentificacion $autenticacion
    )
    {
        $this->artesanos=$artesanos;
        $this->autenticacion=$autenticacion;

    }




    

    public function desplegar($variables=[]){

        $perfil=$this->autenticacion->usuarioLogueado();
        $variables['perfil']=$perfil;
       

        //var_dump($artesanos);
        //die;

        return[
            'template'=>'artesano/perfil.html.php',
            'titulo'=>'Perfil Laboral',
            'variables'=>$variables

        ];

    }

    public function actualizar(){

        $DirecionImage = './assets/fotosartesanos/';
        $DirecionTrabajos = './assets/trabajosrealizados/';
        
        
        $data=[

            'idartesano'=>$_POST['idartesano'],
            'nombres'=>$_POST['nombres'],
            //'foto' => ltrim($outputImage,'.'),
            'apellidos'=>$_POST['apellidos'],
            'direccion'=>$_POST['direccion'],
            'telefono'=>$_POST['telefono'],
            'correo'=>$_POST['correo'],
            'descripcion1'=>$_POST['descripcion1'],
            'descripcion2'=>$_POST['descripcion2'],
            'descripcion3'=>$_POST['descripcion3'],
            'descripcion4'=>$_POST['descripcion4']
            
            /*'imagen1' => ltrim($outputImage1,'.'),
            'imagen2' => ltrim($outputImage2,'.'),
            'imagen3' => ltrim($outputImage3,'.'),
            'imagen4' => ltrim($outputImage4,'.')*/

        ];

        if(!empty($_FILES['foto']['type']) ){ //aqui preguntas si existe el input de la vista y no existe ese esta vacio
            $tmp = $_FILES['foto']['tmp_name'];//lo que se ve es <img src="<?=$perfil->foto
            $name = $_FILES['foto']['name'];//seria de preguntar si existe ese img o si existe en la base 
            $outputImage = $DirecionImage . $name;
            $data['foto']=ltrim($outputImage,'.');

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            
        }

        if(!empty($_FILES['imagen1']['type']) ){ //aqui preguntas si existe el input de la vista y no existe ese esta vacio
            $tmp = $_FILES['imagen1']['tmp_name'];//lo que se ve es <img src="<?=$perfil->foto
            $name = $_FILES['imagen1']['name'];//seria de preguntar si existe ese img o si existe en la base 
            $outputImage = $DirecionTrabajos . $name;
            $data['imagen1']=ltrim($outputImage,'.');

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            
        }

        if(!empty($_FILES['imagen2']['type']) ){ //aqui preguntas si existe el input de la vista y no existe ese esta vacio
            $tmp = $_FILES['imagen2']['tmp_name'];//lo que se ve es <img src="<?=$perfil->foto
            $name = $_FILES['imagen2']['name'];//seria de preguntar si existe ese img o si existe en la base 
            $outputImage = $DirecionTrabajos . $name;
            $data['imagen2']=ltrim($outputImage,'.');

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            
        }

        if(!empty($_FILES['imagen3']['type']) ){ //aqui preguntas si existe el input de la vista y no existe ese esta vacio
            $tmp = $_FILES['imagen3']['tmp_name'];//lo que se ve es <img src="<?=$perfil->foto
            $name = $_FILES['imagen3']['name'];//seria de preguntar si existe ese img o si existe en la base 
            $outputImage = $DirecionTrabajos . $name;
            $data['imagen3']=ltrim($outputImage,'.');

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            
        }

        if(!empty($_FILES['imagen4']['type']) ){ //aqui preguntas si existe el input de la vista y no existe ese esta vacio
            $tmp = $_FILES['imagen4']['tmp_name'];//lo que se ve es <img src="<?=$perfil->foto
            $name = $_FILES['imagen4']['name'];//seria de preguntar si existe ese img o si existe en la base 
            $outputImage = $DirecionTrabajos . $name;
            $data['imagen4']=ltrim($outputImage,'.');

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            
        }

       
        
        

       

        try{

           

            $actualizar=$this->artesanos->update($data);
            
            

            return $this->desplegar(['success'=>"Se ingreso correctamente los datos"]);
              
            
        }catch(\PDOException $e){
                return $this->desplegar(['error'=>"No se guardaron los datos"]);
        }


        

        return $this->desplegar();
    }
}