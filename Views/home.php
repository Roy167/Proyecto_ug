<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&family=Lora:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Views/styles/home.css">
    <title>Welcome to; N + 1 Virtual Academy</title>
</head>
<body>
<div class="main-container">
    <header>
        <div class="logo">
            <img src="Views/images/logo.jpg" alt="Logo">
        </div>
        <div class="nombre">
            <h1>N + 1 Virtual Academy</h1>
        </div>
    </header>
    <main>
            <form id="formulario" action="?c=Loginc&a=validate_user"  method="POST">
                <h3>Bienvenido</h3>
                    <label for="usuario">Usuario: <br>
                        <input type="text" id="usuario" name="usuario" placeholder="Ingrese su correo">
                        </label> <br>
                    <label for="psswd">Contraseña: <br>
                        <input type="password" id="psswd" name="psswd" placeholder="********">
                    </label><br>
                    <button type="submit" class="btn-ingresar">Ingresar</button>
                    <a href="#">¿Olvidó su contraseña?</a>
                    <div id="warnings" style="margin-left: 3em;">
                    </div>
            </form>
    </main>
    <footer>
        <div class="autores">
            <p>
                Desarrollado por; Bryan Altamirano, Bryan Fajardo, Roy Moreira, Santiago Jama, <br>
                Todos los derechos reservados N + 1 Virtual Academy &copy;
            </p>
        </div>  
    </footer>
</div>
<script src="app/validacionFomulario.js"></script>
</body>
</html>