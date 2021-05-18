<?php
    session_start();
    if(!isset($_SESSION['Usuario']) || $_SESSION['Usuario']!='administrador'){
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/styles/footer.css">
    <link rel="stylesheet" href="../Views/styles/header.css">
    <link rel="stylesheet" href="../Views/styles/homeadministrador.css">
    <title>Welcome to; N + 1 Virtual Academy</title>
</head>
<body>
    <?php
        require_once('resources/header.php');
    ?>  
    <div class="contenedor-principal">
    <div class="contenedor-izquierdo">
        <div class="crud-profesores">
            <h3>Navegación crud profesores</h3>
            <nav class="nav-profesores">
                <ul>
                    <li><a href="ProfesoresView.php">&#128221; Ingreso al CRUD</a></li>
                </ul>
            </nav>
        </div>
        <div class="crud-cursos">
            <h3>Navegación crud cursos</h3>
            <nav class="nav-cursos">
                <ul>
                    <li><a href="cursosview.php"> &#128221; Resgistrar curso</a></li>
                </ul>
            </nav>
        </div>
        <div class="crud-matriculacion">
            <h3>Navegación crud matriculación</h3>
            <nav class="nav-matriculacion">
                <ul>
                    <li><a href="matriculaview.php"> &#128221; Registrar matricula en curso</a></li>
                </ul>
            </nav>
        </div>
        <div class="crud-tareas">
            <h3>Navegación crud tareas</h3>
            <nav class="nav-tareas">
                <ul>
                    <li><a href="tareaview.php"> &#128221; Crear tarea</a></li>
                    <li style="margin-left:6em;"><a href="../index.php"> SALIR DEL SISTEMA</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="contenedor-central">
        <h1 style="text-align:center; padding-top: .5em;">Reporte de cursos</h1>
        <div class="reporte-xcurso">
           
            <div class="curso">
                <a href="#">
                    <samp>Curso 1</samp>
                    <img src="../Views/images/reportes.png" alt="Reporte">
                </a>
            </div>
            <div class="curso">
                <a href="#">
                    <samp>Curso 2</samp>
                    <img src="../Views/images/reportes.png" alt="Reporte">
                </a>
            </div>
            <div class="curso">
                <a href="#">
                    <samp>Curso 3</samp>
                    <img src="../Views/images/reportes.png" alt="Reporte">
                </a>
            </div>

        </div>
        <hr>
        <h1 style="text-align:center; padding-top: .5em;">Utilidades</h1>
        <div class="utilidades">
            
            <div class="grupo">
                <a href="#">
                    <samp>Grupo</samp>
                    <img src="../Views/images/grupo.jpg" alt="Grupo">
                </a>
            </div>
            <div class="grupo">
                <a href="#">
                    <samp>Contactos</samp>
                    <img src="../Views/images/contactos.jpg" alt="Grupo">
                </a>
            </div>  
        </div>
    </div>
</div>
<?php
    require_once('resources/footer.html');
?>   

    
</body>
</html>