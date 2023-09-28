
<?php

$somaFrutas = 0;
$nomesFrutas = "";
$qtdeFrutas = 2;

for($i=1; $i <= $qtdeFrutas; $i++){
    echo "Digite o nome da fruta $i: ";
    $nomeFruta = fgets(STDIN);
    echo "Digite o valor da $nomeFruta: ";
    $valorFruta = floatval(trim(fgets(STDIN)));

    $somaFrutas += $valorFruta;
    $nomesFrutas .= "\n $nomeFruta";
}

$media = $somaFrutas / $qtdeFrutas;


echo "O Valor das Frutas é de R$: $somaFrutas e a média  é de R$: $media ";
echo "As Frutas Escolhidas Foram  $nomeFrutas";
// for ($i = 0; $i < 5; $i++){
//     echo "Este é o loop {$i} " ."\n";
// }// Utiliza quando sabe o começo e o fim
// Faça um programa que solicite 4 frutas
// com seus valores e no final de a média de valores das frutas