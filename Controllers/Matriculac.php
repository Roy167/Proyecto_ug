<?php
    require_once ('Models/Matriculam.php');
    class Matriculac{
        private  $model;
        private $tabla;
        public function __construct(){
            $this->model = new Matriculam();
        }
        public function listar_ajax(){
            $this->tabla.="<table>";
            $this->tabla.="<tr>";
            $this->tabla.="<th>Matricula ID</th>";
            $this->tabla.="<th>Identificadoriden</th>";
            $this->tabla.="<th>Pertenece a</th>";
            $this->tabla.="<th>Cantidad de materias</th>";
            $this->tabla.="<th>Curso vinculado</th>";
            $this->tabla.="<th colspan='3' style='text-align:center;'>Opciones</th>";
            $this->tabla.="</tr>";
            foreach($this->model->Listar() as $tabla){
           $this->tabla.="<tr class='cuerpo'>";
           $this->tabla.="<td>".$tabla->matricula_id."</td>";
           $this->tabla.="<td>".$tabla->matricula_iden."</td>";
           $this->tabla.="<td>".$tabla->pertenece."</td>";
           $this->tabla.="<td>".$tabla->numero_materia."</td>";
           $this->tabla.="<td>".$tabla->curso_pernece."</td>";
           $this->tabla.="<td>"."<a href='../index.php?c=Matriculac&a=get_crud&curso_id=$tabla->matricula_id' onclick='borrar_ajax()'>&#128257;Actualizar</a>"."</td>";
           $this->tabla.="<td>"."<a href='../index.php?c=Cursoc&a=Eliminar&curso_id=$tabla->matricula_id'>&#10062;Eliminar</a>"."</td>";
           $this->tabla.="</tr>";
           }
           $this->tabla.="</table>";
           echo $this->tabla;
      
   }
       

        public function get_crud(){
            
            if(isset($_REQUEST['matricula_id'])){
                $resultado = $this->model->getting($_REQUEST['matricula_id']);
            }
            require_once('Views/matricula.php'); 
        }

        public function guardar(){
            $this->model->matricula_iden = $_REQUEST['matricula_iden'];
            $this->model->pertenece=$_REQUEST['pertenece'];
            $this->model->numero_materia = $_REQUEST['numero_materia'];
            $this->model->curso_pernece = $_REQUEST['curso_pernece'];
                $this->model->Registrar($this->model);
            
        }

        public function actualizar(){
            $this->model->matricula_id = $_REQUEST['matricula_id'];
            $this->model->matricula_iden = $_REQUEST['matricula_iden'];
            $this->model->pertenece=$_REQUEST['pertenece'];
            $this->model->numero_materia = $_REQUEST['numero_materia'];
            $this->model->curso_pernece= $_REQUEST['curso_pernece'];
                $this->model->Actualizar($this->model);
                header('Location: index.php');
            

        }

        public function Eliminar(){
            $this->model->Eliminar($_REQUEST['matricula_id']);
            
        }

    }
?>