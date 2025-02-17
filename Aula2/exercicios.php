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
    echo "O número $numero é par." . "<br>";
} else {
    echo "O número $numero é ímpar." . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Exercicio 4" . "<br>";

$opcao = 2;
switch ($opcao) {
    case 1:
        echo "Home escolhida";
        break;
    case 2:
        echo "Menu escolhida";
        break;
    case 3:
        echo "Contato escolhido";
        break;
    default:
        echo "Opção inválida";
} 

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Exercicio 5" . "<br>";

$contador = 0;
while ($contador < 10) {
    echo "Número: $contador " . "<br>";
    $contador++;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Exercicio 6" . "<br>";

$soma = 0;

for ($i = 1; $i <= 50; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 a 50 é: " . $soma;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Exercicio 7" . "<br>";

$nomes = ["Ana", "Bruno", "Carlos", "Lucas", "Anderson", "Luana", "Vinicius", "Raphaela"]; 
foreach ($nomes as $nome) {
    echo "Nome: $nome " . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Exercicio 8" . "<br>";

// Recebe um número do usuário
$numero = 3;

// Exibe a tabuada do número de 1 a 10
echo "Tabuada de $numero:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n" . "<br>";
}

?>
