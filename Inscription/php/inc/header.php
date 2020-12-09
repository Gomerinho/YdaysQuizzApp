<?php require_once("../../functions/utilitaires.php"); ?>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid container-p-50">
            <a class="navbar-brand" href="<?= get_url() ?>">
                <img class="logo" src="https://image.flaticon.com/icons/png/512/36/36601.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= get_url() ?>/YdaysQuizzApp/liste-quizz.php">Tous les quizz</a>
                    </li>
                    <?php if (isset($_SESSION['auth'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../php/add_quizz.php">Créer mon quizz</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../php/view_quizz.php">Modifier mes quizz</a>
                        </li>

                    <?php endif; ?>

                </ul>
                <?php if (isset($_SESSION['auth'])) : ?>
                    <a href="<?= get_url() ?>/YdaysQuizzApp/Inscription/php/account.php" class="connexion">
                        <i class="fas fa-user fa-lg"></i>
                        <span>Mon compte</span>
                    </a>
                    <a href="<?= get_url() ?>/YdaysQuizzApp/Inscription/php/logout.php" class="connexion">
                        <span>Se déconnect</span>
                    </a>
                <?php elseif (!isset($_SESSION['auth'])) : ?>
                    <a href="<?= get_url() ?>/YdaysQuizzApp/Inscription/php/connexion.php" class="connexion">
                        <i class="fas fa-user fa-lg"></i>
                        <span>Se connecter</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>