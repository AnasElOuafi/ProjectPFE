<?php
        $title = 'technologie';
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
                    <div class="mb-5">
                    <?php
                    // Fetch comments from the database
                    $host = "localhost";
                    $usernameDB = "root";
                    $passwordDB = "";
                    $database = "securisat";

                    $conn = new mysqli($host, $usernameDB, $passwordDB, $database);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT username, comment, comment FROM comment ORDER BY comment DESC";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Error executing query: " . $conn->error);
                    }

                    while ($comment = $result->fetch_assoc()) :
                    ?>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href=""><?= $comment['username'] ?></a> <small><i><?= $comment['comment'] ?></i></small></h6>
                                <p><?= $comment['comment'] ?></p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <?php
                    // Close the database connection
                    $conn->close();
                    ?>
                </div>

                                </div>
                                <!-- Comment List End -->



                <?php
                function userExists($conn, $username, $email) {
                    $username = $conn->real_escape_string($username);
                    $email = $conn->real_escape_string($email);

                    $query = "SELECT * FROM comment WHERE username='$username' OR email='$email'";
                    $result = $conn->query($query);

                    return $result->num_rows > 0;
                }

                function addCommentForUser($username, $email, $password, $commentText) {
                    $host = "localhost";
                    $usernameDB = "root";
                    $passwordDB = "";
                    $database = "securisat";

                    $conn = new mysqli($host, $usernameDB, $passwordDB, $database);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $username = $conn->real_escape_string($username);
                    $email = $conn->real_escape_string($email);
                    $password = $conn->real_escape_string($password);
                    $commentText = $conn->real_escape_string($commentText);

                    // Check if the user already exists
                    if (!userExists($conn, $username, $email)) {
                        // Insert the comment into the "user" table
                        $sql = "INSERT INTO comment (username, email, password, comment) VALUES ('$username', '$email', '$password', '$commentText')";

                        if ($conn->query($sql) === TRUE) {
                            echo "Comment added successfully.";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    } else {
                        echo "User already exists. Comment not added.";
                    }

                    $conn->close();
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $commentText = $_POST["comment"];

                    addCommentForUser($username, $email, $password, $commentText);
                }
                ?>


                <!-- HTML form -->
                <div class="bg-light rounded p-5">
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
                                <input type="password" name="password" class="form-control bg-white border-0" placeholder="Mot De Passe" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea name="comment" class="form-control bg-white border-0" rows="5" placeholder="Commentaire"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">Laissez votre commentaire</button>
                            </div>
                        </div>
                    </form>
                </div>




















































                <!-- Comment Form Start -->
                <!-- <div class="bg-light rounded p-5">
                    <h2 class="mb-4">Laissez votre commentaire</h2>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Votre Nom et Prenom" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Votre E-mail" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control bg-white border-0" placeholder="Mot De Passe" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Commentaire"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Laissez votre commentaire</button>
                            </div>
                        </div>
                    </form>
                </div> -->
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Recherche">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

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

                <!-- Recent Post Start 
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

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


    <!-- Footer Start -->
    <?php require_once 'layouts/_footer.php' ; ?>
    <!-- Footer End -->


</html>