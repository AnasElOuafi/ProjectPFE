    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Plan Tarifaire</h5>
                <h1 class="display-5 mb-0">Tarifs des Packs de Sécurité</h1>
            </div>
            <div class="row g-5">
            <?php
                            $Allpackss = $PackController->read();
                            foreach ($Allpackss as $i => $packs) :
                    ?>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                   
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white"><?= $packs["titre"]; ?> </h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">DT</small><?= $packs["prix"]; ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"><?= $packs["period"]; ?></small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2"><?= $packs["line1"]; ?></p>
                            <p class="border-bottom border-light mb-2 pb-2"><?= $packs["line2"]; ?></p>
                            <p class="border-bottom border-light mb-2 pb-2"><?= $packs["line3"]; ?></p>
                            <p class="border-bottom border-light mb-2 pb-2"><?= $packs["line4"]; ?></p>
                            <p class="border-bottom border-light mb-2 pb-2"><?= $packs["line5"]; ?></p>
                        </div>
                        
                        <a href="contact" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Contactez-nous maintenant</a>
                    </div>
                </div>
                <?php endforeach ?>
                <!-- <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative border border-secondary rounded">
                        <div class="bg-secondary text-center pt-5 pb-4">
                            <h3 class="text-white">Pack Premuim</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">HTML5 & CSS3</p>
                            <p class="border-bottom border-light mb-2 pb-2">Bootstrap v5</p>
                            <p class="border-bottom border-light mb-2 pb-2">Responsive Layout</p>
                            <p class="border-bottom border-light mb-2 pb-2">Browsers Compatibility</p>
                            <p class="mb-2 pb-2">Easy to Use</p>
                        </div>
                        <a href="" class="btn btn-secondary py-2 px-4 position-absolute top-100 start-50 translate-middle">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white">Pack Gold</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">HTML5 & CSS3</p>
                            <p class="border-bottom border-light mb-2 pb-2">Bootstrap v5</p>
                            <p class="border-bottom border-light mb-2 pb-2">Responsive Layout</p>
                            <p class="border-bottom border-light mb-2 pb-2">Browsers Compatibility</p>
                            <p class="mb-2 pb-2">Easy to Use</p>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Order Now</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Pricing Plan End -->