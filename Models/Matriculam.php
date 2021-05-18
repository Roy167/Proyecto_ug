<?php
    class Matriculam{

        private $conection;
        private $matricula;
        
        public $matricula_id;
        public $matricula_iden;
        public $pertenece;
        public $numero_materia;
        public $curso_pernece;
      

        public function __construct(){
            require_once('Conexion.php');
            $this->conection = Conexion::get_conection(); 
            $this->matricula = array();
        }

        public function Listar(){
            try{
                $result = array();
                $stm = $this->conection->prepare("SELECT * FROM matriculas");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function getting($matricula_id){
                try {
                $stm = $this->conection->prepare("SELECT * FROM matriculas WHERE matricula_id = ?");
                $stm->execute(array($matricula_id));
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Eliminar($matricula_id){
                try {
                $stm = $this->conection->prepare("DELETE FROM matriculas WHERE matricula_id = ?");			          
                $stm->execute(array($matricula_id));
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar($matricula_id){
            try{
			$sql = "UPDATE matriculas SET
						matricula_iden = ?, 
						pertenece= ?,
                        numero_materia = ?,
						curso_pernece = ?
                    WHERE matricula_id =?";
                    // Prepare statement

                   /*$sql = "update matriculas set matricula_iden='$data->matricula_iden',pertenece='$data->pertenece',numero_materia='$data->numero_materia',curso_pernece='$data->curso_pernece', where matricula_id = '$data->matricula_id'"; 
                    $stmt = $this->conection->prepare($sql);

                    // execute the query
                    $stmt->execute();*/

                    
			$this->conection->prepare($sql)
			     ->execute(
				    array(
                     
                        $matricula_id->matricula_iden, 
                        $matricula_id->pertenece,
                        $matricula_id->numero_materia,
                        $matricula_id->curso_pernece,
                        $matricula_id->matricula_id
					)
				);
		} catch (Exception $e) 
		{
			die("este error".$e->getMessage());
		}
        }

        public function Registrar($data){
            try {
		$sql = "insert into matriculas (matricula_id,matricula_iden,pertenece,numero_materia,curso_pernece) 
		        VALUES (matricula_id, ?, ?, ?, ?)";

		$this->conection->prepare($sql)
		     ->execute(
				array(
                    $data->matricula_iden, 
                    $data->pertenece,
                    $data->numero_materia,
                    $data->curso_pernece    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
        }
    }   
?>