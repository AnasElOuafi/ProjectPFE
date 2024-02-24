<?php
$title = 'Commentaires';
$css = '';
require_once 'layouts/_head.php';
?>


<body class="container">
    <?php
    require_once 'layouts/_nav.php';
    ?>

    <h3><?= $title; ?> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajouter"><i class="fa fa-plus"></i> Ajouter</button> <a href="commentaire" class="btn btn-outline-primary"><i class="fa fa-refresh"></i> Actualiser</a></h3>
    <?php
    // Messages
    $success = '<div class="alert alert-success" role="alert">Opération terminée avec <strong>succès</strong></div>';
    $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération</div>';
    $date = date('Y-m-d H:i:s'); // Current date

    // Add your PHP code
    if (isset($_POST['ajouter'])) {
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $targetPath = "assets/img/"; // Specify the directory where you want to save the uploaded file
            $imageName = $_FILES["image"]["name"];
            $fileExtension = pathinfo($imageName, PATHINFO_EXTENSION);
            $img = $imageName;
    
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath . $img)) {
                echo ($CommentController->create($_POST['name'], $_POST['review'], $img, $date)) ? $success : $danger;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Error: No file uploaded or an error occurred during upload.";
        }
    }

    // Update php code
    if (isset($_POST['update'])) {
        $id = $_POST['update'];
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $targetPath = "assets/img/"; // Specify the directory where you want to save the uploaded file
            $imageName = $_FILES["image"]["name"];
            $fileExtension = pathinfo($imageName, PATHINFO_EXTENSION);
            $img = $imageName;
    
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath . $img)) {
                echo ($CommentController->update($_POST['name'], $_POST['review'], $img, $date, $id)) ? $success : $danger;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Error: No file uploaded or an error occurred during upload.";
        }
    }
    // Delete php code
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        echo ($CommentController->delete($id)) ? $success : $danger;
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Commantaire</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $AllComment = $CommentController->read();
            if (!empty($AllComment)) {
                foreach ($AllComment as $i => $Comment) :
            ?>

                    <tr>
                        <td><?= $Comment['id']; ?></td>
                        <td><img src="assets/img/<?= $Comment['avatar'] ; ?>" width="50" height="50" alt=""></td>
                        <td><?= $Comment['name']; ?></td>
                        <td><?= $Comment['review']; ?></td>
                        <td><?= $Comment['date']; ?></td>
                        <td>
                            <form method="post">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update<?= $Comment["id"]; ?>"><i class="fa fa-pen"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $Comment["id"]; ?>"><i class="fa fa-trash"></i></button>
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
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Commantaire</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </tfoot>
    </table>
    <!-- Model ajouter -->
    <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="uploadForm" action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Commantaire</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="mb-3">
                                <label class="col-form-label">avatar(*) :</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Name(*) :</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Commentaire(*) :</label>
                                <textarea type="text" class="form-control" name="review" required></textarea>
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
    $AllComment = $CommentController->read();
    foreach ($AllComment as $i => $Comment) :
    ?>
        <!-- Model Modifier -->
        <div class="modal fade" id="update<?= $Comment["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form id="uploadForm" action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier Commantaire</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label class="col-form-label">Avatar(*) :</label>
                                    <img src="assets/img/<?= $Comment['avatar'] ; ?>" width="50" height="50" alt="">
                                    <input type="file" class="form-control" name="image" value="<?= $Comment["avatar"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Name(*) :</label>
                                    <input type="text" class="form-control" name="name" value="<?= $Comment["name"]; ?>" placeholder="<?= $Comment["name"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Ceommentaire(*) :</label>
                                    <textarea type="file" class="form-control" name="review" value="<?= $Comment["review"]; ?>" placeholder="<?= $Comment["review"]; ?>" required><?= $Comment["review"]; ?></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="update" value="<?= $Comment["id"]; ?>" class="btn btn-outline-success">Modifier</button>
                            <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Model Supprimer -->
        <div class="modal fade" id="delete<?= $Comment["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button type="submit" name="delete" value="<?= $Comment["id"]; ?>" class="btn btn-outline-success">Oui</button>
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