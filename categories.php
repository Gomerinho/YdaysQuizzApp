<!DOCTYPE html>
<html lang="en">

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
        <!-- <section class="categ">
            <div class="container-fluid container-p-50">
                <p class="category">
                    <i class="fa fa-question-circle"></i>
                    <span>Géographie</span>
                </p>
            </div>
        </section> -->

        <div class="container-fluid fil-ariane">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Catégories</li>
                </ol>
            </nav>
        </div>

        <section id="quizz" class="main-slider p-0">
            <div class="container-fluid">
                <div class="quizz-container row">
                    <div class="col-12 col-md-6 col-lg-7 image" data-speed="0.4">
                        <img src="https://i2.wp.com/www.hisour.com/wp-content/uploads/2018/05/Architecture-of-Seattle.jpg?fit=960%2C640&ssl=1" alt="">
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 info">
                        <div>
                            <div class="container">
                                <h1>Les grandes métropoles</h1>

                                <p class="author">
                                    Proposé par&nbsp;:&nbsp;
                                    <span>Utilisateur</span>
                                </p>
                                <p>&nbsp;</p>
                                <h2>Testez vos connaissances</h2>
                                <p>
                                    Les questions s'affichent dans un ordre aléatoire. Vous ferez de nouvelles découvertes à chaque fois!
                                </p>
                                <a class="btn btn-lg" href="/quizz-go.php" target="_self">Lancer le Quizz</a>
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
                <div class="categories__list">
                    <div>
                        <a class="angled-img" href="#">
                            <div class="img">
                                <img width="500" height="375" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Barbara_McClintock_%281902-1992%29_shown_in_her_laboratory_in_1947.jpg/512px-Barbara_McClintock_%281902-1992%29_shown_in_her_laboratory_in_1947.jpg"></div>
                            <div class="over-info">
                                <div>
                                    <div>
                                        <h4>Science</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="angled-img" href="#">
                            <div class="img">
                                <img width="500" height="375" src="https://dsbihome.files.wordpress.com/2019/03/n-video-games-628x314.jpg"></div>
                            <div class="over-info">
                                <div>
                                    <div>
                                        <h4>Jeux vidéos</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="angled-img" href="#">
                            <div class="img">
                                <img width="500" height="375" src="https://www.ot-saumur.fr/photo/gal/pic/gal-10720280.jpg?v=1554899595"></div>
                            <div class="over-info">
                                <div>
                                    <div>
                                        <h4>Histoire</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="angled-img" href="#">
                            <div class="img">
                                <img width="500" height="375" src="https://assets.sport.francetvinfo.fr/sites/default/files/styles/large_16_9/public/2019-09/075_ciancaglini-formulao190906_nptom.jpg?itok=awWWaF7e"></div>
                            <div class="over-info">
                                <div>
                                    <div>
                                        <h4>Formule 1</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="angled-img" href="#">
                            <div class="img">
                                <img width="500" height="375" src="https://www.corsenetinfos.corsica/photo/art/grande/30061714-28843993.jpg?v=1548340088"></div>
                            <div class="over-info">
                                <div>
                                    <div>
                                        <h4>Musique</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
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