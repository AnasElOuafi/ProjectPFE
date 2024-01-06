<?php
require_once 'config.php' ;
require_once 'controllers/blogController.php' ;
require_once 'controllers/compteController.php' ;
require_once 'controllers/msgController.php' ;
require_once 'controllers/packController.php' ;
require_once 'controllers/serviceController.php' ;
require_once 'controllers/temoiController.php' ;

$DatabaseController = new DatabaseController();
$BlogController = new BlogController($DatabaseController->getConnectionDB());
$CompteController = new CompteController($DatabaseController->getConnectionDB());
$MessageController = new MessageController($DatabaseController->getConnectionDB());
$PackController = new PackController($DatabaseController->getConnectionDB());
$ServiceController = new ServiceController($DatabaseController->getConnectionDB());
$TemoiController = new TemoiController($DatabaseController->getConnectionDB());

?>