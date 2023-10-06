<?php
namespace Models;


class Carro{
    public $id;
    public $nome;
    public $cor;

    public function salvar(){
        self::$lista[] = $this;
    }

    public static function todos(){
        return self::$lista;
    }


    private static $lista = [];
}