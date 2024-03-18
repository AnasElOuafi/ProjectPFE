<?php  
$filename = basename($_SERVER['PHP_SELF']);
?> 

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="accueil" class="navbar-brand ms-lg-5">
            <img src="img/logo.png" height="65" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto py-0">
                <li class="nav-item <?php echo ($filename == 'index.php') ? 'active' : ''; ?>">
                    <a href="accueil" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item <?php echo ($filename == 'about.php') ? 'active' : ''; ?>">
                    <a href="apropos" class="nav-link">A Propos</a>
                </li>
                <li class="nav-item <?php echo ($filename == 'services.php') ? 'active' : ''; ?>">
                    <a href="services" class="nav-link">Services</a>
                </li>
                <li class="nav-item <?php echo ($filename == 'blog.php') ? 'active' : ''; ?>">
                    <a href="blog" class="nav-link">Blog</a>
                </li>
                <li class="nav-item <?php echo ($filename == 'price.php') ? 'active' : ''; ?>">
                    <a href="packs" class="nav-link">Packs</a>
                </li>
                <li class="nav-item <?php echo ($filename == 'contact.php') ? 'active' : ''; ?>">
                    <a href="contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item nav-contact bg-secondary text-white px-5 ms-lg-5">
                    <a href="tel:+21673244582" class="nav-link"><i class="bi bi-telephone-outbound me-2"></i>+216 73 244 582</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
