<?php
// Função de Saudação Personalizada:

// Crie uma função chamada saudar, que aceite um nome como argumento.
// A função deve retornar a mensagem "Olá, [nome]!", substituindo "[nome]" pelo nome fornecido.
// Caso nenhum nome seja fornecido, a função deve retornar "Olá, Visitante!".


echo " === Exercicio 01 ===" . "\n";
echo "Digite o seu nome: ";
$nome = fgets(STDIN);
function saudacao($nome){
    echo "Olá, $nome";
}

saudacao($nome);