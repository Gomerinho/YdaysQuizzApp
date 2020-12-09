<?php

session_start();

require_once('./functions/db.php');
require_once('./functions/quizz.php');

$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
}

$data = get_quizz($pdo, $id);
$_SESSION['quizz'] = $data;
// var_dump($_SESSION['quizz']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz App Yday</title>
    <link href="assets/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/style.main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

    <?php include('./includes/header.php') ?>

    <main>
        <section class="quizz-title">
            <div class="container-fluid container-p-50">
                <p class="category">
                    <i class="fa fa-question-circle"></i>
                    <span><?= $data['quizz_name'] ?></span>
                </p>
            </div>
        </section>

        <div class="container-fluid fil-ariane">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= get_url() ?>">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="/">Tous les quizz</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $data['quizz_name'] ?></li>
                </ol>
            </nav>
        </div>


        <section id="quizz" class="main-slider p-0">
            <div class="container-fluid">
                <div class="quizz-container row">
                    <div class="col-12 image" data-speed="0.4">
                        <div class="row">
                            <div class="col-12 col-md-3 col-lg-2">
                                <img src="https://i2.wp.com/www.hisour.com/wp-content/uploads/2018/05/Architecture-of-Seattle.jpg?fit=960%2C640&ssl=1" alt="">
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <h1>Les grandes métropoles</h1>
                                <p class="author">
                                    Proposé par&nbsp;:&nbsp;
                                    <span>Utilisateur</span>
                                </p>
                                <h2 class="question">Quelle ville est parfois surnomée la « fenêtre sur l’Europe » de la Russie&nbsp;?</h2>
                                <ol class="reponses">
                                    <li class="reponse">
                                        <p>Moscou</p>
                                    </li>
                                    <li class="reponse">
                                        <p>Saint-Petersbourg</p>
                                    </li>
                                    <li class="reponse">
                                        <p>Kazan</p>
                                    </li>
                                    <li class="reponse">
                                        <p>Irkoutsk</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include('./includes/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/all.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>