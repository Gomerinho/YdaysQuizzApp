<?php require_once("./functions/utilitaires.php"); ?>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid container-p-50">
            <a class="navbar-brand" href="<?= get_url() ?>">
                <img class="logo" src="https://fakeimg.pl/65x65/ff0000/000">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tous les quizz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Créer mon quizz</a>
                    </li>
                </ul>
                <a href="<?= get_url() ?>/Inscription/php/connexion.php" class="connexion">
                    <i class="fas fa-user fa-lg"></i>
                    <span>Se connecter</span>
                </a>
            </div>
        </div>
    </nav>
</header>