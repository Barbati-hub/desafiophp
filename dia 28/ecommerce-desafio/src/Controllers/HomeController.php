<?php
namespace Douglas\EcommerceDesafio\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Douglas\EcommerceDesafio\Models\Cliente;
use Douglas\EcommerceDesafio\Views\RenderView;

class HomeController{
    public static function index(Request $request, Response $response) {
        $cliente = new Cliente();
        $cliente->nome = "Douglas Alves";
    
        return RenderView::render($response, ['cliente' => $cliente]);
    }
}