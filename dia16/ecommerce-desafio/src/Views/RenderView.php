<?php
namespace Douglas\EcommerceDesafio\Views;
use Slim\Views\PhpRenderer;

class RenderView {
    public static function render($response, $data = [], $template = null) {
        list($controller, $action) = self::getControllerAction();
        if (isset($template)) $action = $template;
        $renderer = new PhpRenderer(__DIR__);
        $conteudo = $renderer->fetch("/$controller/$action.html.php", $data);
        return $renderer->render($response, "/Layouts/Layout.html.php", ['conteudo' => $conteudo]);
    }

    public static function render404($response){
        $renderer = new PhpRenderer(__DIR__);
        $conteudo = $renderer->fetch("/Layouts/404.html.php");
        $response->withBody(404);
        return $renderer->render($response, "/Layouts/Layout.html.php", ['conteudo', $conteudo]);
    }

    private static function getControllerAction() {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        $controllerName = '';
        $actionName = '';
        
        foreach ($backtrace as $entry) {
            if (isset($entry['class']) && strpos($entry['class'], 'Controller') !== false) {
                $controllerName = $entry['class'];
                $actionName = $entry['function'];
                break;
            }
        }

        $controller = basename(str_replace('\\', '/', $controllerName));
        $controller = str_replace('Controller', '', $controller);
        $action = ucfirst($actionName);

        return [$controller, $action];
    }
}