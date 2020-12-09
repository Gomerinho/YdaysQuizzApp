<?php

session_start();

require_once('../functions/db.php');
require_once('../functions/quizz.php');

$quest = [];
$infos = [];
if (isset($_SESSION['quizz'])) {
    $infos = $_SESSION['quizz']['infos'];
}

if (isset($_GET['step']) && $_GET['step'] == '0') {
    $datas = $_SESSION['quizz']['questions'];
    $quest = $datas[array_rand($datas)];
    $_SESSION['quizz']['done'][] = $quest;
    $_SESSION['quizz']['now'] = $quest;
} else {
    $temporaire = get_question_not_in($_SESSION['quizz']['questions'], $_SESSION['quizz']['done']);
    $quest = $temporaire['now'];
    $_SESSION['quizz']['now'] = $temporaire['now'];
    $_SESSION['quizz']['done'] = $temporaire['done'];
}
$quest['reponses'] = shuffle_assoc($quest['reponses']);

?>

<section id="quizz" class="main-slider p-0">
    <div class="container-fluid">
        <div class="quizz-container row">
            <div class="col-12 image" data-speed="0.4">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-2">
                        <img src="<?= $infos['img_link'] ?>" alt="">
                    </div>
                    <div class="col-12 col-md-9 col-lg-9">
                        <h1><?= $infos['quizz_name'] ?></h1>
                        <input type="hidden" id="id_quizz" value="<?= $infos['id_quizz'] ?>">
                        <p class="author">
                            Proposé par&nbsp;:&nbsp;
                            <span><?= $infos['username'] ?></span>
                        </p>
                        <div id="remplace">
                            <h2 class="question"><?= $quest['question'] ?></h2>
                            <ol class="reponses" id="reponses">
                                <?php foreach ($quest['reponses'] as $key => $q) : ?>
                                    <li class="reponse response-choix">
                                        <input type="hidden" value="<?= $key ?>">
                                        <p><?= $q ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ol>

                            <div class="buttons">
                                <button class="btn" id="next-quizz">Suivant</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>