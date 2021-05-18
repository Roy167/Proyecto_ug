<?php
    require_once ('Models/Profesorm.php');
    class Profesorc{
        private  $model;
        public $tabla;
        public function __construct(){
            $this->model = new Profesorm();
        }
        
        public function listar_ajax(){
                 $this->tabla.="<table>";
                 $this->tabla.="<tr>";
                 $this->tabla.="<th>ID</th>";
                 $this->tabla.="<th>Primer nombre </th>";
                 $this->tabla.="<th>Segundo nombre</th>";
                 $this->tabla.="<th>Primer apellido</th>";
                 $this->tabla.="<th>Segundo apellido</th>";
                 $this->tabla.="<th>Materia a dictar</th>";
                 $this->tabla.="<th>Correo</th>";
                 $this->tabla.="<th colspan='3' style='text-align:center;'>Opciones</th>";
                 $this->tabla.="</tr>";
                 foreach($this->model->Listar() as $tabla){
                $this->tabla.="<tr class='cuerpo'>";
                $this->tabla.="<td>".$tabla->idProfesor."</td>";
                $this->tabla.="<td>".$tabla->primerNombre."</td>";
                $this->tabla.="<td>".$tabla->segundoNombre."</td>";
                $this->tabla.="<td>".$tabla->primerApellido."</td>";
                $this->tabla.="<td>".$tabla->segundoApellido."</td>";
                $this->tabla.="<td>".$tabla->suMateria."</td>";
                $this->tabla.="<td>".$tabla->correo."</td>";
                $this->tabla.="<td>"."<a href='../index.php?c=Profesorc&a=get_crud&idProfesor=$tabla->idProfesor' onclick='borrar_ajax()'>&#128257;Actualizar</a>"."</td>";
                $this->tabla.="<td>"."<a href='../index.php?c=Profesorc&a=Eliminar&idProfesor=$tabla->idProfesor'>&#10062;Eliminar</a>"."</td>";
                $this->tabla.="</tr>";
                }
                $this->tabla.="</table>";
                echo $this->tabla;
           
        }

        public function get_crud(){
            
            if(isset($_REQUEST['idProfesor'])){
                $resultado = $this->model->getting($_REQUEST['idProfesor']);
            }
            require_once('Views/profesor.php');
        }

        public function guardar(){
            $this->model->primerNombre = $_REQUEST['primerNombre'];
            $this->model->segundoNombre = $_REQUEST['segundoNombre'];
            $this->model->primerApellido=$_REQUEST['primerApellido'];
            $this->model->segundoApellido = $_REQUEST['segundoApellido'];
            $this->model->correo = $_REQUEST['contacto'];
            $this->model->suMateria = $_REQUEST['materia'];
                $this->model->Registrar($this->model);
        }

        public function actualizar(){
            $this->model->idProfesor = $_REQUEST['idProfesor'];
            $this->model->primerNombre = $_REQUEST['primerNombre'];
            $this->model->segundoNombre = $_REQUEST['segundoNombre'];
            $this->model->primerApellido=$_REQUEST['primerApellido'];
            $this->model->segundoApellido = $_REQUEST['segundoApellido'];
            $this->model->correo = $_REQUEST['contacto'];
            $this->model->suMateria = $_REQUEST['materia'];
                $this->model->Actualizar($this->model);
        }

        public function Eliminar(){
            $this->model->Eliminar($_REQUEST['idProfesor']);
        }

    }
?>