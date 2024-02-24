<!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h5>
                <h1 class="display-5 mb-0">What People Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
            <?php
$AllComment = $CommentController->read();
foreach ($AllComment as $i => $Comment) :
?>
    <div class="text-center pb-4">
        <img class="img-fluid mx-auto rounded-circle" src="admin/assets/img/<?= $Comment["avatar"]; ?>" style="width: 100px; height: 100px;">
        <div class="testimonial-text bg-light rounded p-4 mt-n5">
            <p class="mt-5"> <?= $Comment["review"]; ?> </p>
            <h4 class="text-truncate"> <?= $Comment['name']; ?> </h4>
            <i><?= $Comment['date']; ?></i>
        </div>
    </div>
<?php endforeach ?>

            </div>
        </div>
    </div>
    <!-- Testimonial End -->