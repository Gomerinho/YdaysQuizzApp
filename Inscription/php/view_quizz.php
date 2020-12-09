<?php
require 'inc/function.php';
require 'inc/db.php';
require 'inc/request.php';

logged_only();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="crud.css">
    <link rel="stylesheet" href="../../assets/css/style.main.css">

<body>
    <?php include 'inc/header.php' ?>
    <?php if (isset($_SESSION['flash'])) : ?>
        <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
            <div class="alert alert-<?= $type ?>" style="width: 50%; text-align: center;margin: 0 auto;">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <div class="container">
        <div class="quizz-list">
            <?php while ($quizz = $result_quizz->fetch(PDO::FETCH_OBJ)) : ?>
                <?php if ($quizz->id_user == $_SESSION['auth']->id) : ?>
                    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem; display:inline-block; margin-left:10px; margin-top:10px;">
                        <img class="card-img-top" src="<?= $quizz->img_link; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $quizz->quizz_name; ?></h5>
                            <div class="bouttons" style="display: inline-flex;">
                                <button class="btn btn-warning" id="modifier" name="modifier"><a href="modify_quizz.php/?id_quizz=<?= $quizz->id_quizz ?>" style="text-decoration: none; color: black;">Modifier</a> </button>
                                <form action="crud_quizz.php" method="post">
                                    <input type="hidden" name="id_quizz" value="<?= $quizz->id_quizz; ?>">
                                    <button type="submit" class="btn btn-danger" name="supprimer">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endwhile ?>
        </div>
    </div>

    <?php include 'inc/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>