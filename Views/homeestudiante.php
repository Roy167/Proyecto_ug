<?php
    session_start();
    if(!isset($_SESSION['Usuario']) || $_SESSION['Usuario']!='estudiante'){
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
    <link rel="stylesheet" href="../Views/styles/homeestudiante.css">
    <title>Bienvenido a  N + 1 Virtual Academy </title>
</head>
<body>


    <?php
    include('resources/header.php');
    ?>   
        <div class="super-contenedor">
    <div class="barra-izquierda">
        <div class="flex-iquierdo">
            <aside class="materias">
                <h3>Navegación Materias</h3>
                    <ul class="lista-materias">
                        <li><a href="">&#128214;  Materia 1</a></li>
                        <li><a href="#">&#128214;  Materia 2</a></li>
                        <li><a href="#">&#128214;  Materia 3</a></li>
                    </ul>
            </aside>
            <hr style="border:6px solid whiteSmoke;">
            <aside class="materias-grupos">
                <h3>Mis grupos</h3>
                <ul class="lista-grupos">
                    <li><a href="#">&#128483;  Grupo 1</a></li>
                    <li><a href="#">&#128483;  Grupo 2</a></li>
                    <li><a href="#">&#128483;  Grupo 3</a></li>  
                    <li style="margin-left:6em;"><a href="../index.php">SALIR DEL SISTEMA</a></li>  
                </ul>
            </aside>
        </div>
    </div>


        <div class="contenido-central">
            <main class="flex-central">
                <div class="tareas">

                    <div class="tarea">
                        <samp>Tarea 1</samp>
                        <a href="#">
                            <img src="../Views/images/tarea.jpg" alt="TAREA">
                        </a>
                    </div>
                    
                        <div class="tarea">
                            <samp>Tarea 2</samp>
                            <a href="#">
                                <img src="../Views/images/tarea.jpg" alt="TAREA">
                            </a>
                        </div>
                    

                    
                        <div class="tarea">
                            <samp>Tarea 3</samp>
                            <a href="#">
                                <img src="../Views/images/tarea.jpg" alt="TAREA">
                            </a>
                        </div>
                    
                </div>
                <div class="materias-central">
                     <a href="#">
                        <div class="materia">
                            <samp>Materia 1 en %</samp>
                        </div>
                     </a>
                        
                     <a href="#">
                        <div class="materia">
                            <samp>Materia 2 en %</samp>
                        </div>
                     </a>
                    <a href="#">
                        <div class="materia">
                            <samp>Materia 3 en %</samp>
                        </div>
                    </a>
                    
                    <a href="#">
                        <div class="materia">
                            <samp>Materia 4 en %</samp>
                        </div>
                    </a>
                        
                        <a href="#">
                            <div class="materia">
                                <samp>Materia 5 en %</samp>
                            </div>
                        </a>

                        <a href="#">
                            <div class="materia">
                                <samp>Materia 6 en %</samp>
                            </div>
                        </a>

                        <a href="#">
                            <div class="materia">
                                <samp>N Materia en %</samp>
                            </div>
                        </a>
                        <a href="#">
                            <div class="materia">
                                <samp>N Materia en %</samp>
                            </div>
                        </a>
                        <a href="#">
                            <div class="materia">
                                <samp>N Materia en %</samp>
                            </div>
                        </a>
                        <a href="#">
                            <div class="materia">
                                <samp>N Materia en %</samp>
                            </div>
                        </a>
                        
                    
                </div>
            </main>
        </div>

    <div class="barra-derecha">
        <aside class="flex-derecho">
            <h1>Novedades</h1>
                    <div class="noticia">
                        <samp>Tareas atrasadas</samp>
                        <a href="#">
                            <img src="../Views/images/tareaAtrasada.jpg" alt="Tarea Atradada">
                        </a>
                    </div>
               
                    <div class="noticia">
                        <samp>Mis asistencias</samp>
                        <a href="#">
                            <img src="../Views/images/asistencias.jpg" alt="Asistencias">
                        </a>
                    </div>
                    <div class="noticia">
                        <samp>Noticias</samp>
                        <a href="#">
                            <img src="../Views/images/noticias.png" alt="Noticias">
                        </a>
                    </div>
        </aside>
    </div>
</div>


    <?php
        include('resources/footer.html');
    ?>  

</body>
</html>