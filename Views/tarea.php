<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/styles/footer.css">
    <link rel="stylesheet" href="Views/styles/header.css">
    <link rel="stylesheet" href="Views/styles/profesorupdate.css">
    <title>Actualización de la tarea</title>
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
        <form id="registroDocente"action="index.php?c=Tareac&a=actualizar&tarea_id=<?php $resultado->tarea_id ?>" method="POST">
        <?php if (isset($_SESSION['mensaje'])){ ?>
        <h4 style="text-align:center;"><?php echo $_SESSION['mensaje'];?></h4> <br>
        <?php } session_unset(); ?>
        <h1>Formulario para la actualización de una tarea</h1>
            <label for="nombre_tarea">Nombre Tarea:</label> <br>
            <input type="text" id="nombre_tarea" name="nombre_tarea" value="<?php echo $resultado->nombre_tarea ?>"placeholder="Taller"> <br>

            <label for="tiempo">tiempo disponible:</label> <br>
            <input type="text" id="tiempo" name="tiempo" value="<?php echo $resultado->tiempo ?>" placeholder="1 hora"> <br>

            <label for="intentos">numero de intentos: </label> <br>
            <input type="text" id="intentos" name="intentos" value="<?php echo $resultado->intentos ?>" placeholder="3"> <br>

            <input type="submit" value="Crear tarea" class="btn-ingresar">
        </form>
        </div>
</body>
<?php
require_once('Views/resources/footer.html');
?>
</html>