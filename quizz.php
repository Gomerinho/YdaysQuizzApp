<?php

session_start();

require_once('./functions/db.php');
require_once('./functions/quizz.php');

$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$data = get_quizz($pdo, $id);
$_SESSION['quizz']['infos'] = $data['infos'];
$_SESSION['quizz']['questions'] = $data['questions'];
$_SESSION['quizz']['done'] = [];
$_SESSION['quizz']['reussis'] = 0;

$main_datas = get_quizz_list($pdo, 6);

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
                    <span><?= $data['infos']['quizz_name'] ?></span>
                </p>
            </div>
        </section>

        <div class="container-fluid fil-ariane">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= get_url() ?>/YdaysQuizzApp">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="<?= get_url() ?>/YdaysQuizzApp/liste-quizz.php">Tous les quizz</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $data['infos']['quizz_name'] ?></li>
                </ol>
            </nav>
        </div>

        <section id="quizz" class="main-slider p-0">
            <div class="container-fluid">
                <div class="quizz-container row">
                    <div class="col-12 col-md-6 col-lg-7 image" data-speed="0.4">
                        <img src="<?= $data['infos']['img_link'] ?>" alt="">
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 info">
                        <div>
                            <div class="container">
                                <h1><?= $data['infos']['quizz_name'] ?></h1>

                                <p class="author">
                                    Proposé par&nbsp;:&nbsp;
                                    <span><?= $data['infos']['username'] ?></span>
                                </p>
                                <p>&nbsp;</p>
                                <h2>Testez vos connaissances</h2>
                                <p>
                                    Les questions s'affichent dans un ordre aléatoire. Vous ferez de nouvelles découvertes à chaque fois!
                                </p>
                                <a class="btn btn-lg" id="lancer-quizz" target="_self">Lancer le Quizz</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="main-categories">
            <div class="container-fluid">
                <div class="categories__title--manu">
                    <div>
                        <h2>Découvrir d'autres quizz</h2>
                    </div>
                    <div>
                    </div>
                </div>

            </div>
        </section>

        <section class="liste-quizz">
            <div class="container-fluid">
                <div class="categories__list">
                    <?php foreach ($main_datas as $data) : ?>
                        <div>
                            <div class="items">
                                <a class="angled-img" href="<?= get_url() ?>/YdaysQuizzApp/quizz.php?id=<?= $data['id_quizz'] ?>">
                                    <div class="img">
                                        <img width="500" height="375" src="<?= $data['img_link'] ?>"></div>
                                    <div class="over-info">
                                        <div>
                                            <div>
                                                <h4><?= $data['quizz_name'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include('./includes/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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