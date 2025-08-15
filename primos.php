<?php
// ===============================
// PROBLEMA 2: Crea una función llamada esPrimo que determine si un número dado es primo o no.
//  Un número primo es aquel que solo es divisible por 1 y por sí mismo.
// ===============================


function esPrimo(int $numero): bool {
    if ($numero <= 1) { return false; }
    if ($numero <= 3) { return true; }       // 2 y 3 son primos
    if ($numero % 2 === 0 || $numero % 3 === 0) { return false; }

    // Chequeo 6k ± 1
    for ($i = 5; $i * $i <= $numero; $i += 6) {
        if ($numero % $i === 0 || $numero % ($i + 2) === 0) {
            return false;
        }
    }
    return true;
}
$valor = isset($_GET['n']) ? (int) $_GET['n'] : 7;
?>


<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Números Primos</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
  <h1>Verificador de número primo</h1>

  <form method="get">
    <label for="n">Número a evaluar:</label>
    <input type="number" id="n" name="n" value="<?= $valor ?>" required>
    <button type="submit">Verificar</button>
  </form>

  <h2>Resultado</h2>
  <p>
    El número <?= $valor ?> <?= esPrimo($valor) ? 'sí es primo' : 'no es primo' ?>.
  </p>
</body>
</html>
