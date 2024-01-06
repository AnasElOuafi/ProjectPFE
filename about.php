    <?php
        $title = 'A propos';
        require_once 'layouts/_head.php';
        require_once 'layouts/_nav.php' ;
        require_once 'includes/hero.php' ;
    ?>

     <!-- About Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/about-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">À PROPOS DE NOUS</h5>
                        <h1 class="display-5 mb-0">Nous offrons des systèmes et services de vidéosurveillance de haute qualité</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Nous fournissons des systèmes de vidéosurveillance de qualité supérieure et des services professionnels pour assurer la sécurité de votre environnement.</h4>
                    <p class="mb-4">Nous sommes fiers de proposer des systèmes de vidéosurveillance de qualité supérieure, comprenant des caméras haute définition, des enregistreurs fiables et des fonctionnalités avancées telles que la détection de mouvement et la vision nocturne. Nos services comprennent l'installation professionnelle, la configuration personnalisée, la formation à l'utilisation du système et un support technique réactif pour vous assurer une expérience sans souci. Avec notre expertise de plus de 15 ans dans le domaine de la vidéosurveillance, vous pouvez compter sur nous pour vous fournir des solutions de sécurité fiables et efficaces.</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3" style="height: 200px;">
                                <i class="fa fa-star fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">25 ans d'expérience</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3" style="height: 200px;">
                                <i class="fa fa-award fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Récompensé à plusieurs reprises</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <?php
        require_once 'includes/temoi.php' ;
        require_once 'layouts/_footer.php' ;
    ?>