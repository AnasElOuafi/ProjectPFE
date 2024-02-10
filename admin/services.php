<?php
$title = 'Gestion des services';
$css = '';
require_once 'layouts/_head.php';
?>


<body class="container">
    <?php
    require_once 'layouts/_nav.php';
    ?>

    <h3><?= $title; ?> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajouter"><i class="fa fa-plus"></i> Ajouter</button> <a href="service" class="btn btn-outline-primary"><i class="fa fa-refresh"></i> Acctualiser</a></h3>
    <?php
    // Messages
    $success = '<div class="alert alert-success" role="alert">Opération terminée avec <strong>succès</strong></div>';
    $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération</div>';
    // Ajpute php code
    if (isset($_POST['ajouter'])) {
        echo ($ServiceController->create($_POST['icon'], $_POST['titre'], $_POST['description'])) ? $success : $danger;
    }
    // Update php code
    if (isset($_POST['update'])) {
        $id = $_POST['update'];
        echo ($ServiceController->update($_POST['icon'], $_POST['titre'], $_POST['description'], $id)) ? $success : $danger;
    }
    // Delete php code
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        echo ($ServiceController->delete($id)) ? $success : $danger;
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $AllServices = $ServiceController->read();
            if (!empty($AllServices)) {
                foreach ($AllServices as $i => $Service) :
            ?>

                    <tr>
                        <td><?= $Service['id']; ?></td>
                        <td><?= $Service['icon']; ?></td>
                        <td><?= $Service['name']; ?></td>
                        <td><?= $Service['description']; ?></td>
                        <td>
                            <form method="post">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update<?= $Service["id"]; ?>"><i class="fa fa-pen"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $Service["id"]; ?>"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

            <?php endforeach;
            } else {
                echo '<tr><td colspan="6" class="text-center align-middle">No data to show</td></tr>';
            } ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </tfoot>
    </table>
        <!-- Model ajouter -->
        <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter service</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="mb-3">
                                    <label class="col-form-label">Icon(*) :</label>
                                    <input type="text" class="form-control" name="icon" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Nom(*) :</label>
                                    <input type="text" class="form-control" name="titre" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Description(*) :</label>
                                    <textarea type="text" class="form-control" name="description" required></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
                            <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    $AllServices = $ServiceController->read();
    foreach ($AllServices as $i => $Service) :
    ?>
        <!-- Model Modifier -->
        <div class="modal fade" id="update<?= $Service["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier service</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="mb-3">
                                    <label class="col-form-label">Icon(*) :</label>
                                    <input type="text" class="form-control" name="icon" value="<?= $Service["icon"]; ?>" placeholder="<?= $Service["icon"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Nom(*) :</label>
                                    <input type="text" class="form-control" name="titre" value="<?= $Service["name"]; ?>" placeholder="<?= $Service["name"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Description(*) :</label>
                                    <textarea type="text" class="form-control" name="description" value="<?= $Service["description"]; ?>" placeholder="<?= $Service["description"]; ?>" required><?= $Service["description"]; ?></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="update" value="<?= $Service["id"]; ?>" class="btn btn-outline-success">Modifier</button>
                            <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Model Supprimer -->
        <div class="modal fade" id="delete<?= $Service["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer service</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <p class="mb-3">Voulez vous supprimer ce message ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="delete" value="<?= $Service["id"]; ?>" class="btn btn-outline-success">Oui</button>
                            <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">Non</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>

<?php
$js = '';
require_once 'layouts/_footer.php';
?>