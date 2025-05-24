<!DOCTYPE html>
<html lang="es">
<head>
<<<<< << HEAD
  <meta charset="UTF-8" />
  <title>Registro de Operación</title>
  <link rel="stylesheet" href="../Modelo/VistaPension_Validacion.css" />
</head>
<body>
  <a href="../Vista/VistaPension_Principal.php">
    <button class="volver-btn">Volver al Menú Principal</button>
  </a>

  <div class="form-container">
    <h2>Registrar</h2>
    <form id="registroForm" action="/ruta-de-tu-backend" method="POST">
      <label for="estado">Estado:</label>
      <select id="estado" name="estado" required>
        <option value="activo">Activo</option>
        <option value="no_activo">No Activo</option>
      </select>

      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha" required />

      <label for="monto">Monto:</label>
      <input type="number" id="monto" name="monto" step="0.01" required />

      <label for="fecha_hora_operacion">Fecha y Hora de Operación:</label>
      <input
        type="datetime-local"
        id="fecha_hora_operacion"
        name="fecha_hora_operacion"
        required
      />

      <label for="numero_operacion">Número de Operación:</label>
      <input type="text" id="numero_operacion" name="numero_operacion" required />

      <label for="numero_cuenta_destino">Número de Cuenta Destino:</label>
      <input
        type="text"
        id="numero_cuenta_destino"
        name="numero_cuenta_destino"
        required
      />

      <button type="submit" class="btn-verde">Registrar</button>
    </form>

    <!-- Tabla para mostrar los registros -->
    <table id="tablaRegistros">
      <thead>
        <tr>
          <th>Estado</th>
          <th>Fecha</th>
          <th>Monto</th>
          <th>Fecha y Hora de Operación</th>
          <th>Número de Operación</th>
          <th>Número de Cuenta Destino</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>

  <script>
    const form = document.getElementById('registroForm');
    const tbody = document.querySelector('#tablaRegistros tbody');

    form.addEventListener('submit', function (e) {
      e.preventDefault(); // evitar envío al servidor

      const datos = {
        estado: this.estado.value,
        fecha: this.fecha.value,
        monto: parseFloat(this.monto.value).toFixed(2),
        fechaHoraOperacion: this.fecha_hora_operacion.value,
        numeroOperacion: this.numero_operacion.value,
        numeroCuentaDestino: this.numero_cuenta_destino.value,
      };

      // Crear una nueva fila
      const fila = document.createElement('tr');

      fila.innerHTML = `
        <td>${datos.estado}</td>
        <td>${datos.fecha}</td>
        <td>${datos.monto}</td>
        <td>${datos.fechaHoraOperacion.replace('T', ' ')}</td>
        <td>${datos.numeroOperacion}</td>
        <td>${datos.numeroCuentaDestino}</td>
      `;

      // Añadir fila a la tabla
      tbody.appendChild(fila);

      // Limpiar formulario
      this.reset();

      alert('Datos registrados correctamente en la tabla.');
    });
  </script>
</body>
</html>
=======
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
    </form>
  </div>
</body>
</html>
