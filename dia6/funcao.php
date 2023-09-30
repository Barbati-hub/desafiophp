<?php

// function quebraLinha(){ // Função que retornoa um inteiro
//     return "\n";
// }

// function escrevaAlgo(){ // Função void - não tem retorno
//     echo "Escreve na tela algo e não tem retorno \n";
// }

// function retornaInteiro(){ // Função
//     return 1;
// }


// function retornaFloat(){ // Função
//     return 1.1;
// }

// function retornaBoolean(){ // Função
//     return 1 == 1;
// }


// echo "Olá turma estou testando a função" . quebraLinha();


// // Funções com parametros
// function saudacao($nome){ // Função
//     echo "Olá, $nome!" ."\n";
// }
// saudacao("Douglas") ."\n"; 
// "\n";
// "\n";
// function soma($x, $y){
//     $resultado  = $x + $y;
//     echo "Resuldato da soma: $resultado \n";
// }

// $numero1 = fgets(STDIN);
// $numero2 = fgets(STDIN);
// soma($numero1, $numero2);

function saudacaoParametro($nome = "Visitante"){
    echo "Olá, $nome! \n";
}

saudacaoParametro(); // Saida: Olá, VIsitante!
saudacaoParametro("Ana"); //Saida: Olá, Ana!


function somaTudo(...$numeros){
    return array_sum($numeros) . "\n";
}

echo somaTudo(1,2,3,4); //Soma a saida

function somaStrings(...$strings){
    return join(",", $strings) . "\n";
}
echo somaStrings("Douglas", "Alves", "Barbati");

function somaComTipo(float $a, float $b): float{
    return $a + $b . "\n";
}

echo somaComTipo(10, "6");