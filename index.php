<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
</head>
<?php require_once __DIR__ . '/styles.php'; ?>
<body>
    
<!--Formulario-->
<form class="panel" style="width: 400px;">
    <columna class="m">
        <fila class="sb">
            <input nombre text r>
            <input apellido text r>
        </fila>
        <input correo_electrónico email r>
        <input teléfono text>
        <button type="submit">Enviar</button>
    </columna>
</form>

<!--Acordeon-->
<div class="panel" style="width: 400px;">
    <fila class="acordeon sb p">
        <p>Opciones avanzadas</p>
    </fila>
    <div class="acordeon-c">
        <div style="margin: 0 14px 10px;">
            <p style="opacity: .5;">Las opciones avanzadas están pensadas para los usuarios que poseen un mayor conocimiento de la tecnología de la página, ya que permiten acceder a configuraciones adicionales, personalizar el comportamiento de ciertos elementos y ajustar detalles que no son necesarios para el uso básico. Estas opciones ofrecen un mayor control y flexibilidad, pero requieren comprender mejor el funcionamiento interno para evitar errores o resultados inesperados.</p>
        </div>
    </div>
</div>

<!--focusArea-->
<div class="focusContent">
    <columna class="panel p" style="width:280px;" tabindex="0">
        <p class="tc">Los términos y condiciones son un acuerdo que establece las reglas de uso, derechos y responsabilidades entre una empresa y sus usuarios.</p>
        <button onclick="closeFocus()">Entiendo</button>
    </columna>
</div>
<p onclick="openFocus(this)" style="cursor:pointer;">Ver terminos y condiciones</p>

<?php require_once __DIR__ . '/scripts.php'; ?>
</body>
</html>