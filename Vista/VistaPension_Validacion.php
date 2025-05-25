<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Operación</title>
  <link rel="stylesheet" href="../Vista/css/VistaPension_Validacion.css">
</head>
<body>
  <div class="form-container">
    <h2>Registrar</h2>
    <form action="/ruta-de-tu-backend" method="POST">
      <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
        <option value="activo">Activo</option>
        <option value="no_activo">No Activo</option>
        </select>
      

      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha" required>

      <label for="monto">Monto:</label>
      <input type="number" id="monto" name="monto" step="0.01" required>

      <label for="fecha_hora_operacion">Fecha y Hora de Operación:</label>
      <input type="datetime-local" id="fecha_hora_operacion" name="fecha_hora_operacion" required>

      <label for="numero_operacion">Número de Operación:</label>
      <input type="text" id="numero_operacion" name="numero_operacion" required>

      <label for="numero_cuenta_destino">Número de Cuenta Destino:</label>
      <input type="text" id="numero_cuenta_destino" name="numero_cuenta_destino" required>

      <button type="submit" class="btn-verde">Registrar</button>

      <button onclick="location.href='../VistaPension_Principal.php'">Volver</button>

    </form>
  </div>
</body>
</html>
