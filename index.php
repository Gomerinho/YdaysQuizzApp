<?php

require_once('./functions/db.php');
require_once('./functions/quizz.php');
$main_datas = get_quizz_list($pdo, 6);
$banner = $main_datas[array_rand($main_datas)];
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

        <?php if (sizeof($banner) > 0) : ?>
            <section id="home" class="main-slider p-0">
                <div class="container-fluid">
                    <div class="slides__list">
                        <div class="slide-item">
                            <div class="image" data-speed="0.4">
                                <img src="<?= $banner['img_link'] ?>" alt="">
                            </div>
                            <div class="info" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                <div>
                                    <div class="container">
                                        <h2><?= $banner['quizz_name'] ?></h2>
                                        <p>
                                            Proposé par&nbsp;:&nbsp;
                                            <strong><?= $banner['username'] ?></strong>
                                        </p>
                                        <p>&nbsp;</p>
                                        <a class="btn btn-lg " href="<?= get_url() ?>/quizz.php?id=<?= $banner['id_quizz'] ?>" target="_self">Lancer le Quizz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <section class="main-categories">
            <div class="container-fluid">
                <div class="categories__list">
                    <?php foreach ($main_datas as $data) : ?>
                        <div>
                            <a class="angled-img" href="<?= get_url() ?>/quizz.php?id=<?= $data['id_quizz'] ?>">
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
                    <?php endforeach; ?>
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