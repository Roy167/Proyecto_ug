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
            margin-right:2em;
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
        <h1>Formulario de registro del nuevo docente</h1>
            <label for="primerNombre">Nombre del profesor:</label> <br>
            <input type="text" id="primerNombre" name="primerNombre" placeholder="Manuel"> <br>

            <label for="segundoNombre">Segundo nombre:</label> <br>
            <input type="text" id="segundoNombre" name="segundoNombre" placeholder="Elias"> <br>

            <label for="primerApellido">Apellido Paterno: </label> <br>
            <input type="text" id="primerApellido" name="primerApellido" placeholder="Campos"> <br>

            <label for="segundoApellido">Apellido Materno:</label> <br>
            <input type="text" name="segundoApellido" id="segundoApellido" placeholder="Almeida"><br>

            <label for="materia">Materia a dictar:</label> <br>
            <input type="text" id="materia" name="materia" placeholder="Programación orientada a objetos"> <br>

            <label for="contacto"> Correo: </label> <br>
            <input type="email" name="contacto" id="contacto" placeholder="example@gmail.com"> <br>
            <input type="button" value="Registrar docente" class="btn-ingresar" onclick="ajax_post()">
        </form>
        </div>
        <div id="info" class="mostrar">
            <!--Aquí es para mostrar los datos que se van a obtener de la BDD-->
            <script type="text/javascript">
                        function ajax_post(){
                            let nombre1 = document.getElementById('primerNombre').value;
                            let nombre2 = document.getElementById('segundoNombre').value;
                            let apellido1 = document.getElementById('primerApellido').value;
                            let apellido2 = document.getElementById('segundoApellido').value;
                            let materia = document.getElementById('materia').value;
                            let correo = document.getElementById('contacto').value;
                            let info = "primerNombre="+nombre1+"&segundoNombre="+nombre2 +"&primerApellido="+ apellido1 +"&segundoApellido="+
                            apellido2+"&materia="+materia+"&contacto="+correo;
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                //document.getElementById('res').innerHTML = "Datos agregados con exito";
                                
                                }
                            }
                            ajax_request.open("POST","../index.php?c=Profesorc&a=Guardar",true);
                            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded ");
                            ajax_request.send(info);
    
                        }
         </script>
            
        </div>
      
        <script type="text/javascript">
                        function mostrar_profesores(){
                            let set_info = document.getElementById('info');
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                set_info.innerHTML=ajax_request.responseText;
                                }
                            }
                            ajax_request.open("GET","../index.php?c=Profesorc&a=listar_ajax",true);
                            ajax_request.send();
                        }
                        mostrar_profesores();

                        function borrar_ajax(){
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                //document.getElementById('res').innerHTML = "Datos agregados con exito";
                                //mostrar_profesores();
                                }
                            }
                            ajax_request.open("GET","../index.php?c=Profesorc&a=Eliminar",true);
                            ajax_request.send();
    
                        }
         </script>
           <div class ="back">
                <a href="homeadministrador.php">Regresar al home</a>
            </div>
    </div>
</body>
<?php
    require_once('resources/footer.html');
?>
</html>