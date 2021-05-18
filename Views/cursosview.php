<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/profesores.css">
    <title>CRUD DOCENTES</title>
    <style>
    
        .back{
            background-color: black;
            margin-right:6em;
            margin-top: 3em;
            display:inline-block;
            padding:.5em;
            border-radius: .5em;
           
        }
        .back a{
            text-decoration:none;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        require_once('resources/header.php');
    ?>
    <div class="main-container">
        <div class="ingresar">
        <form id="registroDocente" action="" method="POST">
        <?php if (isset($_SESSION['mensaje'])){ ?>
        <h4 style="text-align:center;"><?php echo $_SESSION['mensaje'];?></h4> <br>
        <?php } session_unset(); ?>
        <h1>Formulario de registro del nuevo curso</h1>
            <label for="nombre_curso">Nombre del curso:</label> <br>
            <input type="text" id="nombre_curso" name="nombre_curso" placeholder="Desarrollo web"> <br>

            <label for="cantidad_estudiante">Cantidad de estudiantes:</label> <br>
            <input type="text" id="cantidad_estudiante" name="cantidad_estudiante" placeholder="40"> <br>

            <label for="cantidad_materia">Cantidad de materias: </label> <br>
            <input type="text" id="cantidad_materia" name="cantidad_materia" placeholder="6"> <br>

            <label for="docente_cargo">Docente a cargo:</label> <br>
            <input type="text" id="docente_cargo" name="docente_cargo"  placeholder="Elias Campos"><br>

            <input type="button" value="Registrar curso" onclick ="ajax_post()" class="btn-ingresar">
        </form>
        <script type="text/javascript">
                        function ajax_post(){
                            let nombre_curso = document.getElementById('nombre_curso').value;
                            let cantidad_estudiante= document.getElementById('cantidad_estudiante').value;
                            let cantidad_materia = document.getElementById('cantidad_materia').value;
                            let docente_cargo = document.getElementById('docente_cargo').value;
                            let info = "nombre_curso="+nombre_curso+"&cantidad_estudiante="+cantidad_estudiante +"&cantidad_materia="+cantidad_materia+ "&docente_cargo="+docente_cargo;
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                //document.getElementById('res').innerHTML = "Datos agregados con exito";
                                
                                }
                            }
                            ajax_request.open("POST","../index.php?c=Cursoc&a=Guardar",true);
                            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded ");
                            ajax_request.send(info);
    
                        }
         </script>
        </div>
        <div id="info" class="mostrar">
            <!--Aquí es para mostrar los datos que se van a obtener de la BDD-->
          <script type="text/javascript">
                        function mostrar_cursos(){
                            let set_info = document.getElementById('info');
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                set_info.innerHTML=ajax_request.responseText;
                                }
                            }
                            ajax_request.open("GET","../index.php?c=Cursoc&a=listar_ajax",true);
                            ajax_request.send();
                        }
                        mostrar_cursos();
                        </script>

        </div>
        <div class ="back">
                <a href="homeadministrador.php">Regresar al home</a>
            </div>
    </div>
</body>
<?php
    require_once('resources/footer.html');
?>
</html>