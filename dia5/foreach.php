<?php
$array = ["maça", "banana", "Cereja"];

foreach ($array as $fruta) {
    echo " Foreach valor: $fruta" . "\n";
}

echo "======================= \n";

$qtd = count($array);
for ($i = 0; $i < $qtd; $i++){
    echo "Valor do FOR: $array[$i] " . "\n";
}
echo "======================= \n";

$i = 0;
$qtd = count($array);
while ($i < $qtd) {
    echo "while valor: $array[$i] \n";
    $i++; // skip
}


$pessoasArray = [
    array(
        "nome" => "João",
        "idade" => 25,
        "cidade" => "Lisboa"
    ),
    array(
        "nome" => "Maria",
        "idade" => 30,
        "cidade" => "Porto"
    
    )
];

echo "======================= \n";

foreach($pessoasArray as $pessoa) {
    echo "=== FOREACH VALOR === \n";
    echo "Nome: {$pessoa["nome"]} \n";
    echo "Nome: {$pessoa["idade"]} \n";
    echo "Nome: {$pessoa["cidade"]} \n";
}