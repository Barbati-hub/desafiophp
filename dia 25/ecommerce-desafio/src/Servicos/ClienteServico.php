<?php 
namespace Douglas\EcommerceDesafio\Servicos;

use Douglas\EcommerceDesafio\Repositorios\MysqlRepositorio;
use Douglas\EcommerceDesafio\Models\Cliente;

class ClienteServico {
    public function __construct($driver) {
        $this->driver = $driver;
    }

    private $driver;

    public function salvar(Cliente $cliente){
        $this->driver->salvar($cliente);
    }

    public function buscar($params=[], $pagina=1, $totalPagina=5){
        return $this->driver->buscar($params, $pagina, $totalPagina);
    }

    public function buscarPorId($id){
        return $this->driver->buscarPorId($id);
    }

    public function excluirPorId($id){
        return $this->driver->excluirPorId($id);
    }
}