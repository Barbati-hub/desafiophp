<?php
require 'models/carro.php';
use Models\Carro;

$ecosporte = new Carro();
$ecosporte->nome = "Eco Sport do Chaves";
$ecosporte->cor = "Vermelho";
$ecosporte->salvar();

$uno = new Carro();
$uno->nome = "Uno do Chaves";
$uno->cor = "Verde";
$uno->salvar();


foreach(Carro::todos() as $carro){
    echo "Carro $carro->nome \n";
}