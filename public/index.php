<?php
session_cache_limiter(false);
session_start();


require("settings.php");
require("routes.php");

require VENDOR_PATH;


$autoloadManager = new autoloadManager(null, autoloadManager::SCAN_ONCE);
$autoloadManager->addFolder(CONTROLLER_PATH);
$autoloadManager->addFolder(MODEL_PATH);
$autoloadManager->register();


if($debug){
    header('Access-Control-Allow-Origin: *');
}

$router = new Router();


$router->setBaseClass($baseClass);

$router->setBasePath($basePath);

$router->addRoutes($routes);

$router->set404Handler($erroHandler);

$router->run();

