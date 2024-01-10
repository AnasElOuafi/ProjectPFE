<?php
$title='Services';
$css='';
require_once 'layouts/_head.php';
?>


<body>
<?php
require_once 'layouts/_nav.php';
?>


<div class="container">
        <main>
            <!-- Section welcome & add Start -->
            <div class="px-4 py-5 my-5 text-center">
                <!-- Welcome Start -->
                <div>
                    <h1 class="display-5 fw-bold text-body-emphasis">
                        <?= $IndependenceController->translate("Nos services de sécurité", $lang); ?>
                    </h1>
                    <p class="lead mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam officiis quas
                        deserunt. Tempora deleniti officia neque quod alias impedit corporis sunt sequi laborum ab ,
                        recusandae minima perspiciatis voluptatibus fugit! Eligendi!</p>
                </div>
                <!-- Add operation Start -->
                <div>
                    <?php
                    // Messages
                    $success = '<div class="alert alert-success" role="alert">' . $IndependenceController->translate("Opération terminée avec", $lang) . ' <strong>' . $IndependenceController->translate("succès", $lang) . '</strong>.</div>';
                    $danger = '<div class="alert alert-danger" role="alert"><strong>' . $IndependenceController->translate("Erreur", $lang) . '</strong> ' . $IndependenceController->translate("lors de la terminaison de cette opération.", $lang) . '</div>';
                    // Add php code
                    if (isset($_POST['create'])) {
                        echo ($CompteController->create($_POST['icon'], $_POST['name'], $_POST['description'])) ? $success : $danger;
                    }
                    ?>
                    <!-- Add operation Form Start -->
                    <h3 class="display-5 fw-bold text-body-emphasis">
                        <?= $IndependenceController->translate("Ajouter un service", $lang); ?>
                    </h3>
                    <div class="col-lg-6 mx-auto">
                        <form class="needs-validation" novalidate="" action="" method="POST">
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <label for="produit" class="form-label">
                                        <?= $IndependenceController->translate("produit", $lang); ?>
                                    </label>
                                    <input type="text" class="form-control" id="icon" name="icon"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        <?= $IndependenceController->translate("Champ obligatoire", $lang); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="categorie" class="form-label">
                                        <?= $IndependenceController->translate("categorie", $lang); ?>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        <?= $IndependenceController->translate("Champ obligatoire", $lang); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="description" class="form-label">
                                        <?= $IndependenceController->translate("description", $lang); ?>
                                    </label>
                                    <input type="text" minlength="8" class="form-control" id="description" name="description"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        <?= $IndependenceController->translate("Champ obligatoire", $lang); ?>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center py-5">
                                    <button class="btn btn-outline-success d-inline-flex align-items-center"
                                        type="submit" name="create">
                                        <?= $IndependenceController->translate("Enregistre un nouveau produit", $lang); ?>
                                    </button>
                                    <button class="btn btn-outline-danger d-inline-flex align-items-center" type="reset"
                                        name="annuler">
                                        <?= $IndependenceController->translate("Remize a zero", $lang); ?>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>




</body>


<?php
$js ='';
require_once 'layouts/_footer.php' ;
?>