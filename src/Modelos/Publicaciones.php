<?php 

namespace App\Modelos;

class Publicaciones extends DatabaseTable{
    public const PRESIDENTE = 'Presidente';
    public const SECRETARIA = 'Secretaria';
    public const ARTESANO = 'Artesano';
    public const EMPLEADOR = 'Empleador';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';

    public $idpublicaciones;
    public $publicacion;
    public $fecha;
    public $foto_publicacion;

    public function __construct(){
        parent::__construct('publicaciones','idpublicaciones','App\Modelos\Publicaciones',['publicaciones','idpublicaciones']);
    }

    public function verPublicacion($idpublicaciones){

        $consulta='SELECT *FROM publicaciones WHERE estado =:estado'. 

        ' AND  idpublicaciones =:idpublicaciones';

       $result=$this->runQuery($consulta,['estado'=>self::ESTADO_ACTIVO,'idpublicaciones'=>$idpublicaciones]);

       return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }

    public function metodoChunk(/*Si necesito para consultas con argumentos*/){

        //este metodo me va a recibir los argumentos que necesita la consulta para funcionar

            $result =Usuarios::runChunck(function($page,$count){
            $pages =($page - 1) * $count;
            $count = $count * $page;
            $estado=Usuarios::ESTADO_ACTIVO;
            $result=$this->query(
            "SELECT * FROM publicaciones WHERE estado ='$estado'  LIMIT $count OFFSET $pages"
           );
          
           return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);
        });

        return $result;

        
    }

    public function metodoChuckSelect(){
        $result =Usuarios::runChunck(function($page,$count){
            $pages =($page - 1) * $count;
            $count = $count * $page;
            $estado=Usuarios::ESTADO_ACTIVO;
            $result=$this->query(
            "SELECT * FROM publicaciones  LIMIT $count OFFSET $pages"
           );
          
           return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);
        });

        return $result;
    }  


}