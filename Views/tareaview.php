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
            margin-right:6.1em;
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
        <form id="registroDocente" action="../index.php?c=Tareac&a=Guardar" method="POST">
        <?php if (isset($_SESSION['mensaje'])){ ?>
        <h4 style="text-align:center;"><?php echo $_SESSION['mensaje'];?></h4> <br>
        <?php } session_unset(); ?>
        <h1>Formulario para la creación de una nueva tarea</h1>
            <label for="nombre_tarea">Nombre Tarea:</label> <br>
            <input type="text" id="nombre_tarea" name="nombre_tarea" placeholder="Taller"> <br>

            <label for="tiempo">tiempo disponible:</label> <br>
            <input type="text" id="tiempo" name="tiempo" placeholder="1 hora"> <br>

            <label for="intentos">numero de intentos: </label> <br>
            <input type="text" id="intentos" name="intentos" placeholder="3"> <br>

            <input type="button" value="Crear tarea" onclick="ajax_post()" class="btn-ingresar">
        </form>
        <script type="text/javascript">
                        function ajax_post(){
                            let nombre_tarea = document.getElementById('nombre_tarea').value;
                            let tiempo= document.getElementById('tiempo').value;
                            let intentos = document.getElementById('intentos').value;
                            let info = "nombre_tarea="+nombre_tarea+"&tiempo="+tiempo +"&intentos="+intentos;
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                //document.getElementById('res').innerHTML = "Datos agregados con exito";
                                }
                            }
                            ajax_request.open("POST","../index.php?c=Tareac&a=Guardar",true);
                            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded ");
                            ajax_request.send(info);
    
                        }
         </script>
        </div>
        <div id="info" class="mostrar">
            <!--Aquí es para mostrar los datos que se van a obtener de la BDD-->
            <script type="text/javascript">
                        function mostrar_tarea(){
                            let set_info = document.getElementById('info');
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                set_info.innerHTML=ajax_request.responseText;
                                }
                            }
                            ajax_request.open("GET","../index.php?c=Tareac&a=listar_ajax",true);
                            ajax_request.send();
                        }
                        mostrar_tarea();

                        function borrar_ajax(){
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                //document.getElementById('res').innerHTML = "Datos agregados con exito";
                                //mostrar_profesores();
                                }
                            }
                            ajax_request.open("GET","../index.php?c=Tareac&a=Eliminar",true);
                            ajax_request.send();
    
                        }
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