<?php

namespace App\Modelos\Conexion;

use PDO;


class ConexionDB extends PDO {

    

    private $HOST;
    private $DB_NAME;
    private $USER;
    private $PASS;
    private $PLUGIN;
    private $PUERTO;

    public function __construct()
    {
        $this->HOST = $_ENV['HOST'];
        $this->DB_NAME =  $_ENV['DBNAME'];
        $this->USER = $_ENV['USER'];
        $this->PASS = $_ENV['PASSWORD'];
        $this->PLUGIN = $_ENV['PLUGIN'];
        $this->PUERTO = $_ENV['PORT'];

        parent::__construct($this->PLUGIN.':host=' . $this->HOST . ';port='.$this->PUERTO.';setchar=utf8;dbname=' . $this->DB_NAME, $this->USER,$this->PASS);
        $this->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }


}