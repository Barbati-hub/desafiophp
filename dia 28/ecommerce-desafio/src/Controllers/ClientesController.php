<?php
namespace Douglas\EcommerceDesafio\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Douglas\EcommerceDesafio\Models\Cliente;
use Douglas\EcommerceDesafio\Views\RenderView;
use Douglas\EcommerceDesafio\Servicos\ClienteServico;
// use Douglas\EcommerceDesafio\Repositorios\ClienteRepositorioMysql;
use Douglas\EcommerceDesafio\Repositorios\ClienteRepositorioIlluminate;
use Douglas\EcommerceDesafio\Servicos\ErrosDeValidacao\FormatoValidacao;
use Douglas\EcommerceDesafio\Servicos\ErrosDeValidacao\VazioValidacao;
use Illuminate\Database\UniqueConstraintViolationException;

class ClientesController{
    private static $service;

    private static function service() {
        if(!isset($service)) $service = new ClienteServico(new ClienteRepositorioIlluminate());
        // if(!isset($service)) $service = new ClienteServico(new ClienteRepositorioMysql());
        return $service;
    }

    public static function index(Request $request, Response $response) {
        $clientes = self::service()->buscar();
        return RenderView::render($response, ['clientes' => $clientes]);
    }

    public static function indexJson(Request $request, Response $response) {
        $querystring = $request->getQueryParams();
        $nome = $querystring['nome'] ?? "";
        $clientes = self::service()->buscar(['nome' => $nome]);
        $response = $response->withHeader('Content-Type', 'application/json');
        $response->getBody()->write(json_encode($clientes));
        return $response;
    }

    public static function novo(Request $request, Response $response) {
        return RenderView::render($response, [], "Form");
    }

    public static function criar(Request $request, Response $response) {
        $cliente = new Cliente();
        
        $data = $request->getParsedBody();

        $cliente = new Cliente(
            null,
            $data['nome'] ?? "",
            $data['telefone'] ?? "",
            $data['email'] ?? "",
            $data['endereco'] ?? ""
        );
        
        try{
            self::service()->salvar($cliente);
        }
        catch (VazioValidacao $err) {
            return RenderView::render($response, ["erro" => $err->getMessage()], "Form");
        } 
        catch (FormatoValidacao $err) {
            return RenderView::render($response, ["erro" => $err->getMessage()], "Form");
        } 
        catch (UniqueConstraintViolationException $err) {
            return RenderView::render($response, ["erro" => "Registro duplicado"], "Form");
        }
        catch (\Exception $e) {
            return RenderView::render($response, ["erro" => "Erro genérico: {$e->getMessage()}"], "Form");
        }

        return $response->withStatus(302)->withHeader('Location', '/clientes');
    }

    public static function editar(Request $request, Response $response) {
        $id = $request->getAttribute('id');
        $cliente = self::service()->buscarPorId($id);

        if(!isset($cliente))
            return $response->withStatus(302)->withHeader('Location', '/clientes');
        
        return RenderView::render($response, ["cliente" => $cliente], "Form");
    }

    public static function atualizar(Request $request, Response $response) {
        $id = $request->getAttribute('id');
        $cliente = self::service()->buscarPorId($id);

        if(!isset($cliente))
            return $response->withStatus(302)->withHeader('Location', '/clientes');

        $data = $request->getParsedBody();

        $cliente->nome = $data['nome'];
        $cliente->email = $data['email'];
        $cliente->telefone = $data['telefone'];
        $cliente->endereco = $data['endereco'];

        try{
            self::service()->salvar($cliente);
        }
        catch (VazioValidacao $err) {
            return RenderView::render($response, ["erro" => $err->getMessage()], "Form");
        } 
        catch (FormatoValidacao $err) {
            return RenderView::render($response, ["erro" => $err->getMessage()], "Form");
        } 
        catch (UniqueConstraintViolationException $err) {
            return RenderView::render($response, ["erro" => "Registro duplicado"], "Form");
        }
        catch (\Exception $e) {
            return RenderView::render($response, ["erro" => "Erro genérico: {$e->getMessage()}"], "Form");
        }
        
        return $response->withStatus(302)->withHeader('Location', '/clientes');
    }

    public static function excluir(Request $request, Response $response) {
        $id = $request->getAttribute('id');
        self::service()->excluirPorId($id);
        
        return $response->withStatus(302)->withHeader('Location', '/clientes');
    }
}