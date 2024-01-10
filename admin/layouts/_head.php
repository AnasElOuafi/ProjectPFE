<?php
    require_once 'includes/routes.php' ;
    
$lang = "";
// If $lang is empty so we start the traitment bellow
if (empty($lang)) {
    // Get the user's preferred language from their browser
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
?>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Anas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.118.2">
    <meta name="keywords" content="">
    <meta name="email" content="">
    <link rel="stylesheet" href="assets/css/css@3.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/customer.css" rel="stylesheet" />
    <link href="assets/css/headers.css" rel="stylesheet" />
    <title><?= $title ; ?></title>
<?php
    session_start();

    if (!isset($_SESSION['id']) && strpos($_SERVER['REQUEST_URI'], 'connexion') === false) {
        header("location:connexion");
        exit; // Ensure the script stops after the redirection
    }
    $User = null; // Initializing $User variable
    if (isset($_SESSION['id'])) {
        $User = $CompteController->getById($_SESSION['id']);
    }
    echo $css;
?>

</head>