<?php
namespace Desafio\CadastroProduto\Database\Interfaces;

use Desafio\CadastroProduto\Database\InterfacesIDado;
use Desafio\CadastroProduto\Database\Medoo\Medoo;

class MysqlRepositorio implements IDado {

    public function __construct() {
        $this->database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'estoque',
            'server' => 'localhost',
            'username' => 'root',
            'password' => 'root'
        ]);
    }
    
    private $database;

    public function salvar($script_sql){
        $this->database->query($script_sql);
    }

    public function todos($query){
        return $this->database->query($query)->fetchAll();
    }
}