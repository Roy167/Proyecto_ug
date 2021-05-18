<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/styles/footer.css">
    <link rel="stylesheet" href="Views/styles/header.css">
    <link rel="stylesheet" href="Views/styles/profesorupdate.css">
    <title>actualización de los docentes</title>
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
        <form id="registroDocente" action="index.php?c=Profesorc&a=actualizar&idProfesor=<?php $resultado->idProfesor ?>" method="POST">
        <?php if (isset($_SESSION['mensaje'])){ ?>
        <h4 style="text-align:center;"><?php echo $_SESSION['mensaje'];?></h4> <br>
        <?php } session_unset(); ?>
        <h1>Formulario para la actualización<br> de los datos del docente</h1>
            <label for="primerNombre">Nombre del profesor:</label> <br>
            <input type="text" id="primerNombre" name="primerNombre" value ="<?php echo $resultado->primerNombre ?>"placeholder="Manuel"> <br>

            <label for="segundoNombre">Segundo nombre:</label> <br>
            <input type="text" id="segundoNombre" name="segundoNombre" value ="<?php echo $resultado->segundoNombre ?>" placeholder="Elias"> <br>

            <label for="primerApellido">Apellido Paterno: </label> <br>
            <input type="text" id="primerApellido" name="primerApellido" value ="<?php echo $resultado->primerApellido ?>" placeholder="Campos"> <br>

            <label for="segundoApellido">Apellido Materno:</label> <br>
            <input type="text" name="segundoApellido" id="segundoApellido" value ="<?php echo $resultado->segundoApellido ?>" placeholder="Almeida"><br>

            <label for="materia">Materia a dictar:</label> <br>
            <input type="text" id="materia" name="materia" value ="<?php echo $resultado->suMateria ?>" placeholder="Programación orientada a objetos"> <br>
            <label for="contacto"> Correo: </label> <br>
            <input type="email" name="contacto" id="contacto" value ="<?php echo $resultado->correo?>" placeholder="example@gmail.com"> <br>
            <input type="submit" value="Actualizar docente" class="btn-ingresar" name="do_update">
        </form>
        </div>
</body>
<footer>
    <div class="autores">
        <p>
            Desarrollado por; Bryan Altamirano, Bryan Fajardo, Roy Moreira, Santiago Jama, <br>
            Todos los derechos reservados N + 1 Virtual Academy &copy;
        </p>
    </div>  
</footer>
</html>