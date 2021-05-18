<?php
    require_once ('Models/Taream.php');
    class Tareac{
        private  $model;
        private $tabla;
        public function __construct(){
            $this->model = new Taream();
        }

        public function listar_ajax(){
            $this->tabla.="<table>";
            $this->tabla.="<tr>";
            $this->tabla.="<th>Tarea ID</th>";
            $this->tabla.="<th>Nombre de la tarea</th>";
            $this->tabla.="<th>Tiempo disponible</th>";
            $this->tabla.="<th>Número de intentos</th>";
            $this->tabla.="<th colspan='3' style='text-align:center;'>Opciones</th>";
            $this->tabla.="</tr>";
            foreach($this->model->Listar() as $tabla){
           $this->tabla.="<tr class='cuerpo'>";
           $this->tabla.="<td>".$tabla->tarea_id."</td>";
           $this->tabla.="<td>".$tabla->nombre_tarea."</td>";
           $this->tabla.="<td>".$tabla->tiempo."</td>";
           $this->tabla.="<td>".$tabla->intentos."</td>";
           $this->tabla.="<td>"."<a href='../index.php?c=Tareac&a=get_crud&tarea_id=$tabla->tarea_id' onclick='borrar_ajax()'>&#128257;Actualizar</a>"."</td>";
           $this->tabla.="<td>"."<a href='../index.php?c=Tareac&a=Eliminar&tarea_id=$tabla->tarea_id'>&#10062;Eliminar</a>"."</td>";
           $this->tabla.="</tr>";
           }
           $this->tabla.="</table>";
           echo $this->tabla;
      
   }

        public function get_crud(){
            
            if(isset($_REQUEST['tarea_id'])){
                $resultado = $this->model->getting($_REQUEST['tarea_id']);
            }
            
            require_once('Views/tarea.php');
            
            
        }

        public function guardar(){
            $this->model->nombre_tarea = $_REQUEST['nombre_tarea'];
            $this->model->tiempo = $_REQUEST['tiempo'];
            $this->model->intentos=$_REQUEST['intentos'];
                $this->model->Registrar($this->model);
        }

        public function actualizar(){
            $this->model->tarea_id = $_REQUEST['tarea_id'];
            $this->model->nombre_tarea = $_REQUEST['nombre_tarea'];
            $this->model->tiempo = $_REQUEST['tiempo'];
            $this->model->intentos=$_REQUEST['intentos'];
                $this->model->Actualizar($this->model);
        }

        public function Eliminar(){
            $this->model->Eliminar($_REQUEST['tarea_id']);
        }

    }
?>