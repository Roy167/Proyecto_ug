<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/styles/footer.css">
    <link rel="stylesheet" href="Views/styles/header.css">
    <link rel="stylesheet" href="Views/styles/cursoupdate.css">
    <title>Actualización de los cursos</title>
</head>
<body>
<div class="header-container">
        <header class="main-header">
            <div class="logo-inicial">
                <img src="Views/images/logo.jpg" alt="Logo">
            </div>
            <div class="nombre-academia">
                <h1>N + 1 Virtual Academy</h1>
            </div>
            <div class="social">
                <div class="enlaces">
                    <a href="#">&#128198;</a>
                    <a href="#">&#128226;</a>
                    <a href="#">&#128233;</a>
                    <a href="#">
                      listo
                    </a>
                </div>
                <div class="perfil">
                    <a href="#">
                        <div class="foto-perfil">
                            <img src="Views/images/userProfile.png" alt="Perfil">
                        </div>
                    </a>
                </div> 
            </div>
        </header>
    </div>
<div class="main-container">
        <div class="ingresar">
        <form id="registroDocente" action="index.php?c=Cursoc&a=actualizar&curso_id=<?php $resultado->curso_id ?>" method="POST">
        <?php if (isset($_SESSION['mensaje'])){ ?>
        <h4 style="text-align:center;"><?php echo $_SESSION['mensaje'];?></h4> <br>
        <?php } session_unset(); ?>
        <h1>Formulario para la actualización de los cursos</h1>
            <label for="nombre_curso">Nombre del curso:</label> <br>
            <input type="text" id="nombre_curso" name="nombre_curso" value="<?php echo $resultado->nombre_curso ?>" placeholder="Desarrollo web" > <br>

            <label for="cantidad_estudiante">Cantidad de estudiantes:</label> <br>
            <input type="text" id="cantidad_estudiante" name="cantidad_estudiante" value="<?php echo $resultado->cantidad_estudiante ?>" placeholder="40"> <br>

            <label for="cantidad_materia">Cantidad de materias: </label> <br>
            <input type="text" id="cantidad_materia" name="cantidad_materia" value="<?php echo $resultado->cantidad_materia ?>" placeholder="6"> <br>

            <label for="docente_cargo">Docente a cargo:</label> <br>
            <input type="text" id="docente_cargo" name="docente_cargo" value="<?php echo $resultado->docente_cargo ?>"  placeholder="Elias Campos"><br>

            <input type="submit" value="Actualizar curso" class="btn-ingresar">
        </form>
        </div>
</body>
<?php
require_once('Views/resources/footer.html');
?>
</html>