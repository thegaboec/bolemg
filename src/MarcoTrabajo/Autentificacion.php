<?php

namespace App\MarcoTrabajo;

use App\Modelos\Artesanos;
use App\Modelos\DatabaseTable;
use App\Modelos\Usuarios;

class Autentificacion {
    private  $modelo;
    private  $column;
    private  $password;
    /**
     * @param array<Usuarios,Artesanos> $modelos
     * @param array<string> $column
     */
    public function __construct(array $modelos, array $column,string $clave)
    {
        
        session_start();

        

        $this->modelo = $modelos;
        $this->column = $column;
        $this->password = $clave;
    }

    public function verificacion($usuario, $password) {
        $usuarioV = $this->modelo[0]->selectFromColumn($this->column[0],$usuario);
        $usuarioV = $usuarioV ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$usuario);
        // select where cedula = '025018665'
        if($usuarioV && password_verify($password, $usuarioV[0]->{$this->password})){
            session_regenerate_id();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['password'] = $usuarioV[0]->{$this->password};
            $_SESSION['rol'] = $usuarioV[0]->rol;
            return true;
            
        }
        
        return false;


    }

    public function estaLoguedo(){
        if(!isset($_SESSION['usuario'])){
            return false;
        }

        $usuarioV = $this->modelo[0]->selectFromColumn($this->column[0],$_SESSION['usuario']);
        $usuarioV = $usuarioV ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$_SESSION['usuario']);
        if($usuarioV && $usuarioV[0]->{$this->password} === $_SESSION['password']){
          
            return true;
        }
        return false;
    }

    public function usuarioLogueado():Usuarios|Artesanos|bool

    {
        if($this->estaLoguedo()){
            $usuarioV = $this->modelo[0]->selectFromColumn($this->column[0],$_SESSION['usuario']);
            $usuarioV = $usuarioV ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$_SESSION['usuario']);
            return $usuarioV[0];
        }

        return false;
    }


}