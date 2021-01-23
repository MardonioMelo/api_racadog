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

    public function index($request, $response)
    {
        $arr = [
            'ola' => "mundo"
        ];

       $payload = json_encode($arr);

        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function list(Request $request, Response $response, array $args)
    {    
        
        $arr = [
            "teste" =>  $args['id']
        ];    

       $payload = json_encode($arr);

        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }
}
