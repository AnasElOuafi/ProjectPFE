<?php
        $title = 'Technologies';
        require_once 'layouts/_head.php';
        require_once 'layouts/_nav.php' ;
        require_once 'includes/hero.php' ;
    ?>


    <!-- Blog Start -->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <video autoplay loop muted plays-inline class="w-100">
                        <source src="media/camera5.mp4">
                    </video>
                    <h1 class="mb-4">Une Évolution Vers une Sécurité Intelligente</h1>
                    <p>
                        Les systèmes d'alarme et de vidéosurveillance ont connu d'importantes évolutions technologiques ces dernières années.
                         Voici quelques-unes des principales technologies utilisées dans ces domaines :</p>

                    <p>Détection de mouvement par capteurs PIR (Infrarouge Passif) :
                        Les capteurs PIR sont largement utilisés dans les systèmes d'alarme et de vidéosurveillance pour détecter les mouvements infrarouges émis par les êtres vivants. 
                        Ils sont efficaces pour surveiller les zones intérieures et extérieures et déclencher des alertes en cas d'activité suspecte. 
                        Ces capteurs sont généralement économiques, fiables et peuvent être intégrés à différents dispositifs de sécurité.</p>

                    <p>Caméras de surveillance IP :
                        Les caméras IP offrent des capacités de vidéosurveillance avancées en permettant la transmission des flux vidéo sur des réseaux IP (Internet Protocol). 
                        Elles sont souvent équipées de fonctions de zoom, de panoramique et d'inclinaison à distance, et peuvent capturer des images haute résolution. 
                        Les caméras IP peuvent être intégrées dans des systèmes de vidéosurveillance plus vastes et être consultées à distance via des applications mobiles ou des plateformes web.</p>

                    <p>Vidéosurveillance basée sur l'intelligence artificielle :
                        L'intégration de l'intelligence artificielle dans les systèmes de vidéosurveillance permet une analyse avancée des images en temps réel. 
                        Ces systèmes utilisent des algorithmes d'apprentissage automatique pour détecter automatiquement des objets spécifiques tels que des personnes, des véhicules ou des animaux, ainsi que des comportements suspects. 
                        Cette technologie améliore considérablement la précision des alertes et réduit les fausses alarmes.</p>

                    <p>Systèmes d'alarme sans fil :
                        Les systèmes d'alarme sans fil sont de plus en plus populaires en raison de leur facilité d'installation et de leur flexibilité. 
                        Ils utilisent des signaux radio pour communiquer entre les capteurs et le panneau de contrôle. 
                        Cette technologie permet une installation sans tracas, sans devoir tirer des câbles à travers toute la maison. 
                        De plus, les systèmes sans fil peuvent être étendus facilement pour couvrir de plus grandes surfaces.</p>

                    <p>Systèmes de contrôle d'accès :
                        Les systèmes de contrôle d'accès font partie intégrante de la sécurité globale d'un bâtiment ou d'une zone restreinte. 
                        Ils utilisent diverses technologies telles que les cartes d'accès, les codes PIN, les lecteurs d'empreintes digitales ou la reconnaissance faciale pour autoriser ou refuser l'accès à des personnes spécifiques. 
                        Ces systèmes sont souvent intégrés à des systèmes de vidéosurveillance pour enregistrer les mouvements des personnes autorisées.</p>

                    <p>Solutions de stockage en nuage :
                        Les systèmes de vidéosurveillance modernes offrent souvent la possibilité de stocker les enregistrements vidéo dans le cloud. 
                        Cela permet un accès sécurisé aux enregistrements depuis n'importe où via une connexion Internet, éliminant ainsi le besoin de serveurs de stockage locaux. 
                        Le stockage en nuage offre une redondance accrue et protège les enregistrements contre les dommages matériels ou le vol.</p>

                    <p>Ces différentes technologies de système d'alarme et de vidéosurveillance sont souvent combinées pour créer des solutions de sécurité globales et sophistiquées, adaptées aux besoins spécifiques des utilisateurs et des lieux à protéger.</p>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Commentaires</h2>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex ms-5 mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

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
                    <form>
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

            <!-- Sidebar Start -->
            <div class="col-lg-4">

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Caméras de surveillance</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Système d'alarme</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Protection contre la malveillance - Contrôle d'accès</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Enregistreurs télésurveillance</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Portes automatique</a>
                    </div>
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
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->




<?php require_once 'layouts/_footer.php' ; ?>