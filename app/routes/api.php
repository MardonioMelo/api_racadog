<?php

use App\Controllers\Api;


//Rotas GET
$app->get('/', Api::class . ":home");
$app->get(APP_CONFIG['api_v'] . '/dog', Api::class . ":listBreed"); //?limit=10&offset=0
$app->get(APP_CONFIG['api_v']. '/dog/{id}', Api::class . ":readBreed"); 


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
