<?php
// ===============================
// PROBLEMA 1: Escribe una función llamada generar Fibonacci que reciba un número n como parámetro
//  y genere los primeros n términos de la serie Fibonacci. 
// La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores.
// ===============================
function generarFibonacci($n) {
    $fibonacci = [];
    // Primer número siempre es 0
    if ($n >= 1) {
        $fibonacci[] = 0;
    }
    // Segundo número siempre es 1
    if ($n >= 2) {
        $fibonacci[] = 1;
    }
    // Del tercero en adelante será suma de los dos anteriores
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

// Tomamos el valor de n desde la URL (?n=5) o valor por defecto 5
$n = isset($_GET['n']) ? (int)$_GET['n'] : 5;

// Guardamos el resultado la variable $serie
$serie = generarFibonacci($n);
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Fibonacci</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
  <h1>Serie Fibonacci</h1>

  <form method="get">
    <label for="n">Número de términos:</label>
    <input type="number" id="n" name="n" value="<?= $n ?>" min="0" max="99" required>
    <button type="submit">Generar</button>
  </form>
  <?php $serie = generarFibonacci($n); ?>
    <h2>Primeros <?= $n ?> términos</h2>
  <p><?= $n > 0 ? implode(', ', $serie) : 'Sin términos que mostrar.' ?></p>
</body>
</html>
<?php