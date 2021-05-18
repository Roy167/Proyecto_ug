<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/styles/footer.css">
    <link rel="stylesheet" href="Views/styles/header.css">
    <link rel="stylesheet" href="Views/styles/cursoupdate.css">
    <title>Actualización de matricula</title>
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
        <form id="registroDocente" action="index.php?c=Matriculac&a=actualizar&matricula_id=<?php $resultado->matricula_id ?>" method="POST">
        <?php if (isset($_SESSION['mensaje'])){ ?>
        <h4 style="text-align:center;"><?php echo $_SESSION['mensaje'];?></h4> <br>
        <?php } session_unset(); ?>
        <h1>Formulario para la actualización de la matricula</h1>
            <label for="matricula_iden">Identifiador de matricula:</label> <br>
            <input type="text" id="matricula_iden" name="matricula_iden"  value="<?php echo $resultado->matricula_iden ?>" placeholder="ma-01"> <br>

            <label for="pertenece">Estudiante al que pertenece:</label> <br>
            <input type="text" id="pertenece" name="pertenece" value="<?php echo $resultado->pertenece ?>" placeholder="Elias"> <br>

            <label for="numero_materia">Cantidad de materias: </label> <br>
            <input type="text" id="numero_materia" name="numero_materia"  value="<?php echo $resultado->numero_materia?>"placeholder="6"> <br>

            <label for="curso_pernece">Curso al que pertenece: </label> <br>
            <input type="text" id="curso_pernece" name="curso_pernece"  value="<?php echo $resultado->curso_pernece ?>"placeholder="Curso-30"> <br>
            <input type="submit" value="Registrar matricula" class="btn-ingresar">
        </form>
        </div>
</body>
<?php
require_once('Views/resources/footer.html');
?>
</html>