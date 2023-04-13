<?php

namespace App\Modelos;

class Artesanos extends DatabaseTable{

    public $rol;

    public function __construct()
    {
        parent::__construct('artesanos','idartesano','App\Modelos\Artesanos',['artesano','idartesano']  );
    }

    public function tieneRol($rol){
        if($this->rol === $rol) {
            return true;
        }

        return false;
    }
}