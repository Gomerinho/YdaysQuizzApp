<?php

session_start();

require_once('../functions/utilitaires.php');

$score = 0;

$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
}


if (isset($_GET['step']) && $_GET['step'] == '2') {
    if (isset($_SESSION['quizz']['reussis'])) {
        $score = $_SESSION['quizz']['reussis'];
    }
}

?>
<div class="contenu">
    <h2 class="question">Votre score : <span><?= $score; ?>/5</span></h2>
    <p>N'hésitez pas recommencer ou à découvrir d'autres quizz.</p>
</div>

<div class="buttons">
    <a href="<?= get_url() ?>/quizz.php?id=<?= $id ?>" class="btn">Recommencer</a>
    <a href="<?= get_url() ?>" class="btn">Accueil</a>
</div>