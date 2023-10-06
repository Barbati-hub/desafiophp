<?php


$p = new Produto();
$p->nome = "Maça";
$p->descricao ="Maça da turma da monica";
$p-> quantidade = 10;

$p->adicionar();

$produtos = Produto::lista();

foreach ($produtos as $produto){
    echo "Codigo: {$produto->codigo}\n";
    echo "Nome: {$produto->nome}\n";
}