<?php
    require('Models/Loginm.php');
    class Loginc{
        private $model;

        public function __construct(){
            $this->model = new Loginm();
        }
        public function get_home(){
            require('Views/home.php');
        }

        public function validate_user(){
            $usuario = $_REQUEST['usuario'];
            $password = $_REQUEST['psswd'];
            $this->model->validate_user($usuario,$password);
        }

        public function get_username(){
            $this->model->get_user();
        }

    }
?>