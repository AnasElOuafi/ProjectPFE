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
                    Total services
                    <span><a href="service"><?= $ServiceController->count() ?></a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-pending">
                    Pending blog
                    <span><a href="#"><a href="blog"><?= $BlogController->count() ?></a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-items">
                    Total Msg
                    <span><a href="#"><a href="boit-Mail"><?= $MessageController->count() ?></a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-comments">
                    Total Packs
                    <span><a href="#"><a href="packs"><?= $PackController->count() ?></a></span>
                </div>
            </div>
        </div>
    </div>

</body>


<?php
$js = '';
require_once 'layouts/_footer.php';
?>