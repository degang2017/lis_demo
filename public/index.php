<?php
LisApplication::setAppDirectory(dirname(__FILE__).'/../application/');
$environ = LisApplication::getEnviron();

LisException::setExceptionHandler(array("ErrorController", "handleAction")); 

$app = new LisApplication(); 

$config = include(dirname(__FILE__).'/../config/application.php');
LisConfig::set("app", $config[$environ]);  

LisRoute::get('/', 'HomeController:indexAction'); 

LisRoute::group('/user/{id_3-3:[0-9]+}/sex/{sex:[0-9]+}', function(){  
    LisRoute::get('/name/{name:[a-zA-Z_-]+}/', 'HomeController:userInfoAction'); 
})->middleware('Middle:test'); 

$app->run(); 
