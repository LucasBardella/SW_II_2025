<?php
$pares = ""; // Inicializando a variável para armazenar os números pares.

for ($i = 1; $i <= 20; $i++) {
  if ($i % 2 == 0) {
    $pares .= $i . " "; // Concatenando os números pares à variável $pares
  }
}

echo "Números pares: <br>" . $pares . "<br>";
?>

