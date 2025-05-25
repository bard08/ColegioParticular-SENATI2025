<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Colegio Particular</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    header {
      background-color: #004aad;
      color: white;
      width: 100%;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .container {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: center;
      padding: 40px 20px;
    }

    .card {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 300px;
      padding: 30px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-decoration: none;
      color: #333;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    }

    .card h2 {
      margin-top: 0;
      font-size: 1.5em;
      color: #0056b3;
    }

    .card p {
      color: #555;
      font-size: 1em;
    }

    .bienvenida {
      margin-top: 30px;
      text-align: center;
      font-size: 1.5em;
      color: #333;
    }
  </style>
</head>
<body>

  <header>
    <h1>Colegio Particular</h1>
  </header>

  <div class="bienvenida">
    <h2>Bienvenidos a Nuestra Página</h2>
  </div>

  <div class="container">
    <a href="Vista/VistaMatricula.php" class="card">
      <h2>Matrícula</h2>
      <p>Gestión de Matrícula.</p>
    </a>
    <a href="Vista/VistaSeguimiento_MenuPrincipal.php" class="card">
      <h2>Seguimiento de Notas</h2>
      <p>Registro y seguimiento de notas.</p>
    </a>
    <a href="Vista/VistaPension_Principal.php" class="card">
      <h2>Pensión</h2>
      <p>Registro y seguimiento de pagos.</p>
    </a>
  </div>

</body>
</html>
