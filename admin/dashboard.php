<?php
$title = 'Accueil';
$css = '';
require_once 'layouts/_head.php';
?>


<body>
    <?php
    require_once 'layouts/_nav.php';
    ?>

    <div class="container home-stats text-center">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="stat st-members">
                Ensemble des services
                    <span><a href="service"><?= $ServiceController->count() ?></a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-pending">
                Blog Actualise
               <span><a href="#"><a href="blog"><?= $BlogController->count() ?></a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-items">
                Total Commentaires
                    <span><a href="#"><a href="review"><?= $TemoiController->count() ?></a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-comments">
                Boîte de messagerie
                    <span><a href="#"><a href="boit-Mail"><?= $MessageController->count() ?></a></span>
                </div>
            </div>
        </div>
    </div>

</body>


<?php
$js = '';
require_once 'layouts/_footer.php';
?>