<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montos</title>
    <link rel="stylesheet" href="../Vista/css/Dis.css">
</head>
<body>
    


<div class="container">

    <h1>Montos</h1>
    <div class="formulario">
        <label for="id">ID:</label>
        <input type="number" id="id" placeholder="Ingrese el ID" required>
        <label for="monto">Monto:</label>
        <input type="number" id="monto" placeholder="Ingrese el monto" required>
        <label for="estado">Estado:</label>
        <select id="estado" required>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
        <button onclick="agregarFila()">Agregar</button>
            <a href="VistaPrincipal.php">
        <button class="volver-btn">Volver al Menú Principal</button>
</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Monto</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody id="tabla-cuerpo">
        </tbody>
    </table>
    
    
</div>

<script>
    function agregarFila() {
        var id = document.getElementById("id").value;
        var monto = document.getElementById("monto").value;
        var estado = document.getElementById("estado").value;

        if (id && monto && estado) {
            var fila = document.createElement("tr");

            var celdaId = document.createElement("td");
            celdaId.textContent = id;
            var celdaMonto = document.createElement("td");
            celdaMonto.textContent = monto;
            var celdaEstado = document.createElement("td");
            var estadoSpan = document.createElement("span");
            estadoSpan.className = estado == "1" ? "activo" : "inactivo"; 
            estadoSpan.textContent = estado == "1" ? "Activo" : "Inactivo";
            celdaEstado.appendChild(estadoSpan);

            fila.appendChild(celdaId);
            fila.appendChild(celdaMonto);
            fila.appendChild(celdaEstado);

            document.getElementById("tabla-cuerpo").appendChild(fila);

            document.getElementById("id").value = '';
            document.getElementById("monto").value = '';
            document.getElementById("estado").value = '1';
        } else {
            alert("Por favor, complete todos los campos.");
        }
    }
</script>

</body>
</html>
