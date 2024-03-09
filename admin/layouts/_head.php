<?php
    require_once 'includes/routes.php' ;
?>
<head>
    <meta charset="utf-8">
    <meta name="author" content="El Ouafi Anas">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
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