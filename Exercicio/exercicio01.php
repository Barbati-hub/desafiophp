<!--
     Faça um programa, que irá utilizar, dados de entrada e saida + variaveis
para calcular alguma operação matematica, exemplo

o usuario digita o seu nome.
digita o nome de um produto depois o valor dele
depois a quantidade de itens
depois faça o calculo total do pedido e mostre na tela 
-->
<?php
echo "Digite o seu nome: ";
$nome = fgets(STDIN);
echo "Digite o nome do Produto: ";
$produto = fgets(STDIN);
echo "Digite a quantidade: ";
$qtde = fgets(STDIN);
echo "Digite o valor do produto: ";
$valor = fgets(STDIN);

echo "Ola" . $nome;
$totalPedido = $valor * $qtde;

echo $nome . "O total foi R$" . $totalPedido . "\n";

