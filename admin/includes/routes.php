<?php
require_once 'config.php' ;
$DatabaseController = new DatabaseController();
$db = $DatabaseController->getConnectionDB() ;

require_once 'controllers/msgController.php' ;
$MessageController = new MessageController($db);

require_once 'controllers/blogController.php' ;
$BlogController = new BlogController($db);

require_once 'controllers/CommentController.php' ;
$CommentController = new CommentController($db);

require_once 'controllers/temoiController.php' ;
$TemoiController = new TemoiController($db);

require_once 'controllers/compteController.php' ;
$CompteController = new CompteController($db);

require_once 'controllers/packController.php' ;
$PackController = new PackController($db);

require_once 'controllers/serviceController.php' ;
$ServiceController = new ServiceController($db);
