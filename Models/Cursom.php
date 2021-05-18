<?php
    class Cursom{

        private $conection;
        private $cursos;
        
        public $curso_id;
        public $nombre_curso;
        public $cantidad_estudiante;
        public $cantidad_materia;
        public $docente_cargo;
      

        public function __construct(){
            require_once('Conexion.php');
            $this->conection = Conexion::get_conection(); 
            $this->cursos = array();
        }

        public function Listar(){
            try{
                $result = array();
                $stm = $this->conection->prepare("SELECT * FROM cursos");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function getting($curso_id){
                try {
                $stm = $this->conection->prepare("SELECT * FROM cursos WHERE curso_id = ?");
                $stm->execute(array($curso_id));
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Eliminar($curso_id){
                try {
                $stm = $this->conection->prepare("DELETE FROM cursos WHERE curso_id = ?");			          
                $stm->execute(array($curso_id));
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar($data){
            try{
			$sql = "UPDATE cursos SET
						nombre_curso = ?, 
						cantidad_estudiante = ?,
                        cantidad_materia = ?,
						docente_cargo= ?
                    WHERE curso_id =?";
                    // Prepare statement

                   /*$sql = "update cursos set nombre_curso='$data->nombre_curso',cantidad_estudiante='$data->cantidad_estudiante',cantidad_materia='$data->cantidad_materia',docente_cargo='$data->docente_cargo',where curso_id = '$data->curso_id'"; 
                    $stmt = $this->conection->prepare($sql);*/

                    // execute the query
                    //$stmt->execute();

                    
			$this->conection->prepare($sql)
			     ->execute(
				    array(
                     
                        $data->nombre_curso, 
                        $data->cantidad_estudiante,
                        $data->cantidad_materia,
                        $data->docente_cargo,
                        $data->curso_id
					)
				);
		} catch (Exception $e) 
		{
			die("este error".$e->getMessage());
		}
        }

        public function Registrar($data){
            try {
		$sql = "insert into cursos (curso_id,nombre_curso,cantidad_estudiante,cantidad_materia,docente_cargo) 
		        VALUES (curso_id, ?, ?, ?, ?)";

		$this->conection->prepare($sql)
		     ->execute(
				array(
                    $data->nombre_curso, 
                    $data->cantidad_estudiante,
                    $data->cantidad_materia,
                    $data->docente_cargo    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
        }
    }   
?>