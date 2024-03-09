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
                <div class="row g-5">
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

                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg m-0">
                            <li class="page-item active"><a class="page-link" href="logiciel_de_controle.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="logiciel_de_controle2.html">2</a></li>
                            <li class="page-item">
                              <a class="page-link rounded-0" href="logiciel_de_controle2.html" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
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

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Équipements Essentiels pour une Sécurité Avancée</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-light m-1">Caméras de surveillance</a>
                        <a href="" class="btn btn-light m-1">Capteurs de mouvement</a>
                        <a href="" class="btn btn-light m-1">Panneaux de contrôle </a>
                        <a href="" class="btn btn-light m-1">Alarmes</a>
                        <a href="" class="btn btn-light m-1">Systèmes de détection d'intrusion</a>
                        <a href="" class="btn btn-light m-1">Enregistreurs vidéo (DVR ou NVR)</a>
                        <a href="" class="btn btn-light m-1">Moniteurs</a>
                        <a href="" class="btn btn-light m-1">Systèmes d'accès et de contrôle</a>
                        <a href="" class="btn btn-light m-1">Technologie de communication</a>
                        <a href="" class="btn btn-light m-1">Stockage en nuage</a>
                        <a href="" class="btn btn-light m-1">Logiciels de gestion</a>
                        <a href="" class="btn btn-light m-1">Alimentation de secours</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start 
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    <div class="bg-light text-center" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <?php require_once 'layouts/_footer.php' ; ?>