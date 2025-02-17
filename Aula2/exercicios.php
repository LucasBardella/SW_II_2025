<?php
$nome = "João";
$idade = 25;
$cidade = "São Paulo";

echo "Exercicio 1" . "<br>";
echo "<br>";
echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Cidade: " . $cidade . "<br>";

echo "<br>";
echo "<br>";
echo "<br>";

echo "Exercicio 2" . "<br>";

$numero = -5;

if ($numero > 0) {
    echo "O número $numero é positivo.";
} elseif ($numero < 0) {
    echo "O número $numero é negativo.";
} else {
    echo "O número $numero é zero.";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Exercicio 3" . "<br>";

$numero = 4;

if ($numero % 2 == 0) {
    echo "O número $numero é par.";
} else {
    echo "O número $numero é ímpar.";
}

?>
