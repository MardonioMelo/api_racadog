<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Classe principal da API
 */
class Api
{
    private $data;
    private $response;
    private $request;
    private $arguments;

    
    public function home($request, $response)
    {
        $payload = "API para informações de raças de cachorro.";
        $response->getBody()->write($payload);
        return $response;
    }

    public function raca(Request $request, Response $response, array $args)
    {

        //Solicitar credenciais - insira dentro de uma rota
        //$response = $response->withHeader('Access-Control-Allow-Credentials', 'true');

        $arr = [
            'nome' => "mundo",
            "desc" => "",
            "img" => "",
            "name" => $args['name']
        ];

        $payload = json_encode($arr);
        $response->getBody()->write($payload);
        return  $response->withHeader('Content-Type', 'application/json');     
    }


    public function listAll(Request $request, Response $response)
    {

        $arr = [
            "teste" =>  "todos"
        ];

        $payload = json_encode($arr);
        $response->getBody()->write($payload);
        return  $response->withHeader('Content-Type', 'application/json');
    }


    public function search(Request $request, Response $response, array $args)
    {

        $arr = [
            "teste" =>  $args['text']
        ];

        $payload = json_encode($arr);
        $response->getBody()->write($payload);
        return  $response->withHeader('Content-Type', 'application/json');
    }
}
