<?php
namespace Douglas\EcommerceDesafio\Config;

use Slim\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpNotFoundException;
use Douglas\EcommerceDesafio\Controllers\ClientesController;
use Douglas\EcommerceDesafio\Controllers\PedidosController;
use Douglas\EcommerceDesafio\Controllers\HomeController;
use Douglas\EcommerceDesafio\Views\RenderView;

class Routes{
    public static function render($app){
        $app->get('/', [HomeController::class, 'index']);

        $app->get('/clientes', [ClientesController::class, 'index']);
        $app->get('/clientes.json', [ClientesController::class, 'indexJson']);
        $app->get('/clientes/novo', [ClientesController::class, 'novo']);
        $app->get('/clientes/{id}/excluir', [ClientesController::class, 'excluir']);
        $app->post('/clientes', [ClientesController::class, 'criar']);
        $app->get('/clientes/{id}/editar', [ClientesController::class, 'editar']);
        $app->post('/clientes/{id}', [ClientesController::class, 'atualizar']);

        $app->get('/pedidos', [PedidosController::class, 'index']);
        $app->get('/pedidos/novo', [PedidosController::class, 'novo']);
        $app->get('/pedidos/{id}/excluir', [PedidosController::class, 'excluir']);
        $app->post('/pedidos', [PedidosController::class, 'criar']);
        $app->get('/pedidos/{id}/editar', [PedidosController::class, 'editar']);
        $app->post('/pedidos/{id}', [PedidosController::class, 'atualizar']);



        // meus arquivos de assets oficiais
        $app->get('/assets/{path:.*}', function ($request, $response, $args) {
            $file = __DIR__ . '/../Assets/' . $args['path'];
        
            if (!file_exists($file)) {
                return $response->withStatus(404);
            }

            $extensionMimeTypes = [
                'css' => 'text/css',
                'js'  => 'application/javascript',
            ];

            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $mime = $extensionMimeTypes[$extension] ?? mime_content_type($file);

            $stream = new \Slim\Psr7\Stream(fopen($file, 'r'));

            return $response->withHeader('Content-Type', $mime)->withBody($stream);
        });

        $errorMiddleware = $app->addErrorMiddleware(true, true, true);

        $errorMiddleware->setErrorHandler(
            HttpNotFoundException::class,
            function (ServerRequestInterface $request, \Throwable $exception, bool $displayErrorDetails) {
                return RenderView::render404(new Response());
            }
        );
    }
}