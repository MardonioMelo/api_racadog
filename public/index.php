<?php

require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


$app = AppFactory::create();
$app->setBasePath("/api-raca-dog");

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Olá Mundo!");
    return $response;
});

$app->get('/lista-racas', function (Request $request, Response $response, array $args) {
    $payload = json_encode(['ola' => 'mundo'], JSON_PRETTY_PRINT);

    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json');
});



//Desativar erros em produção
//$app->addErrorMiddleware(false, true, true);

try {
    $app->run();
} catch (Exception $e) {
    die(json_encode(array("status" => "failed", "message" => "Esta ação não é permitida!")));
}
