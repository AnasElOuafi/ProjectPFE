<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="accueil" class="nav-link px-2 link-body-emphasis">Dashboard</a></li>
          <li><a href="infos" class="nav-link px-2 link-body-emphasis">Infos</a></li>
          <li><a href="service" class="nav-link px-2 link-body-emphasis">Services</a></li>
          <li><a href="blog" class="nav-link px-2 link-body-emphasis">Blog</a></li>
          <li><a href="packs" class="nav-link px-2 link-body-emphasis">Packs</a></li>
          <li><a href="review" class="nav-link px-2 link-body-emphasis">Review</a></li>
          <li><a href="commentaire" class="nav-link px-2 link-body-emphasis">Commentaires</a></li>
          <li><a href="boit-Mail" class="nav-link px-2 link-body-emphasis">Mails</a></li>
        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <strong><?= $User['name'] ; ?></strong> <img src="assets/img/<?= $User['image'] ; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" style="">
            <li><a class="dropdown-item" href="profile">Settings</a></li>
            <li><a class="dropdown-item" href="deconnexion">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>