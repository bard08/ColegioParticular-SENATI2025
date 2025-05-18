<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menú Principal - Colegio Futurista</title>
  <link rel="stylesheet" href="../Modelo/menu.css" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
  <div class="background"></div>
  <div class="container">
    <h1 class="titulo">Menú Principal</h1>
    <div class="menu">
      <a href="VistaPension_Monto.php" class="boton"><i data-lucide="dollar-sign"></i> Montos</a>
      <a href="VistaPension_HistorialPago.php" class="boton"><i data-lucide="credit-card"></i>Historial de Pago</a>
      <a href="VistaPension_Validacion.php" class="boton"><i data-lucide="check-circle"></i> Validación de Pago</a>
      <a href="VistaPension_PagoPension.php" class="boton"><i data-lucide="file-text"></i> Pago Pensión</a>
      <a href="VistaPension_Vista.php" class="boton"><i data-lucide="eye"></i> Vista</a>
      <a href="VistaPension_RegistroGeneral.php" class="boton"><i data-lucide="users"></i> Registro General</a>
    </div>
  </div>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>
