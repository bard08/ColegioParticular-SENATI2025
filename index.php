<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SistColPar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor-principal">

<header class="encabezado">
    <div class="contenedor-nav">
        <div class="logo-area">
            <img src="img/logo.png" alt="Logo del Colegio">
            <span class="titulo-logo">Sistema Colegio Particular</span>
        </div>
        <nav class="menu-nav" id="menu">
            <ul>
                <li><a href="index.php" class="activo">Inicio</a></li>
                <li><a href="matricula.php">Matrícula</a></li>
                <li><a href="notas.php">Notas</a></li>
                <li><a href="pension.php">Pensión</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" onclick="document.getElementById('menu').classList.toggle('activo')">
        </div>
    </div>
</header>


</body>
</html>
