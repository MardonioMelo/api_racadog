<?php

use App\Controllers\Api;
use Slim\Exception\HttpNotFoundException;

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

//Configuração do CORS
$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

//Rotas GET
$app->get('/', Api::class . ":home");
$app->get(APP_CONFIG['api_v'] . '/dog', Api::class . ":listBreed"); //?limit=10&offset=0
$app->get(APP_CONFIG['api_v']. '/dog/{id}', Api::class . ":readBreed"); 

/**
 * Catch-all route to serve a 404 Not Found page if none of the routes match
 * NOTE: make sure this route is defined last
 */
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    throw new HttpNotFoundException($request);
});


//Resposta padrão em caso de erro
try {
    $app->run();
} catch (Exception $e) {

    header('Content-Type: application/json');

    $arr = [
        "success" => false,
        "error" => "Esta ação não é permitida!"
    ];

    die(json_encode($arr));
}
