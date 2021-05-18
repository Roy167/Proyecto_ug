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
        <form id="registroDocente" action="../index.php?c=Matriculac&a=Guardar" method="POST">
        <?php if (isset($_SESSION['mensaje'])){ ?>
        <h4 style="text-align:center;"><?php echo $_SESSION['mensaje'];?></h4> <br>
        <?php } session_unset(); ?>
        <h1>Formulario de registro de nueva matricula</h1>
            <label for="matricula_iden">Identifiador de matricula:</label> <br>
            <input type="text" id="matricula_iden" name="matricula_iden" placeholder="ma-01"> <br>

            <label for="pertenece">Estudiante al que pertenece:</label> <br>
            <input type="text" id="pertenece" name="pertenece" placeholder="Elias"> <br>

            <label for="numero_materia">Cantidad de materias: </label> <br>
            <input type="text" id="numero_materia" name="numero_materia" placeholder="6"> <br>

            <label for="curso_pernece">Curso al que pertenece: </label> <br>
            <input type="text" id="curso_pernece" name="curso_pernece" placeholder="Curso-30"> <br>
            <input type="button" value="Registrar matricula" onclick="ajax_post()" class="btn-ingresar">
        </form>
        <script type="text/javascript">
                        function ajax_post(){
                            let matricula_iden = document.getElementById('matricula_iden').value;
                            let pertenece = document.getElementById('pertenece').value;
                            let numero_materia = document.getElementById('numero_materia').value;
                            let curso_pernece = document.getElementById('curso_pernece').value;
                            let info = "matricula_iden="+matricula_iden+"&pertenece="+pertenece +"&numero_materia="+numero_materia+"&curso_pernece="+curso_pernece;
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                //document.getElementById('res').innerHTML = "Datos agregados con exito";
                                
                                }
                            }
                            ajax_request.open("POST","../index.php?c=Matriculac&a=Guardar",true);
                            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded ");
                            ajax_request.send(info);
    
                        }
         </script>
        </div>
        <div id="info" class="mostrar">
            <!--Aquí es para mostrar los datos que se van a obtener de la BDD-->
            <script type="text/javascript">
                        function mostrar_matricula(){
                            let set_info = document.getElementById('info');
                            let ajax_request = new XMLHttpRequest();
                            ajax_request.onreadystatechange = function(){
                                if (ajax_request.readyState === 4 && ajax_request.status === 200){
                                set_info.innerHTML=ajax_request.responseText;
                                }
                            }
                            ajax_request.open("GET","../index.php?c=Matriculac&a=listar_ajax",true);
                            ajax_request.send();
                        }
                        mostrar_matricula();
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