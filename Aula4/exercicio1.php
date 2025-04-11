<?php
$pessoa = [
    "nome" => "Lucas",
    "idade" => 17,
    "cidade" => "Ribeirão Pires"
];

$pessoa["função"] = "Estudante";
$amigos = ["Aline", "Caetano", "Giulia"];
$dados = array_merge($pessoa, ["amigos" => $amigos]);

print_r($dados);
?>
