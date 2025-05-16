<?php

$usuarios = [
    ['id' => 1, 'nombre' => 'Ana Pérez', 'email' => 'ana@example.com'],
    ['id' => 2, 'nombre' => 'Luis Gómez', 'email' => 'luis@example.com'],
    ['id' => 3, 'nombre' => 'María Torres', 'email' => 'maria@example.com'],
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 70%; margin: auto; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Usuarios Registrados</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= htmlspecialchars($usuario['id']) ?></td>
            <td><?= htmlspecialchars($usuario['nombre']) ?></td>
            <td><?= htmlspecialchars($usuario['email']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="../index.php">
    <button>Volver al Menú Principal</button>
</a>
</body>
</html>
