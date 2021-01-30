<?php

use App\Controllers\Api;


//Roras GET
$app->get('/', Api::class . ":home");
$app->get(APP_CONFIG['api_v'] . '/dog', Api::class . ":raca"); //?limit=500&offset=0


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
