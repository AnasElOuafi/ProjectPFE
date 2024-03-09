<?php
$title = 'Commentaire';
$css = '';
require_once 'layouts/_head.php';
?>


<body class="container">
    <?php
    require_once 'layouts/_nav.php';
    ?>

    <h3><?= $title; ?> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajouter"><i class="fa fa-plus"></i> Ajouter</button> <a href="review" class="btn btn-outline-primary"><i class="fa fa-refresh"></i> Acctualiser</a></h3>
    <?php
    // Messages
    $success = '<div class="alert alert-success" role="alert">Opération terminée avec <strong>succès</strong></div>';
    $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération</div>';
    // Ajpute php code
    if (isset($_POST['ajouter'])) {
        echo ($TemoiController->create($_POST['username'], $_POST['email'], $_POST['password'], $_POST['comment'])) ? $success : $danger;
    }
    // Update php code
    if (isset($_POST['update'])) {
        $userID = $_POST['update'];
        echo ($TemoiController->update($_POST['username'], $_POST['email'], $_POST['password'], $_POST['comment'], $userID)) ? $success : $danger;
    }
    // Delete php code
    if (isset($_POST['delete'])) {
        $userID = $_POST['delete'];
        echo ($TemoiController->delete($userID)) ? $success : $danger;
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">UserID</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Commantaire</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $AllTemoi = $TemoiController->read();
            if (!empty($AllTemoi)) {
                foreach ($AllTemoi as $i => $Temoi) :
            ?>

                    <tr>
                        <td><?= $Temoi['userID']; ?></td>
                        <td><?= $Temoi['username']; ?></td>
                        <td><?= $Temoi['email']; ?></td>
                        <td><?= $Temoi['password']; ?></td>
                        <td><?= $Temoi['comment']; ?></td>
                        <td>
                            <form method="post">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update<?= $Temoi["userID"]; ?>"><i class="fa fa-pen"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $Temoi["userID"]; ?>"><i class="fa fa-trash"></i></button>
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
                <th scope="col">UserID</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Commantaire	</th>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Commantaire</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="mb-3">
                                <label class="col-form-label">UserID(*) :</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Email(*) :</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Password(*) :</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Commantaire(*) :</label>
                                <textarea type="text" class="form-control" name="comment" required></textarea>
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
    $AllTemoi = $TemoiController->read();
    foreach ($AllTemoi as $i => $Temoi) :
    ?>
        <!-- Model Modifier -->
        <div class="modal fade" id="update<?= $Temoi["userID"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier Commantaire</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label class="col-form-label">UserID(*) :</label>
                                    <input type="text" class="form-control" name="username" value="<?= $Temoi["username"]; ?>" placeholder="<?= $Temoi["username"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Email(*) :</label>
                                    <input type="email" class="form-control" name="email" value="<?= $Temoi["email"]; ?>" placeholder="<?= $Temoi["email"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Password(*) :</label>
                                    <input type="password" class="form-control" name="password" value="<?= $Temoi["password"]; ?>" placeholder="<?= $Temoi["password"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Commantaire(*) :</label>
                                    <textarea type="text" class="form-control" name="comment" value="<?= $Temoi["comment"]; ?>" placeholder="<?= $Temoi["comment"]; ?>" required><?= $Temoi["comment"]; ?></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="update" value="<?= $Temoi["userID"]; ?>" class="btn btn-outline-success">Modifier</button>
                            <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Model Supprimer -->
        <div class="modal fade" id="delete<?= $Temoi["userID"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer Commantaire</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <p class="mb-3">Voulez vous supprimer ce message ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="delete" value="<?= $Temoi["userID"]; ?>" class="btn btn-outline-success">Oui</button>
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