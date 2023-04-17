<?php
namespace App\Controladores;
use App\MarcoTrabajo\Autentificacion;
use App\Modelos\Usuarios;

class Clave{
    private $autentificacion;
    private $usuarios;

    public function __construct(Usuarios $usuarios, Autentificacion $autentificacion)
    {
        $this->autentificacion = $autentificacion;
        $this ->usuarios =$usuarios;
    }
    
    public function cambioClave($variables = []){
        return [
            'titulo' => 'Cambio de clave',
            'template' => 'secretaria/cambioClave.html.php',
            'variables' => $variables
        ];
    }
    public function cambiClave($variables = []){
        return [
            'titulo' => 'Cambio de clave',
            'template' => 'presidente/cambioClave.html.php',
            'variables' => $variables
        ];
    }

  

    public function saveCambioClave(){
        if(empty($_POST['actual'])
            || empty($_POST['newpass'])
            || empty($_POST['repitpass'])
        ){
            return $this->cambioClave(['error' => 'Error no ingreso uno de los campos']);
        }
        $user = $this->autentificacion->usuarioLogueado();
        if(!password_verify($_POST['actual'],$user->clave)){
            return $this->cambioClave(['error' => 'La contraseña no coincide con el usuario actual']);
        }
        
        if($_POST['newpass'] !== $_POST['repitpass']){
            return $this->cambioClave(['error' => 'Error no coinciden las contraseñas nuevas']);
        }
        $password = password_hash($_POST['newpass'],PASSWORD_DEFAULT);
        
        try{
            $dataUser = [
                'clave' => $password,
                'idusuarios' => $user->idusuarios
            ];
            $this->usuarios->update($dataUser);
            $_SESSION['password'] = $password;
            return $this->cambioClave(['success' => 'Se cambio correctamente la contraseña']);
        }catch(\PDOException $e){
            return $this->cambioClave(['error' => 'Error: ' . $e->getMessage()]);
        }

    }
}

?>
