<?php
    class Profesorm{

        private $conection;
        private $profesores;
        
        public $idProfesor;
        public $primerNombre;
        public $segundoNombre;
        public $primerApellido;
        public $segundoApellido;
        public $correo;
        public $suMateria;

        public function __construct(){
            require_once('Conexion.php');
            $this->conection = Conexion::get_conection(); 
            $this->profesores = array();
        }

        public function Listar(){
            try{
                $result = array();
                $stm = $this->conection->prepare("SELECT * FROM profesores");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function getting($idProfesor){
                try {
                $stm = $this->conection->prepare("SELECT * FROM profesores WHERE idProfesor = ?");
                $stm->execute(array($idProfesor));
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Eliminar($idProfesor){
                try {
                $stm = $this->conection->prepare("DELETE FROM profesores WHERE idProfesor = ?");			          
                $stm->execute(array($idProfesor));
            }catch (Exception $e){
                die($e->getMessage());
            }
        }

        public function Actualizar($data){
            try{
			$sql = "UPDATE profesores SET
						primerNombre = ?, 
						segundoNombre = ?,
                        primerApellido = ?,
						segundoApellido = ?, 
						correo = ?,
                        suMateria = ?
                    WHERE idProfesor =?";
                    // Prepare statement

                  /* $sql = "update profesores set primerNombre ='$data->primerNombre',segundoNombre='$data->segundoNombre',primerApellido='$data->primerApellido',segundoApellido='$data->segundoApellido',correo='$data->correo',suMateria='$data->suMateria' where idProfesor = '$data->idProfesor'"; 
                    $stmt = $this->conection->prepare($sql);
                    */
                    // execute the query
                    //$stmt->execute();

                    
			$this->conection->prepare($sql)
			     ->execute(
				    array(
                        $data->primerNombre, 
                        $data->segundoNombre,
                        $data->primerApellido,
                        $data->segundoApellido,
                        $data->correo,
                        $data->suMateria,
                        $data->idProfesor
                        
					)
				);
		} catch (Exception $e) 
		{
			die("este error".$e->getMessage());
		}
        }

        public function Registrar($data){
            try {
		$sql = "insert into profesores (idProfesor,primerNombre,segundoNombre,primerApellido,segundoApellido,correo,suMateria) 
		        VALUES (idProfesor, ?, ?, ?, ?,?,?)";

		$this->conection->prepare($sql)
		     ->execute(
				array(
                    $data->primerNombre, 
                    $data->segundoNombre,
                    $data->primerApellido,
                    $data->segundoApellido,
                    $data->correo,
                    $data->suMateria                    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
        }
    }   
?>