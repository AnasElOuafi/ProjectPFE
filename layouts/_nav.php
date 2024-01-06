<?php  
$filename = basename($_SERVER['PHP_SELF']);
?> 
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="accueil" class="navbar-brand ms-lg-5">
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
                <img src="img/logo.png" height="65" alt="#">
            </div>
       
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="accueil" class="nav-item nav-link <?php if ($filename =='index.php') {echo 'active' ; } ?>">Accueil</a>
                <a href="apropos" class="nav-item nav-link <?php if ($filename =='about.php') {echo 'active' ; } ?>">A Propos</a>
                <a href="services" class="nav-item nav-link <?php if ($filename =='services.php') {echo 'active' ; } ?>">Services</a>
                <a href="blog" class="nav-item nav-link <?php if ($filename =='blog.php') {echo 'active' ; } ?>">Blog</a>
                <a href="packs" class="nav-item nav-link <?php if ($filename =='price.php') {echo 'active' ; } ?>">Packs</a>
                <a href="contact" class="nav-item nav-link <?php if ($filename =='contact.php') {echo 'active' ; } ?>">Contact</a>
                <a href="tel:+21673244582" class="nav-item nav-link nav-contact bg-secondary text-white px-5 ms-lg-5"><i class="bi bi-telephone-outbound me-2"></i>+216 73 244 582</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->