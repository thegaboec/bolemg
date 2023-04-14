<?php

namespace App\MarcoTrabajo;

use App\Controladores\Artesano\InicioArtesano;
use App\Controladores\Artesano\Perfil;
use App\Controladores\Presidente\Secretaria;
use App\Controladores\Inicio;
use App\Controladores\Secretaria\RegistrarPresidente;
use App\Controladores\Secretaria\ModificarPresidente;
use App\Controladores\Presidente\Inicio as PresidenteInicio;
use App\Controladores\Secretaria\InicioSecretaria;
use App\Controladores\Secretaria\ModificarArtesanado;
use App\Controladores\Secretaria\ModificarArtesano;
use App\Controladores\Secretaria\Publicar;
use App\Controladores\Secretaria\RegistrarArtesanado;
use App\Controladores\Secretaria\RegistrarArtesano;
use App\Controladores\Web\Login;
use App\Modelos\Artesanos;
use App\Modelos\Usuarios;


class RutasAplicacion{
    private $autenttificacion;
    private $usuarios;
    private $artesanos;

    public function __construct()
    {
        $this->usuarios = new Usuarios;
        $this->artesanos = new Artesanos;
        $this->autenttificacion = new Autentificacion([$this->usuarios,$this->artesanos],['idusuarios','idartesano'],'clave');
    }

    public function getRoutes(){
       
        $inicio = new Inicio();
        $inicioPresidente = new PresidenteInicio;
        $agregarSecretaria= new Secretaria($this ->usuarios);
        $registrarPresidente = new RegistrarPresidente($this ->usuarios);
        $modificarPresidente= new ModificarPresidente($this ->usuarios);
        $inicioSecretaria = new InicioSecretaria;
        $registrarArtesano= new RegistrarArtesano;
        $modificarArtesano = new ModificarArtesano;
        $registrarArtesanado = new RegistrarArtesanado;
        $modificarArtesanado = new ModificarArtesanado;
        $publicar = new Publicar;
        $perfilLaboral = new Perfil;
        $inicioArtesano = new InicioArtesano;
        $iniciarSession = new Login($this->autenttificacion);

      
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
//Presidente
                'presidente' =>[
                    "GET"=>[
                        "controlador"=> $inicioPresidente,
                        "accion"=>'index'
                    ],
                    //restrinciones para acceder a esta ruta
                    'login' => true, // loguedo
                    'rol' => Usuarios::PRESIDENTE //rol
                ],  
                
                
                'presidente/agregar/secretaria' =>[
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




//Secretaria
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
                ],

                
                'secretaria/modificarinhabilitar/artesano' =>[
                    "GET"=>[
                        "controlador"=> $modificarArtesano,
                        "accion"=>'modificarA'
                    ],
                ],

                
                'secretaria/registrar/artesanado' =>[
                    "GET"=>[
                        "controlador"=> $registrarArtesanado,
                        "accion"=>'registrarArt'
                    ],
                ],
                                
                'secretaria/modificarinhabilitar/artesanado' =>[
                    "GET"=>[
                        "controlador"=> $modificarArtesanado,
                        "accion"=>'modificarArt'
                    ],
                ],

                'secretaria/publicar/anuncio' =>[
                    "GET"=>[
                        "controlador"=> $publicar,
                        "accion"=>'publicarAnuncio'
                    ],
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
