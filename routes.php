<?php

use namePlayer\TextyShare\Router;
$router = new Router();

$requestedUrl = $router->readAndOutputRequestedUrl();

$router->route('/', function() use ($router, $templateEngine, $htmlPurifier) {

    require_once ACTION_DIR.'/home.php';

}, 'POST|GET');

$router->route('/read/([\w-]+)', function($requestedContent) use ($router, $templateEngine, $htmlPurifier) {

    require_once ACTION_DIR.'/readPost.php';

}, 'GET');

echo $router->route($router->readAndOutputRequestedUrl());