    <?php
        $title = 'Blog';
        require_once 'layouts/_head.php';
        require_once 'layouts/_nav.php' ;
        require_once 'includes/hero.php' ;
    ?>

    <!-- Blog Start -->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-7">
                    <?php
                    $Allblogs = $BlogController->read();
                    foreach ($Allblogs as $i => $blog) :
                    ?>
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                            <img class="img-fluid w-80 rounded-top" src="admin/assets/img/<?= $blog['avatar']; ?>" alt="">
                            </div>
                            <div class="bg-primary rounded-bottom p-3">
                               
                                <a class="h2 m-0 text-white" href=""><?= $blog["description"]; ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <?php
                    $Allblogs = $BlogController->read();
                    foreach ($Allblogs as $i => $blog) :
                    ?>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i> <?= $blog["equipements"] ?> </a>
                        <!-- <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Système d'alarme</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Protection contre la malveillance - Contrôle d'accès</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Enregistreurs télésurveillance</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Portes automatique</a> -->
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- Category End -->


                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Comment Form Start -->
<div class="bg-light rounded p-5">
    <?php
    // Messages
    $success = '<div class="alert alert-success" role="alert">Opération terminée avec <strong>succès</strong></div>';
    $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération</div>';
    // Update php code
    if (isset($_POST['send'])) {
        echo ($TemoiController->sendCmt($_POST['username'], $_POST['email'], $_POST['comment'])) ? $success : $danger;
    }
    ?>
    <h2 class="mb-4">Laissez votre commentaire</h2>
    <form method="post" action="">
        <div class="row g-3">
            <div class="col-12 col-sm-6">
                <input type="text" name="username" class="form-control bg-white border-0" placeholder="Votre Nom et Prenom" style="height: 55px;">
            </div>
            <div class="col-12 col-sm-6">
                <input type="email" name="email" class="form-control bg-white border-0" placeholder="Votre E-mail" style="height: 55px;">
            </div>

            <div class="col-12">
                <textarea class="form-control bg-white border-0" name="comment" rows="5" placeholder="Commentaire"></textarea>
            </div>
            <div class="col-12">
                <button name="send" class="btn btn-primary w-100 py-3" type="submit">Laissez votre commentaire</button>
            </div>
        </div>
    </form>
</div>
<!-- Comment Form End -->



            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <?php require_once 'layouts/_footer.php' ; ?>