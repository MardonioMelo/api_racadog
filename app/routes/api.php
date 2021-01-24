<?php

use App\Controllers\Api;


//Roras GET
$app->get('/', Api::class . ":home");
$app->get(CONFIG_DEFAULT['api_v'] . '/raca/{name}', Api::class . ":raca");
$app->get(CONFIG_DEFAULT['api_v'] . '/list/all', Api::class . ":listAll");
$app->get(CONFIG_DEFAULT['api_v'] . '/search/{text}', Api::class . ":search");


//Resposta padrão em caso de erro
try {
    $app->run();
} catch (Exception $e) {

    header('Content-Type: application/json');

    $arr = [
        "status" => "failed",
        "message" => "Esta ação não é permitida!"
    ];

    die(json_encode($arr));
}
