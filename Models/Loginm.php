<?php 
  require_once('Controllers/Loginc.php');
  class Loginm{
    private $connection;
    private $who;
    public function __construct(){
        try{
              $this->connection = Conexion::get_conection();     
        }
          catch(Exception $e){
            die($e->getMessage());
          }
    }

    public function validate_user($user_mail, $pswd){
        session_start();
        $flag = false;
        $location;
        $sql_query = "select correo_usuario, clave,rol from usuarios where correo_usuario = ? and clave = ?";
        $resultado = $this->connection->prepare($sql_query);
        $resultado->execute([$user_mail,$pswd]);
        
        foreach($resultado as $records){
          if(($records['correo_usuario'] == $user_mail && $records['clave'] == $pswd) && $records['rol'] == 1){
            $location = 'Location: Views/homeadministrador.php';
            $flag = true;
            $_SESSION['Usuario']="administrador";
            $this->who = $records['correo_usuario'];
          }
          elseif(($records['correo_usuario'] == $user_mail && $records['clave'] == $pswd) && $records['rol'] == 0){
            $location ='Location: Views/homeestudiante.php';
            $flag = true;
            $_SESSION['Usuario']="estudiante";
            $this->who = $records['correo_usuario'];
          }
        }
        if($flag){
         
          header($location);
     
        }
        else{
          header('Location: index.php');
        }
    }

    public function get_user(){
      return $this->who;
    }

  }

?>