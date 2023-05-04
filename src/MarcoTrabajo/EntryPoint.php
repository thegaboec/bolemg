<?php
namespace App\MarcoTrabajo;

class EntryPoint{

    private $ruta;
    private $metodo;
    /**
     * @var RutasAplicacion $rutasApilcaciones Contiene todas las rutas del sistema
     */
    private $rutasAplicaciones;



    public function __construct(string $ruta,string $metodo,RutasAplicacion $rutasAplicaciones)//inicio
    {
        $this->ruta=$ruta;
        $this->metodo=$metodo;
        $this->rutasAplicaciones = $rutasAplicaciones;
    }
    public function iniciar(){
        // $rutas[$this->ruta] - vistas/front/formlogin.php
       $rutas = $this->rutasAplicaciones->getRoutes();
       $controlador = $rutas[$this->ruta][$this->metodo]['controlador'];
       $accion = $rutas[$this->ruta][$this->metodo]['accion'];

       // restriciones de la ruta
        //1. login
        if(!isset($rutas[$this->ruta])){
          header('location: /contactos');
        }
        if(!isset($rutas[$this->ruta][$this->metodo])){
          header('location: /contactos');
        }
       if(isset($rutas[$this->ruta]['login']) && !$this->rutasAplicaciones->aut()->estaLoguedo()){
            header('location: /contactos');
       }

       //2. rol
       
       if(isset($rutas[$this->ruta]['rol']) && !$this->rutasAplicaciones->tieneRol($rutas[$this->ruta]['rol'])){
            header('location: /contactos');
       }

       $result=$controlador->$accion();
       $template=$result['template'];
       $titulo=$result['titulo'];

       if(isset($result['variables'])){
            $contenido = $this->cargaVistas($template,$result['variables']);
       }else{
        $contenido = $this->cargaVistas($template);
       }
       $usuariosTemplate = [
        'default' => 'layout_publico.html.php',
        'presidente' => 'layout_presidente.html.php',
        'secretaria' => 'layout_secretaria.html.php',
        'artesano' => 'layout_artesano.html.php',
        'empleador' => 'layout_empleador.html.php'
       ];
       $rutaT= preg_split('/\//',$this->ruta)[0];
       $templateRes = $usuariosTemplate[$rutaT] ?? $usuariosTemplate['default'];
       echo $this->cargaVistas('layout/' . $templateRes,[
        'titulo' => $titulo,
        'contenido' => $contenido,
        'usuario' => ''
       ]);


    }

    private function cargaVistas(string $template, array $variables=[]){
       extract($variables);
       ob_start();
       require __DIR__.'/../Vistas/'.$template;

       return ob_get_clean();


    }




}