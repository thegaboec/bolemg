<?php

namespace App\MarcoTrabajo;

use App\Controladores\Artesano\InicioArtesano;
use App\Controladores\Artesano\Perfil;
use App\Controladores\Clave;
use App\Controladores\Empleador\DesplegarPerfil;
use App\Controladores\Presidente\Secretaria;
use App\Controladores\Inicio;
use App\Controladores\Secretaria\RegistrarPresidente;
use App\Controladores\Secretaria\ModificarPresidente;
use App\Controladores\Presidente\Inicio as PresidenteInicio;
use App\Controladores\Presidente\Modificar;
use App\Controladores\Secretaria\ActualizarArtesanado;
use App\Controladores\Secretaria\InicioSecretaria;
use App\Controladores\Secretaria\ModificarArtesanado;
use App\Controladores\Secretaria\ModificarArtesano;
use App\Controladores\Secretaria\Publicar;
use App\Controladores\Secretaria\RegistrarArtesanado;
use App\Controladores\Secretaria\RegistrarArtesano;
use App\Controladores\Web\Login;
use App\Controladores\Empleador\InicioEmpleador as EmpleadorInicio;
use App\Controladores\Empleador\ListaArtesanos;
use App\Controladores\Empleador\VerArtesanados;
use App\Controladores\Web\RegistrarEmpleador;
use App\Modelos\Artesanos;
use App\Modelos\Usuarios;
use App\Modelos\Artesanados;
use App\Modelos\Publicaciones;


class RutasAplicacion{
    private $autenttificacion;
    private $usuarios;
    private $artesanos;
    private $artesanados;
    private $publicaciones;


    public function __construct()
    {
        $this->usuarios = new Usuarios;
        $this->artesanos = new Artesanos;
        $this->artesanados = new Artesanados;
        $this->publicaciones = new Publicaciones;
        $this->autenttificacion = new Autentificacion([$this->usuarios,$this->artesanos],['idusuarios','idartesano'],'clave');
    }

    public function getRoutes(){
       
        $inicio = new Inicio();
        $inicioPresidente = new PresidenteInicio;
        $agregarSecretaria= new Secretaria($this ->usuarios);
        $modificarSecretaria= new Modificar($this ->usuarios);
        $registrarPresidente = new RegistrarPresidente($this ->usuarios);
        $modificarPresidente= new ModificarPresidente($this ->usuarios);
        $inicioSecretaria = new InicioSecretaria;
        $registrarArtesano= new RegistrarArtesano($this ->artesanos);
        $modificarArtesano = new ModificarArtesano($this->artesanos);
        $registrarArtesanado = new RegistrarArtesanado ($this-> artesanados);
        $modificarArtesanado = new ModificarArtesanado ($this->artesanados);
        $actualizarArtesanado = new ActualizarArtesanado ($this-> artesanados);
        $publicar = new Publicar ($this->publicaciones);
        $perfilLaboral = new Perfil;
        $inicioArtesano = new InicioArtesano;
        $iniciarSession = new Login($this->autenttificacion);
        $nuevaClave = new Clave($this ->usuarios, $this->autenttificacion);
        $inicioEmpleador=new EmpleadorInicio();
        $verArtesanados=new VerArtesanados($this->artesanados);
        $listaArtesanos= new ListaArtesanos($this->artesanos);
        $desplegarPerfil= new DesplegarPerfil($this->artesanos);
        $registroEmpleador= new RegistrarEmpleador($this->usuarios);

      
        return [

//General
            ''=>[
                "GET"=>[
                    "controlador"=> $inicio,
                    "accion"=>'start'
                ]
                ],
            'inicio'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'start'
                    ],
                ],
            'artesanados'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'listarArtesanados'
                    ],
                ],
            'contactos'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'contactos'
                    ],
                ],

            'publicaciones'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'publicaG'
                    ],
                ],
            
            'publicacion'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'listarpublica'
                    ],
                ],
            'institucion'=>[
                    "GET"=>[
                        "controlador"=> $inicio,
                        "accion"=>'institucion'
                    ],
                ],
            'login'=>[
                    "GET"=>[
                        "controlador"=> $iniciarSession,
                        "accion"=>'logueo'
                    ],
                    "POST"=>[
                        "controlador"=> $iniciarSession,
                        "accion"=>'autentificacion'
                    ],
                ],

                'registro' =>[
                    "GET"=>[
                        "controlador"=> $registroEmpleador,
                        "accion"=>'registroE'
                    ],
                    "POST"=>[
                        "controlador"=> $registroEmpleador,
                        "accion"=>'add'
                    ],
                
                ],
//Presidente
                'presidente/cambio/clave' =>[
                    'GET' => [
                        'controlador' => $nuevaClave,
                        'accion' => 'cambiClave'
                    ],
                    'POST' => [
                        'controlador' => $nuevaClave,
                        'accion' => 'saveCambioClave'
                    ],
                    'login' => true
                    
                ],
                'presidente/inicio' =>[
                    "GET"=>[
                        "controlador"=> $inicioPresidente,
                        "accion"=>'index'
                    ],
                    //restrinciones para acceder a esta ruta
                    'login' => true, // loguedo
                    'rol' => Usuarios::PRESIDENTE //rol
                ],  
                
                
                'presidente/registrar/secretaria' =>[
                    "GET"=>[
                        "controlador"=> $agregarSecretaria,
                        "accion"=>'index'
                    ],
                    "POST"=>[
                        "controlador"=> $agregarSecretaria,
                        "accion"=>'add'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::PRESIDENTE //rol
            
                ],

                'presidente/modificar/secretaria' =>[
                    "GET"=>[
                        "controlador"=> $modificarSecretaria,
                        "accion"=>'view'
                    ],
                    "POST"=>[
                        "controlador"=> $modificarSecretaria,
                        "accion"=>'saveRemoveSecretaria'
                    ],
                    'login' => true, // loguedo
                    'rol' => Usuarios::PRESIDENTE//ro
                ],


//Secretaria
                'secretaria/cambio/clave' =>[
                    'GET' => [
                        'controlador' => $nuevaClave,
                        'accion' => 'cambioClave'
                    ],
                    'POST' => [
                        'controlador' => $nuevaClave,
                        'accion' => 'saveCambioClave'
                    ],
                    'login' => true
                    
                ],

                'secretaria/inicio' =>[
                    "GET"=>[
                        "controlador"=> $inicioSecretaria,
                        "accion"=>'index'
                    ],
                    'login' => true, // loguedo
                    'rol' => Usuarios::SECRETARIA //ro
                ],

                
                'secretaria/registrar/presidente' =>[
                    "GET"=>[
                        "controlador"=> $registrarPresidente,
                        "accion"=>'index'
                    ],
                "POST"=>[
                    "controlador"=> $registrarPresidente,
                    "accion"=>'add'
                ],
                
                'login' => true, // loguedo
                'rol' => Usuarios::SECRETARIA //rol
                ],


                'secretaria/modificar/presidente' =>[
                    "GET"=>[
                        "controlador"=> $modificarPresidente,
                        "accion"=>'removePresidente'
                    ],
                    "POST"=>[
                        "controlador"=> $modificarPresidente,
                        "accion"=>'saveRemovePresidente'
                    ],
                    'login' => true, // loguedo
                    'rol' => Usuarios::SECRETARIA //ro
                ],

                'secretaria/registrar/artesano' =>[
                    "GET"=>[
                        "controlador"=> $registrarArtesano,
                        "accion"=>'registrarA'
                    ],
                    "POST"=>[
                        "controlador"=> $registrarArtesano,
                        "accion"=>'agregar'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::SECRETARIA //rol
                ],

                
                'secretaria/habilitar-deshabilitar/artesano' =>[
                    "GET"=>[
                        "controlador"=> $modificarArtesano,
                        "accion"=>'modificarA'
                    ],
                      "POST"=>[
                        "controlador"=> $modificarArtesano,
                        "accion"=>'bajaArtesano'
                    ],
                    'login' => true, // loguedo
                    'rol' => Usuarios::SECRETARIA //rol
            
                    
                ],

                
                'secretaria/registrar/artesanado' =>[
                    "GET"=>[
                        "controlador"=> $registrarArtesanado,
                        "accion"=>'registrarArt'
                    ],
                    "POST"=>[
                        "controlador"=> $registrarArtesanado,
                        "accion"=>'nuevoArtesanados'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::SECRETARIA //rol
            
                ],
                                
                'secretaria/habilitar-deshabilitar/artesanado' =>[
                    "GET"=>[
                        "controlador"=> $modificarArtesanado,
                        "accion"=>'darbajaArt'
                    ],
                    "POST"=>[
                        "controlador"=> $modificarArtesanado,
                        "accion"=>'bajaArtesanados'
                    ],
                    'login' => true, // loguedo
                    'rol' => Usuarios::SECRETARIA //rol
            
                ],
                'secretaria/actualizar/artesanado' =>[
                    'GET' => [
                        'controlador' => $actualizarArtesanado,
                        'accion' => 'view'
                    ],
                    'login' => true,
                    'permission' =>Usuarios::SECRETARIA
                ],
                'secretaria/editar/artesanado' =>[
                    'GET' => [
                        'controlador' => $actualizarArtesanado,
                        'accion' => 'edit'
                    ],
                    'login' => true,
                    'permission' =>Usuarios::SECRETARIA
                ],

                'secretaria/publicar/anuncio' =>[
                    "GET"=>[
                        "controlador"=> $publicar,
                        "accion"=>'publicarAnuncio'
                    ],
                    "POST"=>[
                        "controlador"=> $publicar,
                        "accion"=>'anuncio'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::SECRETARIA //rol
            
                ],

                'secretaria/listado/anuncio' =>[
                    "GET"=>[
                        "controlador"=> $publicar,
                        "accion"=>'listadoPublicacion'
                    ],
                    "POST"=>[
                        "controlador"=> $publicar,
                        "accion"=>'publica'
                    ],
                    
                    'login' => true, // loguedo
                    'rol' => Usuarios::SECRETARIA //rol
            
                ],

                


//Artesano
                'artesano/inicio' =>[
                    "GET"=>[
                        "controlador"=> $inicioArtesano,
                        "accion"=>'indexA'
                    ],
                ],  
                'artesano/perfil' =>[
                    "GET"=>[
                        "controlador"=> $perfilLaboral,
                        "accion"=>'perfilLaboral'
                    ],
                ],

//Empleador


                'empleador' =>[
                    "GET"=>[
                        "controlador"=> $inicioEmpleador,
                        "accion"=>'index'
                    ],
                    //restrinciones para acceder a esta ruta
                    'login' => true, // loguedo
                    'rol' => Usuarios::EMPLEADOR //rol
                ],  

                'empleador/visualizar/artesanados'=>[
                    "GET"=>[
                        "controlador"=> $verArtesanados,
                        "accion"=>'listarArtesanados'
                    ],

                    'login' => true, // loguedo
                    'rol' => Usuarios::EMPLEADOR //rol
                ],

                'empleador/lista/artesanos'=>[
                    "GET"=>[
                        "controlador"=> $listaArtesanos,
                        "accion"=>'listar'
                    ],

                    'login' => true, // loguedo
                    'rol' => Usuarios::EMPLEADOR //rol
                ],

                'empleador/perfil'=>[
                    "GET"=>[
                        "controlador"=> $desplegarPerfil,
                        "accion"=>'desplegar'
                    ],

                    'login' => true, // loguedo
                    'rol' => Usuarios::EMPLEADOR //rol
                ],



//Salir 

                'logout' => [
                    'GET' => [
                        "controlador" => $iniciarSession,
                        "accion" => 'logOut'
                    ]
                    ],


        ];


    }

    public function aut(): Autentificacion
    {
        return $this->autenttificacion;
    }

    public function tieneRol($rol) {
        $usuario = $this->autenttificacion->usuarioLogueado();

        if($usuario){
           return $usuario->tieneRol($rol);
        }

        return false;
    }

}
