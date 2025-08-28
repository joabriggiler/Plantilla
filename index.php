<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require_once __DIR__ . '/styles.php'; ?>
<body>
    
<form>
    <div class="columna">
        <div class="fila">
            <div class="input-c">
                <input name="nombre" placeholder="Nombre" type="text" required>
                <p class="input-t">Nombre</p>
                <svg class="input-e" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"><rect width="12" height="12" rx="6"></rect><path d="M6.72725 2.90906H5.27271L5.45452 6.90906H6.54543L6.72725 2.90906Z"></path><path d="M5.99998 7.63633C6.40164 7.63633 6.72725 7.96195 6.72725 8.36361C6.72725 8.76527 6.40164 9.09088 5.99998 9.09088C5.59832 9.09088 5.27271 8.76527 5.27271 8.36361C5.27271 7.96195 5.59832 7.63633 5.99998 7.63633Z"></path></svg>
            </div>
            <div class="input-c">
                <input name="apellido" placeholder="Apellido" type="text" required>
                <p class="input-t">Apellido</p>
                <svg class="input-e" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"><rect width="12" height="12" rx="6"></rect><path d="M6.72725 2.90906H5.27271L5.45452 6.90906H6.54543L6.72725 2.90906Z"></path><path d="M5.99998 7.63633C6.40164 7.63633 6.72725 7.96195 6.72725 8.36361C6.72725 8.76527 6.40164 9.09088 5.99998 9.09088C5.59832 9.09088 5.27271 8.76527 5.27271 8.36361C5.27271 7.96195 5.59832 7.63633 5.99998 7.63633Z"></path></svg>
            </div>
        </div>
        <button type="submit">Enviar</button>
    </div>
</form>

<?php require_once __DIR__ . '/scripts.php'; ?>
</body>
</html>