<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->setBasePath("/api-raca-dog");

require '../app/routes/api.php';

//Desativar erros em produção
//$app->addErrorMiddleware(false, true, true);

try {
    $app->run();
} catch (Exception $e) {
    die(json_encode(
        array(
            "status" => "failed",
            "message" => "Esta ação não é permitida!"
        )
    ));
}
