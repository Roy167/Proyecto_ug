<?php
    require_once ('Models/Cursom.php');
    class Cursoc{
        private  $model;
        private $tabla;
        public function __construct(){
            $this->model = new Cursom();
        }
        public function listar_ajax(){
            $this->tabla.="<table>";
            $this->tabla.="<tr>";
            $this->tabla.="<th>Curso ID</th>";
            $this->tabla.="<th>Nombre_curso</th>";
            $this->tabla.="<th>Cantidad_materia</th>";
            $this->tabla.="<th>Cantidad_estudiante</th>";
            $this->tabla.="<th>Cantidad_materia</th>";
            $this->tabla.="<th>Docente a cargo</th>";
            $this->tabla.="<th colspan='3' style='text-align:center;'>Opciones</th>";
            $this->tabla.="</tr>";
            foreach($this->model->Listar() as $tabla){
           $this->tabla.="<tr class='cuerpo'>";
           $this->tabla.="<td>".$tabla->curso_id."</td>";
           $this->tabla.="<td>".$tabla->nombre_curso."</td>";
           $this->tabla.="<td>".$tabla->cantidad_estudiante."</td>";
           $this->tabla.="<td>".$tabla->cantidad_materia."</td>";
           $this->tabla.="<td>".$tabla->docente_cargo."</td>";
           $this->tabla.="<td>"."<a href='../index.php?c=Cursoc&a=get_crud&curso_id=$tabla->curso_id' onclick='borrar_ajax()'>&#128257;Actualizar</a>"."</td>";
           $this->tabla.="<td>"."<a href='../index.php?c=Cursoc&a=Eliminar&curso_id=$tabla->curso_id'>&#10062;Eliminar</a>"."</td>";
           $this->tabla.="</tr>";
           }
           $this->tabla.="</table>";
           echo $this->tabla;
      
   }
      

        public function get_crud(){
            
            if(isset($_REQUEST['curso_id'])){
                $resultado = $this->model->getting($_REQUEST['curso_id']);
            }
            require_once('Views/curso.php');
        }

        public function guardar(){
            $this->model->nombre_curso = $_REQUEST['nombre_curso'];
            $this->model->cantidad_estudiante = $_REQUEST['cantidad_estudiante'];
            $this->model->cantidad_materia=$_REQUEST['cantidad_materia'];
            $this->model->docente_cargo = $_REQUEST['docente_cargo'];
                $this->model->Registrar($this->model);
            
           
        }

        public function actualizar(){
            $this->model->curso_id = $_REQUEST['curso_id'];
            $this->model->nombre_curso = $_REQUEST['nombre_curso'];
            $this->model->cantidad_estudiante = $_REQUEST['cantidad_estudiante'];
            $this->model->cantidad_materia=$_REQUEST['cantidad_materia'];
            $this->model->docente_cargo = $_REQUEST['docente_cargo'];
                $this->model->Actualizar($this->model);
        }

        public function Eliminar(){
            $this->model->Eliminar($_REQUEST['curso_id']);
        }

    }
?>