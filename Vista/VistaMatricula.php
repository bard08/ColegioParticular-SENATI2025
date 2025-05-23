
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrículas 2025 - Colegio Particular</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Colegio Particular</h1>
    <p>Plataforma de Matrículas 2025</p>
  </header>

  <nav>
    <div class="Menu">Menú</div>
    <button onclick="mostrarSeccion('inicio')">Información</button>
    <button onclick="mostrarSeccion('nuevo')">Estudiante Nuevo</button>
    <button onclick="mostrarSeccion('antiguo')">Estudiante Antiguo</button>
    <button onclick="mostrarSeccion('reporte')">Reporte Matriculas</button>
    <button onclick="mostrarSeccion('vacantes')">Vacantes Disponibles</button>
    <button onclick="mostrarSeccion('pagos')">Reporte de pagos</button>
  </nav>

  <div class="container">
    <!-- Información -->
    <section id="inicio" class="seccion">
      <h2>Descripción del Proceso de Matrícula</h2>
      <p>El proceso de matrícula está disponible en las instituciones educativas del país para todos los niños, niñas, adolescentes, jóvenes y adultos.</p>
      <p>Si eres madre, padre o representante legal de un o una menor en edad escolar, puedes matricularlo en un colegio de cualquier distrito del país. En colegios públicos, la matrícula es gratuita y no puede ser condicionada a:</p>
      <ul>
        <li>Evaluación o examen de admisión previo al ingreso.</li>
        <li>Compra de útiles, materiales u otros.</li>
        <li>Pago de donaciones, aportes, cuotas de la Apafa u otros conceptos.</li>
        <li>Presentación de documentos adicionales a los solicitados en la norma de matrícula.</li>
      </ul>
      <p>En colegios privados, las condiciones para realizar el proceso de matrícula, los montos y oportunidades de pago deben estar en su Reglamento Interno y ser comunicadas a las familias 30 días antes del inicio del proceso.</p>
      <h3>Costo de Matrícula 2025</h3>
      <ul>
        <li><strong>Inicial 3 años:</strong> S/ 150.00</li>
        <li><strong>Primaria 1°:</strong> S/ 180.00</li>
        <li><strong>Secundaria 1°:</strong> S/ 200.00</li>
      </ul>
      <p>Los pagos se pueden realizar por transferencia bancaria o directamente en la oficina de tesorería del colegio.</p>
      <h3>Información del Colegio</h3>
      <ul>
        <li><strong>Nombre:</strong> Colegio Particular San Martín</li>
        <li><strong>Dirección:</strong> Av. Los Próceres 123, Lima</li>
        <li><strong>Niveles educativos:</strong> Inicial, Primaria y Secundaria</li>
        <li><strong>Teléfono:</strong> (01) 456-7890</li>
        <li><strong>Email:</strong> informes@colegiosanmartin.edu.pe</li>
        <li><strong>Horario de atención:</strong> Lunes a Viernes, 8:00 a.m. - 3:00 p.m.</li>
      </ul>
    </section>

    <!-- Estudiante Nuevo -->
    <section id="nuevo" class="seccion">
      <h2>Formulario para Estudiantes Nuevos</h2>
      <form>
        <label>Nombre completo del estudiante</label>
        <input type="text" required>
        <label>DNI del estudiante</label>
        <input type="text" required>
        <label>Fecha de nacimiento</label>
        <input type="date" required>
        <label>Grado al que postula</label>
        <select id="grado" required onchange="actualizarMonto()">
          <option value="">-- Seleccione --</option>
          <option value="Inicial 3 años">Inicial 3 años</option>
          <option value="Primaria 1°">Primaria 1° a 6°</option>
          <option value="Secundaria 1°">Secundaria 1° a 5°</option>
        </select>
        <div id="monto-container" style="margin: 15px 0; font-weight: bold; color: #003366;"></div>
        <label>Nombre del apoderado</label>
        <input type="text" required>
        <label>Email de contacto</label>
        <input type="email" required>
        <label>Teléfono</label>
        <input type="text" required>

        <table>
          <thead><tr><th>Requisito</th><th>Presentado</th></tr></thead>
          <tbody>
            <tr><td>Constancia de vacante</td><td><input type="checkbox"></td></tr>
            <tr><td>Resolución de traslado</td><td><input type="checkbox"></td></tr>
            <tr><td>Certificado de estudios</td><td><input type="checkbox"></td></tr>
            <tr><td>Ficha única de matrícula</td><td><input type="checkbox"></td></tr>
            <tr><td>Partida de nacimiento</td><td><input type="checkbox"></td></tr>
            <tr><td>DNI del estudiante</td><td><input type="checkbox"></td></tr>
            <tr><td>DNI de los padres</td><td><input type="checkbox"></td></tr>
            <tr><td>Ficha de admisión</td><td><input type="checkbox"></td></tr>
            <tr><td>Copia de DNI</td><td><input type="checkbox"></td></tr>
            <tr><td>Comprobante de pago</td><td><input type="checkbox"></td></tr>
            <tr><td>Descarte de anemia</td><td><input type="checkbox"></td></tr>
            <tr><td>Descarte de TBC</td><td><input type="checkbox"></td></tr>
          </tbody>
        </table>

        <button type="submit">Enviar matrícula</button>
        <button type="button" onclick="mostrarSeccion('inicio')">Regresar</button>
      </form>
    </section>

    <!-- Estudiante Antiguo -->
    <section id="antiguo" class="seccion">
      <h2>Formulario para Estudiantes Antiguos</h2>
      <form>
        <label>DNI del estudiante</label>
        <input type="text" required>
        <label>Nombre completo</label>
        <input type="text" required>
        <label>Grado actual</label>
        <input type="text" required>
        <label>Grado al que desea pasar</label>
        <input type="text" required>
        <label>Teléfono de contacto</label>
        <input type="text" required>
        <label>Email</label>
        <input type="email" required>

        <table>
          <thead><tr><th>Requisito</th><th>Presentado</th></tr></thead>
          <tbody>
            <tr><td>Renovación de matrícula</td><td><input type="checkbox"></td></tr>
            <tr><td>DNI del estudiante</td><td><input type="checkbox"></td></tr>
            <tr><td>DNI de los padres</td><td><input type="checkbox"></td></tr>
            <tr><td>Ficha de admisión</td><td><input type="checkbox"></td></tr>
            <tr><td>Copia de DNI</td><td><input type="checkbox"></td></tr>
            <tr><td>Comprobante de pago</td><td><input type="checkbox"></td></tr>
            <tr><td>Descarte de anemia</td><td><input type="checkbox"></td></tr>
            <tr><td>Descarte de TBC</td><td><input type="checkbox"></td></tr>
          </tbody>
        </table>

        <button type="submit">Actualizar matrícula</button>
        <button type="button" onclick="mostrarSeccion('inicio')">Regresar</button>
      </form>
    </section>

<!-- Reporte de Matrículas -->
<section id="reporte" class="seccion">
  <h2>Reporte de Matrículas</h2>
  
  <input type="text" id="buscadorMatriculas" placeholder="Buscar por grado..." onkeyup="filtrarReporteMatriculas()" style="margin-bottom: 10px; padding: 5px; width: 100%; max-width: 300px;">

  <table id="tablaMatriculas">
    <thead>
      <tr><th>Grado</th><th>Estudiantes Nuevos</th><th>Estudiantes Antiguos</th><th>Total</th></tr>
    </thead>
    <tbody>
      <tr><td>Inicial 3 años</td><td>12</td><td>10</td><td>22</td></tr>
      <tr><td>Primaria 1°</td><td>15</td><td>14</td><td>29</td></tr>
      <tr><td>Secundaria 1°</td><td>8</td><td>20</td><td>28</td></tr>
    </tbody>
    <script>
  function filtrarReporteMatriculas() {
    let input = document.getElementById("buscadorMatriculas");
    let filtro = input.value.toLowerCase();
    let tabla = document.getElementById("tablaMatriculas");
    let filas = tabla.getElementsByTagName("tr");

    for (let i = 1; i < filas.length; i++) {
      let celda = filas[i].getElementsByTagName("td")[0];
      if (celda) {
        let texto = celda.textContent || celda.innerText;
        filas[i].style.display = texto.toLowerCase().indexOf(filtro) > -1 ? "" : "none";
      }
    }
  }
</script>
  </table>
</section>


    <!-- Vacantes Disponibles -->
    <!-- Vacantes Disponibles -->
<section id="vacantes" class="seccion">
  <h2>Vacantes Disponibles 2025</h2>

  <!-- Buscador -->
  <input type="text" id="buscadorVacantes" placeholder="Buscar por grado..." onkeyup="filtrarVacantes()" style="margin-bottom: 10px; padding: 5px; width: 100%; max-width: 300px;">

  <table>
    <thead>
      <tr>
        <th>Grado</th>
        <th>Capacidad Total</th>
        <th>Inscritos</th>
        <th>Vacantes Disponibles</th>
      </tr>
    </thead>
    <tbody id="tablaVacantes">
      <tr><td>Inicial 3 años</td><td>30</td><td>22</td><td>8</td></tr>
      <tr><td>Primaria 1°</td><td>35</td><td>29</td><td>6</td></tr>
      <tr><td>Secundaria 1°</td><td>40</td><td>28</td><td>12</td></tr>
    </tbody>
  </table>
</section>

<!-- Reporte de Pagos -->
<section id="pagos" class="seccion">
  <h2>Reporte de Pagos</h2>
  <table>
    <thead>
      <tr>
        <th>ID Cuota</th>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Grado</th>
        <th>Tipo de Pago</th>
        <th>Monto</th>
        <th>Vencimiento</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>001</td><td>72145689</td><td>María López</td><td>Primaria 1°</td><td>Matrícula</td><td>S/ 180.00</td><td>2025-01-10</td><td>Pendiente</td></tr>
      <tr><td>002</td><td>75896312</td><td>Carlos Pérez</td><td>Secundaria 1°</td><td>Matrícula</td><td>S/ 200.00</td><td>2025-01-15</td><td>Pagado</td></tr>
      <tr><td>003</td><td>80456327</td><td>Lucía Ramírez</td><td>Inicial 3 años</td><td>Matrícula</td><td>S/ 150.00</td><td>2025-01-20</td><td>Pendiente</td></tr>
    </tbody>
  </table>
</section>

<!-- Script de búsqueda -->
<script>
  function filtrarVacantes() {
    const input = document.getElementById("buscadorVacantes");
    const filtro = input.value.toLowerCase();
    const filas = document.querySelectorAll("#tablaVacantes tr");

    filas.forEach(fila => {
      const grado = fila.cells[0].textContent.toLowerCase();
      fila.style.display = grado.includes(filtro) ? "" : "none";
    });
  }
</script>a
  </div>

  <footer>
    <p>&copy; 2025 Colegio Privado</p>
  </footer>

  <script>
    function mostrarSeccion(seccion) {
      let secciones = document.querySelectorAll('.seccion');
      secciones.forEach(s => s.style.display = 'none');
      document.getElementById(seccion).style.display = 'block';
    }
    function actualizarMonto() {
      const grado = document.getElementById("grado").value;
      const montoContainer = document.getElementById("monto-container");
      let monto = "";
      switch (grado) {
        case "Inicial 3 años": monto = "S/ 150.00"; break;
        case "Primaria 1°": monto = "S/ 180.00"; break;
        case "Secundaria 1°": monto = "S/ 200.00"; break;
        default: monto = "";
      }
      montoContainer.textContent = monto ? `Monto total de matrícula: ${monto}` : "";
    }
    mostrarSeccion('inicio');
  </script>
</body>
</html>







