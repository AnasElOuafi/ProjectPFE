<?php
require_once 'admin/includes/config.php' ;
$DatabaseController = new DatabaseController();
$db = $DatabaseController->getConnectionDB() ;

require_once 'admin/controllers/msgController.php' ;
$MessageController = new MessageController($db);

require_once 'admin/controllers/blogController.php' ;
$BlogController = new BlogController($db);

require_once 'admin/controllers/temoiController.php' ;
$TemoiController = new TemoiController($db);

require_once 'admin/controllers/compteController.php' ;
$CompteController = new CompteController($db);

require_once 'admin/controllers/packController.php' ;
$PackController = new PackController($db);

require_once 'admin/controllers/serviceController.php' ;
$ServiceController = new ServiceController($db);

require_once 'admin/controllers/CommentController.php' ;
$CommentController = new CommentController($db);
