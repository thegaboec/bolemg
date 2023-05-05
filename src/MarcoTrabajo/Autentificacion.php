<?php

namespace App\MarcoTrabajo;

use App\Modelos\Artesanos;
use App\Modelos\DatabaseTable;
use App\Modelos\Usuarios;
use Illuminate\Support\Collection;

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

        $usuarioV = count($usuarioV) > 0 ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$usuario);
        
        // select where cedula = '025018665'
        if($usuarioV && password_verify($password, $usuarioV[0]->{$this->password})&& $usuarioV[0]->estado !== 'inactivo'){
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
        $usuarioV = count($usuarioV) > 0 ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$_SESSION['usuario']);
        if($usuarioV && $usuarioV[0]->{$this->password} === $_SESSION['password']){
          
            return true;
        }
        return false;
    }

    public function usuarioLogueado():Usuarios|Artesanos|bool

    {
        if($this->estaLoguedo()){
            $usuarioV = $this->modelo[0]->selectFromColumn($this->column[0],$_SESSION['usuario']);
            $result= count($usuarioV) > 0 ? new Usuarios : new Artesanos;
            $usuarioV = $usuarioV ? $usuarioV : $this->modelo[1]->selectFromColumn($this->column[1],$_SESSION['usuario']);
            
            if($result instanceof Usuarios){
                $result->idusuarios = $usuarioV[0]->idusuarios;
                $result->nombres = $usuarioV[0]->nombres;
                $result->apellidos = $usuarioV[0]->apellidos;
                $result->correo = $usuarioV[0]->correo;
                $result->clave = $usuarioV[0]->clave;
                $result->telefono = $usuarioV[0]->telefono;
                $result->rol = $usuarioV[0]->rol;
                $result->estado = $usuarioV[0]->estado;
                $result->fotousuario = $usuarioV[0]->fotousuario;
            }else{

                $result->idartesano = $usuarioV[0]->idartesano;
                $result->nombres = $usuarioV[0]->nombres;
                $result->apellidos = $usuarioV[0]->apellidos;
                $result->correo = $usuarioV[0]->correo;
                $result->clave = $usuarioV[0]->clave;
                $result->telefono = $usuarioV[0]->telefono;
                $result->rol = $usuarioV[0]->rol;
                $result->estado = $usuarioV[0]->estado;
                $result->foto = $usuarioV[0]->foto;
                $result->idartesanado = $usuarioV[0]->idartesanado;
                $result->direccion = $usuarioV[0]->direccion;
                $result->imagen1 = $usuarioV[0]->imagen1;
                $result->imagen2 = $usuarioV[0]->imagen2;
                $result->imagen3 = $usuarioV[0]->imagen3;
                $result->imagen4 = $usuarioV[0]->imagen4;
                $result->calificacion = $usuarioV[0]->calificacion;
                $result->descripcion1 = $usuarioV[0]->descripcion1;
                $result->descripcion2 = $usuarioV[0]->descripcion2;
                $result->descripcion3 = $usuarioV[0]->descripcion3;
                $result->descripcion4 = $usuarioV[0]->descripcion4;
            }

            return $result;
        }

        return false;
    }


}