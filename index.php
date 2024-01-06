    <?php
        $title = 'Accueil';
        require_once 'layouts/_head.php';
        require_once 'layouts/_nav.php' ;
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video autoplay loop muted plays-inline class="w-100">
                        <source src="media/camera.mp4">
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Les meilleurs services de sécurité</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Offrez à votre famille un foyer sûr et sécurisé</h1>
                            <a href="devis.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtenez un devis</a>
                            <a href="contact.html" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <video autoplay loop muted plays-inline class="w-100">
                        <source src="media/camera1.mp4">
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Les meilleurs services de sécurité</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Offrez à votre famille un foyer sûr et sécurisé</h1>
                            <a href="devis.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtenez un devis</a>
                            <a href="contact.html" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <video autoplay loop muted plays-inline class="w-100">
                        <source src="media/camera3.mp4">
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Les meilleurs services de sécurité</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Offrez à votre famille un foyer sûr et sécurisé</h1>
                            <a href="detail.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtenez un devis</a>
                            <a href="contact.html" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

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
        require_once 'includes/services.php' ;
        require_once 'includes/pricing.php' ;
        require_once 'includes/offres.php' ;
        require_once 'includes/temoi.php' ;
    ?>

 <!-- Blog Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Article de Blog</h5>
                <h1 class="display-5 mb-0">Les articles les plus récents sur notre blog</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="bg-primary rounded-bottom p-5">
                            <div class="d-flex mb-3">
                                <span class="text-light text-uppercase">Technicien</span>
                                <span class="text-light px-2">|</span>
                                <span class="text-light text-uppercase">Alarme du Securité</span>
                            </div>
                            <a class="h5 m-0 text-white" href="">Nous proposons des systèmes d'alarme de sécurité pour protéger votre domicile ou votre entreprise. Nos alarmes de sécurité sont équipées de capteurs de mouvement, 
                                de détecteurs d'ouverture de porte et de fenêtre, de sirènes d'alerte et de fonctionnalités de surveillance à distance. Elles fournissent une protection efficace contre les intrusions et peuvent être intégrées à d'autres systèmes de sécurité tels que les caméras de surveillance pour une sécurité renforcée.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-2.jpg" alt="">
                        </div>
                        <div class="bg-primary rounded-bottom p-5">
                            <div class="d-flex mb-3">
                                <span class="text-light text-uppercase">Technicien</span>
                                <span class="text-light px-2">|</span>
                                <span class="text-light text-uppercase">Camera Surveillance</span>
                            </div>
                            <a class="h5 m-0 text-white" href="">Nous proposons des services de surveillance par caméra pour assurer la sécurité de votre environnement.
                                 Nos solutions de caméras de surveillance offrent une surveillance continue,
                                 des enregistrements vidéo de haute qualité et des fonctionnalités avancées pour protéger votre propriété.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <?php require_once 'layouts/_footer.php' ; ?>