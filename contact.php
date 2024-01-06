    <?php
        $title = 'Contact';
        require_once 'layouts/_head.php';
        require_once 'layouts/_nav.php' ;
        require_once 'includes/hero.php' ;
    ?>

   

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contactez-nous</h5>
                <h1 class="display-5 mb-0">N'hesitez pas a nous contacter</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-6">
                                    <input type="text" class="form-control border-0 px-4" placeholder="Votre Nom" style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input type="email" class="form-control border-0 px-4" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 px-4" placeholder="Objet" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 px-4 py-3" rows="8" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer un message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded p-5">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-1">Notre bureau</h5>
                                <span>Av.la perle du sahel GP1
                                    Croisement khézama - Sousse
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-1">Contactez-nous par email</h5>
                                <span>belkhiria.amor@planet.tn</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-1">Appelez-nous</h5>
                                <span>+216 73 244 582</span>
                            </div>
                        </div>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.169972213821!2d10.603068075015079!3d35.844835520970754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd8a641c8505f3%3A0x5b4ffa590d575e89!2sRue%20Imam%20Boukhari%2C%20Sousse!5e0!3m2!1sfr!2stn!4v1688378960278!5m2!1sfr!2stn"
                             width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php require_once 'layouts/_footer.php' ; ?>