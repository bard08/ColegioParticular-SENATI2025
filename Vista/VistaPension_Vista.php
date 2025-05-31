<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pagos - Colegio</title>
    <link rel="stylesheet" href="../Vista/css/VistaPension_Vista.css">
    <script>
        function agregarVista() {
            const pagoPension = document.getElementById("ID_PagoPension").value;
            const validacionPago = document.getElementById("id_validacion_pago").value;
            const monto = document.getElementById("id_monto").value;
            const estadoDePago = document.querySelector('input[name="estadoDePago"]:checked');
            const entregoComprobante = document.getElementById("chk_comprobante").checked;

            if (!/^\d+$/.test(monto)) {
                alert("Por favor, ingrese un valor numérico válido para el Monto.");
                return;
            }

            if (!estadoDePago) {
                alert("Por favor, seleccione un estado de pago.");
                return;
            }

            const tabla = document.getElementById("tablaVista").getElementsByTagName('tbody')[0];
            const nuevaFila = tabla.insertRow();
            nuevaFila.insertCell(0).textContent = pagoPension;
            nuevaFila.insertCell(1).textContent = validacionPago;
            nuevaFila.insertCell(2).textContent = monto;
            nuevaFila.insertCell(3).textContent = estadoDePago.value === "1" ? "Pagado" : "Pendiente";
            nuevaFila.insertCell(4).textContent = entregoComprobante ? "Sí" : "No";

            document.getElementById("ID_PagoPension").value = "";
            document.getElementById("id_validacion_pago").value = "";
            document.getElementById("id_monto").value = "";
            const radios = document.querySelectorAll('input[name="estadoDePago"]');
            radios.forEach(r => r.checked = false);
            document.getElementById("chk_comprobante").checked = false;
        }
    </script>
</head>
<body>

    <div class="background">
        <div class="container">

            <h1>Vista</h1>

            <form onsubmit="event.preventDefault(); agregarVista();">
                <label for="ID_PagoPension">ID de Pago de Pensión:</label>
                <input type="number" id="ID_PagoPension">

                <label for="id_validacion_pago">ID de Validación de Pago:</label>
                <input type="number" id="id_validacion_pago">

                <label for="id_monto">Monto (S/):</label>
                <input type="number" id="id_monto">

                <label>Estado de Pago:</label>
                <div class="radio-group">
                    <label><input type="radio" name="estadoDePago" value="0"> Pendiente</label>
                    <label><input type="radio" name="estadoDePago" value="1"> Pagado</label>
                </div>

                <label><input type="checkbox" id="chk_comprobante"> ¿Entregó comprobante?</label>

                <button type="submit">Agregar</button>
                <!-- Evita validación con type="button" -->
                <button type="button" onclick="location.href='../Vista/VistaPension_Principal.php'">Volver a la pagina principal</button>
            </form>

            <h2>Datos Ingresados</h2>
            <table id="tablaVista">
                <thead>
                    <tr>
                        <th>ID Pago Pensión</th>
                        <th>ID Validación</th>
                        <th>Monto (S/)</th>
                        <th>Estado de Pago</th>
                        <th>Comprobante</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se insertarán las filas dinámicamente -->
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>
