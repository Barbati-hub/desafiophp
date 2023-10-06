<?php
require 'config.php';
// require - pega o arquivo em outro lugar
// require 'pasta/nomedoarquivo.php';


// models
// pasta onde fica todos os modelos
// exemplo - produto 

// CLASSES
class Produto{

    public function __construct(){
        $this->codigo = count(self::lista) + 1; 
    }


   public $codigo;
   public $nome;
   public $descricao;
   public $quantidade;


   public function adicionar(){

       self::$lista[] = $this;
   }

   public static function lista(){
    return self::$lista;
 }

   private static $lista = [];


}