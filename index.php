<?php 
   require_once('Models/Conexion.php');
   

   if(!isset($_REQUEST['c'])){
    require_once('Controllers/Loginc.php');
    $controller = new Loginc();
    $controller->get_home();
   }

   else{
   require_once('Controllers/Loginc.php');
   require_once('Controllers/Profesorc.php');
   require_once('Controllers/Cursoc.php');
   require_once('Controllers/Matriculac.php');
   require_once('Controllers/Tareac.php');
    $controlador = $_REQUEST['c'];
    $accion = $_REQUEST['a'];

    switch($controlador){
      case "Loginc":
        $controller = new $controlador();
        $controller->validate_user();
      break;

      case "Profesorc":
        $controller = new $controlador();
            switch($accion){
              case "Guardar":
                $controller->guardar();
                header("Location: Views/ProfesoresView.php");
              break;

              case "Eliminar":
                $controller->Eliminar();
                header("Location: Views/ProfesoresView.php");
              break;

              case "get_crud":
                $controller->get_crud(); 
              break;

              case "actualizar":
                $controller->actualizar();
                header("Location: Views/ProfesoresView.php");
              break;

              case "listar_ajax":
                $controller->listar_ajax();
              break;
            }
      break; 

      case "Cursoc":
        $controller = new $controlador();
            switch($accion){
              case "Guardar":
                $controller->guardar();
                header("Location: Views/cursosview.php");
              break;

              case "Eliminar":
                $controller->Eliminar();
                header("Location: Views/cursosview.php");
              break;

              case "get_crud":
                $controller->get_crud(); 
              break;

              case "actualizar":
                $controller->actualizar();
                header("Location: Views/cursosview.php");
              break;
              case "listar_ajax":
                $controller->listar_ajax();
              break;
            }
      break;

      case "Matriculac":
        $controller = new $controlador();
            switch($accion){
              case "Guardar":
                $controller->guardar();
                header("Location: Views/matriculaview.php");
              break;

              case "Eliminar":
                $controller->Eliminar();
                header("Location: Views/matriculaview.php");
              break;

              case "get_crud":
                $controller->get_crud(); 
              break;

              case "actualizar":
                $controller->actualizar();
                header("Location: Views/matriculaview.php");
              break;

              case "listar_ajax":
                $controller->listar_ajax();
              break;
            }
      break;


      case "Tareac":
        $controller = new $controlador();
            switch($accion){
              case "Guardar":
                $controller->guardar();
                header("Location: Views/tareaview.php");
              break;

              case "Eliminar":
                $controller->Eliminar();
                header("Location: Views/tareaview.php");
              break;

              case "actualizar":
                $controller->actualizar();
                header("Location: Views/tareaview.php");
              break;

              case "get_crud":
                $controller->get_crud(); 
              break;

              case "actualizar":
                $controller->actualizar();
                header("Location: Views/tareaview.php");
              break;

              case "listar_ajax":
                $controller->listar_ajax();
              break;

            }
      break;


    }
    
   
    }


    
   
    



?>