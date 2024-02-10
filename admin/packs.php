<?php
$title = 'Packs';
$css = '';
require_once 'layouts/_head.php';
?>


<body class="container">
    <?php
    require_once 'layouts/_nav.php';
    ?>

    <h3><?= $title; ?> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajouter"><i class="fa fa-plus"></i> Ajouter</button> <a href="packs" class="btn btn-outline-primary"><i class="fa fa-refresh"></i> Acctualiser</a></h3>
    <?php
    // Messages
    $success = '<div class="alert alert-success" role="alert">Opération terminée avec <strong>succès</strong></div>';
    $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération</div>';
    // Ajoute php code
    if (isset($_POST['ajouter'])) {
        echo ($PackController->create($_POST['titre'], $_POST['prix'], $_POST['period'], $_POST['line1'], $_POST['line2'], $_POST['line3'], $_POST['line4'], $_POST['line5'])) ? $success : $danger;
    }
    // Update php code
    if (isset($_POST['update'])) {
        $id = $_POST['update'];
        echo ($PackController->update($_POST['titre'], $_POST['prix'], $_POST['period'], $_POST['line1'], $_POST['line2'], $_POST['line3'], $_POST['line4'], $_POST['line5'], $id)) ? $success : $danger;
    }
    // Delete php code
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        echo ($PackController->delete($id)) ? $success : $danger;
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titre</th>
                <th scope="col">prix</th>
                <th scope="col">line1</th>
                <th scope="col">line2</th>
                <th scope="col">line3</th>
                <th scope="col">line4</th>
                <th scope="col">line5</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Allpackss = $PackController->read();
            if (!empty($Allpackss)) {
                foreach ($Allpackss as $i => $packs) :
            ?>

                    <tr>
                        <td><?= $packs['id']; ?></td>
                        <td><?= $packs['titre']; ?></td>
                        <td><?= $packs['prix']; ?></td>
                        <td><?= $packs['line1']; ?></td>
                        <td><?= isset($packs['line2']) ? $packs['line2'] : ''; ?></td>
                        <td><?= isset($packs['line3']) ? $packs['line3'] : ''; ?></td>
                        <td><?= isset($packs['line4']) ? $packs['line4'] : ''; ?></td>
                        <td><?= isset($packs['line5']) ? $packs['line5'] : ''; ?></td>
                        <td>
                            <form method="post">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update<?= $packs["id"]; ?>"><i class="fa fa-pen"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $packs["id"]; ?>"><i class="fa fa-trash"></i></button>
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
                <th scope="col">titre</th>
                <th scope="col">prix</th>
                <th scope="col">line1</th>
                <th scope="col">line2</th>
                <th scope="col">line3</th>
                <th scope="col">line4</th>
                <th scope="col">line5</th>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter packs</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="mb-3">
                                <label class="col-form-label">titre(*) :</label>
                                <input type="text" class="form-control" name="titre" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">prix(*) :</label>
                                <input type="text" class="form-control" name="prix" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">period(*) :</label>
                                <input type="text" class="form-control" name="period" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">line1(*) :</label>
                                <textarea type="text" class="form-control" name="line1" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">line2(*) :</label>
                                <textarea type="text" class="form-control" name="line2" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">line3(*) :</label>
                                <textarea type="text" class="form-control" name="line3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">line4(*) :</label>
                                <textarea type="text" class="form-control" name="line4" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">line5(*) :</label>
                                <textarea type="text" class="form-control" name="line5" required></textarea>
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
    $Allpackss = $PackController->read();
    foreach ($Allpackss as $i => $packs) :
    ?>
        <!-- Model Modifier -->
        <div class="modal fade" id="update<?= $packs["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier packs</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="mb-3">
                                    <label class="col-form-label">titre(*) :</label>
                                    <input type="text" class="form-control" name="titre" value="<?= $packs["titre"]; ?>" placeholder="<?= $packs["titre"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">prix(*) :</label>
                                    <input type="text" class="form-control" name="prix" value="<?= $packs["prix"]; ?>" placeholder="<?= $packs["prix"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">period(*) :</label>
                                    <input type="text" class="form-control" name="period" value="<?= $packs["period"]; ?>" placeholder="<?= $packs["period"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">line1(*) :</label>
                                    <textarea type="text" class="form-control" name="line1" value="<?= $packs["line1"]; ?>" placeholder="<?= $packs["line1"]; ?>" required><?= $packs["line1"]; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">line2(*) :</label>
                                    <textarea type="text" class="form-control" name="line2" value="<?= isset($packs["line2"]) ? $packs["line2"] : ''; ?>" placeholder="<?= isset($packs["line2"]) ? $packs["line2"] : ''; ?>" required><?= isset($packs["line2"]) ? $packs["line2"] : ''; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">line3(*) :</label>
                                    <textarea type="text" class="form-control" name="line3" value="<?= isset($packs["line3"]) ? $packs["line3"] : ''; ?>" placeholder="<?= isset($packs["line3"]) ? $packs["line3"] : ''; ?>" required><?= isset($packs["line3"]) ? $packs["line3"] : ''; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">line4(*) :</label>
                                    <textarea type="text" class="form-control" name="line4" value="<?= isset($packs["line4"]) ? $packs["line4"] : ''; ?>" placeholder="<?= isset($packs["line4"]) ? $packs["line4"] : ''; ?>" required><?= isset($packs["line4"]) ? $packs["line4"] : ''; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">line5(*) :</label>
                                    <textarea type="text" class="form-control" name="line5" value="<?= isset($packs["line5"]) ? $packs["line5"] : ''; ?>" placeholder="<?= isset($packs["line5"]) ? $packs["line5"] : ''; ?>" required><?= isset($packs["line5"]) ? $packs["line5"] : ''; ?></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="update" value="<?= $packs["id"]; ?>" class="btn btn-outline-success">Modifier</button>
                            <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Model Supprimer -->
        <div class="modal fade" id="delete<?= $packs["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer packs</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <p class="mb-3">Voulez vous supprimer ce message ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="delete" value="<?= $packs["id"]; ?>" class="btn btn-outline-success">Oui</button>
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