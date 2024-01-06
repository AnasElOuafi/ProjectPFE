<?php
$title='Connexion';
$css='
<!-- Custom styles for this template -->
<link href="assets/css/sign-in.css" rel="stylesheet">
';
require_once 'layouts/_head.php';
?>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
    <form action="" method="post">
        <?php
            // Messages
            $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> inputs non valide</div>';
            // Connexion php code
            if (isset($_POST['connect'])) {
                $user = $CompteController->getConnect($_POST['email'], $_POST['password']) ;
                if (isset($user)){
                    $_SESSION['id'] = $user['id'];
                    header("Location: dashboard.php");
                }
                else{
                    echo $danger;
                }
            }
        ?>
        <h1 class="h3 mb-3 fw-normal">Sign in</h1>
        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
        <button class="btn btn-primary w-100 py-2" name="connect" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">© 2023</p>
    </form>
    </main>
</div>

<?php
$js ='';
require_once 'layouts/_footer.php' ;
?>