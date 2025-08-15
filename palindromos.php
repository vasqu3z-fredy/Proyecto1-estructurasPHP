<?php
// ===============================
// PROBLEMA 3: Palíndromos
// Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. 
// Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.
// ===============================


// Función para saber si un texto es palíndromo
function esPalindromo($texto) {
    // Convertimos todo a minúsculas
    $texto = strtolower($texto);

    // Quitamos espacios
    $texto = str_replace(" ", "", $texto);

    // Comparamos el texto con su reverso
    return $texto == strrev($texto);
}

$resultado = "";

// Si el usuario envió el formulario
if (isset($_POST['texto'])) {
    $cadena = $_POST['texto'];

    if (esPalindromo($cadena)) {
        $resultado = "La frase \"$cadena\" ES un palíndromo ✅";
    } else {
        $resultado = "La frase \"$cadena\" NO es un palíndromo ❌";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palíndromo</title>
</head>
<body>
    <h1>Verificar si es un Palíndromo</h1>
    <form method="post">
        <label for="texto">Escribe una palabra o frase:</label><br><br>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">Comprobar</button>
    </form>

    <!-- Mostrar resultado si existe -->
    <?php if ($resultado != ""): ?>
        <p><strong><?= $resultado ?></strong></p>
    <?php endif; ?>
</body>
</html>

