<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nombre = $_POST['nombre'] ?? null;
    $dni = $_POST['dni'] ?? null;
    $fecha_nacimiento = $_POST['fecha_nacimiento'] ?? null;
    $grado = $_POST['grado'] ?? null;
    $apoderado = $_POST['apoderado'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefono = $_POST['telefono'] ?? null;

    
    echo "<p>Formulario enviado con éxito</p>";
    echo "<p>Nombre del Estudiante: $nombre</p>";
    echo "<p>DNI: $dni</p>";
    echo "<p>Fecha de Nacimiento: $fecha_nacimiento</p>";
    echo "<p>Grado: $grado</p>";
    echo "<p>Apoderado: $apoderado</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Teléfono: $telefono</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrículas 2025 - Colegio Particular</title>
    <link rel="stylesheet" href="../Vista/css/disenio.css">
    <style>
       
        .seccion {
            display: none;
        }
    </style>
</head>
<body>

<header>
    <h1>Colegio Particular</h1>
    <p>Plataforma de Matrículas 2025</p>
</header>

<nav>
    <button onclick="mostrarSeccion('nuevo')">Estudiante Nuevo</button>
    <button onclick="mostrarSeccion('antiguo')">Estudiante Antiguo</button>
    <button onclick="mostrarSeccion('requisitos')">Requisitos</button>
    <button onclick="mostrarSeccion('reporte')">Reporte</button>
    <button onclick="mostrarSeccion('vacantes')">Vacantes</button>
</nav>

<div class="container">

    
    <section id="nuevo" class="seccion">
        <h2>Formulario para Estudiantes Nuevos</h2>
        <form action="index.php" method="POST">
            <label>Nombre completo del estudiante</label>
            <input type="text" name="nombre" required>

            <label>DNI del estudiante</label>
            <input type="text" name="dni" required>

            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" required>

            <label>Grado al que postula</label>
            <select name="grado" required>
                <option value="">-- Seleccione --</option>
                <option>Inicial 3 años</option>
                <option>Primaria 1°</option>
                <option>Secundaria 1°</option>
            </select>

            <label>Nombre del apoderado</label>
            <input type="text" name="apoderado" required>

            <label>Email de contacto</label>
            <input type="email" name="email" required>

            <label>Teléfono</label>
            <input type="text" name="telefono" required>

            <button type="submit">Enviar matrícula</button>
            <button type="button" onclick="mostrarSeccion('home')">Regresar</button>
        </form>
    </section>


    <section id="antiguo" class="seccion">
        <h2>Formulario para Estudiantes Antiguos</h2>
        <form action="index.php" method="POST">
            <label>DNI del estudiante</label>
            <input type="text" name="dni" required>

            <label>Nombre completo</label>
            <input type="text" name="nombre_completo" required>

            <label>Grado actual</label>
            <input type="text" name="grado_actual" required>

            <label>Grado al que desea pasar</label>
            <input type="text" name="grado_nuevo" required>

            <label>Teléfono de contacto</label>
            <input type="text" name="telefono" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <button type="submit">Actualizar matrícula</button>
            <button type="button" onclick="mostrarSeccion('home')">Regresar</button>
        </form>
    </section>


    <section id="requisitos" class="seccion">
        <h2>Requisitos de Matrícula</h2>
        <h3>Para Nuevos</h3>
        <ul>
            <li>Partida de nacimiento</li>
            <li>Copia del DNI del alumno y apoderado</li>
            <li>Certificado de estudios</li>
        </ul>

        <h3>Para Antiguos</h3>
        <ul>
            <li>Constancia de no deuda</li>
            <li>Actualización de datos</li>
            <li>Compromiso firmado</li>
        </ul>
        <button type="button" onclick="mostrarSeccion('home')">Regresar</button>
    </section>
e
    
    <section id="reporte" class="seccion">
        <h2>Reporte</h2>
        <p>Aquí va el reporte...</p>
    </section>

   
    <section id="vacantes" class="seccion">
        <h2>Vacantes</h2>
        <p>Aquí va la información sobre vacantes...</p>
    </section>

</div>

<footer>
    <p>&copy; 2025 Colegio Privado Santa Clara</p>
</footer>

<script>
   
    function mostrarSeccion(seccion) {
       
        let secciones = document.querySelectorAll('.seccion');
        secciones.forEach(function(section) {
            section.style.display = 'none';
        });

        
        document.querySelector('#' + seccion).style.display = 'block';
    }

    
    mostrarSeccion('nuevo');
</script>

</body>
</html>
