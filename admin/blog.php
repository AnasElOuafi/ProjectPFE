<?php
$title = 'Blog';
$css = '';
require_once 'layouts/_head.php';
?>


<body class="container">
    <?php
    require_once 'layouts/_nav.php';
    ?>

    <h3><?= $title; ?> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajouter"><i class="fa fa-plus"></i> Ajouter</button> <a href="blog" class="btn btn-outline-primary"><i class="fa fa-refresh"></i> Acctualiser</a></h3>
    <?php
    // Messages
    $success = '<div class="alert alert-success" role="alert">Opération terminée avec <strong>succès</strong></div>';
    $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération</div>';
    $date = date('Y-m-d H:i:s'); // Current date
    // Ajoute php code
    if (isset($_POST['ajouter'])) {
        echo ($BlogController->create($_POST['titre'], $_POST['equipements'], $_POST['description'], $date)) ? $success : $danger;
    }
    // Update php code
    if (isset($_POST['update'])) {
        $id = $_POST['update'];
        echo ($BlogController->update($_POST['titre'], $_POST['equipements'], $_POST['description'], $date, $id)) ? $success : $danger;
    }
    // Delete php code
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        echo ($BlogController->delete($id)) ? $success : $danger;
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Equipements</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Allblogs = $BlogController->read();
            if (!empty($Allblogs)) {
                foreach ($Allblogs as $i => $blog) :
            ?>

                    <tr>
                        <td><?= $blog['id']; ?></td>
                        <td><?= $blog['titre']; ?></td>
                        <!-- Check if "equipements" key exists before accessing it -->
                        <td><?= isset($blog['equipements']) ? $blog['equipements'] : ''; ?></td>
                        <td><?= $blog['description']; ?></td>
                        <!-- Check if "date" key exists before accessing it -->
                        <td><?= isset($blog['date']) ? $blog['date'] : ''; ?></td>
                        <td>
                            <form method="post">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update<?= $blog["id"]; ?>"><i class="fa fa-pen"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $blog["id"]; ?>"><i class="fa fa-trash"></i></button>
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
                <th scope="col">Titre</th>
                <th scope="col">Equipements</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter blog</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="mb-3">
                                <label class="col-form-label">Titre(*) :</label>
                                <input type="text" class="form-control" name="titre" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Equipements(*) :</label>
                                <input type="text" class="form-control" name="equipements" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Description(*) :</label>
                                <textarea type="text" class="form-control" name="description" required></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
                        <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    $Allblogs = $BlogController->read();
    foreach ($Allblogs as $i => $blog) :
    ?>
    <!-- Model Modifier -->
    <div class="modal fade" id="update<?= $blog["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier Blog</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="mb-3">
                                <label class="col-form-label">Titre(*) :</label>
                                <input type="text" class="form-control" name="titre" value="<?= $blog["titre"]; ?>" placeholder="<?= $blog["titre"]; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Equipements(*) :</label>
                                <input type="text" class="form-control" name="equipements" value="<?= $blog["equipements"]; ?>" placeholder="<?= $blog["equipements"]; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Description(*) :</label>
                                <textarea type="text" class="form-control" name="description" value="<?= $blog["description"]; ?>" placeholder="<?= $blog["description"]; ?>" required><?= $blog["description"]; ?></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update" value="<?= $blog["id"]; ?>" class="btn btn-outline-success">Modifier</button>
                        <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Model Supprimer -->
    <div class="modal fade" id="delete<?= $blog["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer Blog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <p class="mb-3">Voulez vous supprimer ce message ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="delete" value="<?= $blog["id"]; ?>" class="btn btn-outline-success">Oui</button>
                        <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal">Non</button>
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
