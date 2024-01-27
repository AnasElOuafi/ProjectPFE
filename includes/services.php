    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h5>
                <h1 class="display-5 mb-0">Nos excellents services de sécurité</h1>
            </div>
            <div class="row g-5"><?php
            $AllServices = $ServiceController->read();
            if (!empty($AllServices)) {
                foreach ($AllServices as $i => $Service) :
            ?>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="flaticon-<?= $Service['icon'] ; ?> d-block display-1 fw-normal text-secondary mb-3"></i>
                            <h3 class="mb-3"><?= $Service['name'] ; ?></h3>
                            <p><?= $Service['description'] ; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;
            } else {
                ?>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <p>No data to show up here</p>
                    </div>
                </div>
            </div>
                <?php
            } ?>
            </div>
        </div>
    </div>
    <!-- Services End -->