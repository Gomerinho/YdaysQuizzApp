<?php session_start();
require 'inc/function.php';
logged_only();

require_once 'inc/db.php';
$sth = $pdo->prepare('SELECT *
    FROM users
    WHERE id = ?');
$sth->execute([$_SESSION['auth']->id]);
$pp = $sth->fetch(PDO::FETCH_OBJ);


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz App Yday</title>
    <link href="assets/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/account.css">
    <script defer src="assets/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg">
            <div class="logo">
                <a class="navbar-brand" href="../../index.php"><img class="logo" src="../../assets/img/logo.webp"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

<main>
        <h2 class="title">PROFILE</h2>
        <div class="mx-auto d-block" id="profil">
            <div class="info">
                <div class="name">
                    <h3><?= $_SESSION['auth']->username; ?></h3>
                </div>
            </div>
            <div class="options">
                <ul>
                    <li><i class="fas fa-user-edit"></i><a class ="choix" href="modify_account.php">Modifier ses informations</li></a>
                    <hr class="solid">
                    <li><i class="fas fa-book-open"></i><a class ="choix" href="#">Mes quizz</li></i></a>
                    <hr class="solid">
                    <li><i class="fas fa-user-friends"></i><a class ="choix" href="#">Mes amis</li></a>
                    <hr class="solid">
                    <li><i class="fas fa-sign-out-alt"></i><a class ="choix" href="logout.php">Déconnexion</li></a>
                </ul>
            </div>
        </div>
    </main>
</body>