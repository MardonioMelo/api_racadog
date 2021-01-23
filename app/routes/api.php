<?php

use App\Controllers\Api;

$app->get('/', Api::class .":index");
$app->get('/list/{id}', Api::class .":list");
$app->get('/search', Api::class .":search");
