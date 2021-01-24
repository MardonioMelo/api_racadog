<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

# Iniciar App
$app = AppFactory::create();
# $app->setBasePath("/api-raca-dog");

# Desativar erros em produção
#$app->addErrorMiddleware(false, true, true);

# Rotas do App
require '../app/routes/api.php';
