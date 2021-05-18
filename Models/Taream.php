<?php
    class Taream{

        private $conection;
        private $tarea;
        
        public $tarea_id;
        public $nombre_tarea;
        public $tiempo;
        public $intentos;
        
      

        public function __construct(){
            require_once('Conexion.php');
            $this->conection = Conexion::get_conection(); 
            $this->tarea = array();
        }

        public function Listar(){
            try{
                $result = array();
                $stm = $this->conection->prepare("SELECT * FROM tareas");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function getting($tarea_id){
                try {
                $stm = $this->conection->prepare("SELECT * FROM tareas WHERE tarea_id = ?");
                $stm->execute(array($tarea_id));
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Eliminar($tarea_id){
                try {
                $stm = $this->conection->prepare("DELETE FROM tareas WHERE tarea_id = ?");			          
                $stm->execute(array($tarea_id));
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar($tarea_id){
            try{
			$sql = "UPDATE tareas SET
						nombre_tarea = ?, 
						tiempo = ?,
                        intentos = ?
                    WHERE tarea_id =?";
                    // Prepare statement

                   /*$sql = "update tareas set nombre_tarea='$data->nombre_tarea',tiempo='$data->tiempo',intentos='$data->intentos',docente_cargo='$data->docente_cargo',where tarea_id = '$data->tarea_id'"; 
                    $stmt = $this->conection->prepare($sql);

                    // execute the query
                    $stmt->execute();*/

                    
			$this->conection->prepare($sql)
			     ->execute(
				    array(
                     
                        $data->nombre_tarea, 
                        $data->tiempo,
                        $data->intentos,
                        $data->tarea_id
					)
				);
		} catch (Exception $e) 
		{
			die("este error".$e->getMessage());
		}
        }

        public function Registrar($data){
            try {
		$sql = "insert into tareas (tarea_id,nombre_tarea,tiempo,intentos) 
		        VALUES (tarea_id, ?, ?, ?)";

		$this->conection->prepare($sql)
		     ->execute(
				array(
                    $data->nombre_tarea, 
                    $data->tiempo,
                    $data->intentos    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
        }
    }   
?>