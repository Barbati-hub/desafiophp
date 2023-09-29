<?php

// // Usando a função array
// $array_vazio1 = array();

// // Usando Colchetes
// $array2 = [];

// // Usando a função array
// $array1 = array("maça", "banana", "Cereja");

// // Usando Colchetes
// $array2 = ["maça", "banana", "Cereja"];

// //mostrar  itens dentro do array
// echo $array1[0] ."\n";
// echo $array2[1] ."\n";

// $arrayAssociativo = array(
//     "nome" => "João",
//     "idade" => 25,
//     "cidade" => "Lisboa"
// );

// echo $arrayAssociativo["cidade"] ."\n";

// Como adicionar dado numa array

$array = ["maça", "banana"];
$array[] = "cereja";

echo var_dump($array);