<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
</head>
<?php require_once __DIR__ . '/styles.php'; ?>
<body>
    
<form class="panel">
    <columna style="margin: 10px;">
        <fila class="sb">
            <input nombre text r>
            <input apellido text r>
        </fila>
        <input correo_electrónico email r>
        <input teléfono text>
        <button type="submit">Enviar</button>
    </columna>
</form>

<?php require_once __DIR__ . '/scripts.php'; ?>
</body>
</html>