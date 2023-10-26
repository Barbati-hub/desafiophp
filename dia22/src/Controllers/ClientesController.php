<?php
namespace Douglas\EcommerceDesafio\Controllers;
 use \stdClass;

class ClientesController{
    public static function get($request, $response){
        $cliente = new stdClass();
        $cliente->nome = "Douglas Barbati";
        
        ob_start();
        include __DIR__ . '/../Views/Home/index.html.php';
        $htmlOutput = ob_get_clean();
        
        $response->getBody()->write($htmlOutput);
        return $response;
    }
}
