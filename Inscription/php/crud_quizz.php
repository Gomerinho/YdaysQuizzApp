<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'inc/db.php';

//quizz_q1r1 = ?, quizz_q1r2 = ?, quizz_q1r3 = ?, quizz_q1r4 = ?, quizz_q2r1 = ?, quizz_q2r2 = ?, quizz_q2r3 = ?, quizz_q2r4 = ?,  quizz_q3r1 = ?, quizz_q3r2 = ?, quizz_q3r3 = ?, quizz_q3r4 = ?, quizz_q4r1 = ?, quizz_q4r2 = ?, quizz_q4r3 = ?, quizz_q4r4 = ?, quizz_q5r1 = ?, quizz_q5r2 = ?, quizz_q5r3 = ?, quizz_q5r4 = ?, , $_POST['quizz_q3r3'], $_POST['quizz_q3r4'], $_POST['quizz_q4'], $_POST['quizz_q4r1'], $_POST['quizz_q4r2'], $_POST['quizz_q4r3'], $_POST['quizz_q4r4'], $_POST['quizz_q5'], $_POST['quizz_q5r1'], $_POST['quizz_q5r2'], $_POST['quizz_q5r3'], $_POST['quizz_q5r4'], $_POST['quizz_q1rb'], $_POST['quizz_q2rb'], $_POST['quizz_q3rb'], $_POST['quizz_q4rb'], $_POST['quizz_q5rb'], $_POST['id_user']


//"INSERT INTO quizz SET id_quizz=?, quizz_name = ?, quizz_q1 = ?, quizz_q2 = ?, quizz_q3 = ?,quizz_q4 = ?, quizz_q5 = ?, quizz_q1rb = ?, quizz_q2rb = ?, quizz_q3rb = ?, quizz_q4rb = ?, quizz_q5rb = ?, id_user=?"

//[$_POST['quizz_name'], $_POST['quizz_q1'], $_POST['quizz_q1r1'], $_POST['quizz_q1r2'], $_POST['quizz_q1r3'], $_POST['quizz_q1r4'], $_POST['quizz_q2'], $_POST['quizz_q1rb'], $_POST['quizz_q2rb'], $_POST['quizz_q3rb'], $_POST['quizz_q4rb'], $_POST['quizz_q5rb']], [$_POST['id_user']]
if (isset($_POST['envoyer']) && !empty($_POST)) {
    $req = $pdo->prepare("INSERT INTO `quizz` (`id_quizz`, `quizz_name`, `quizz_q1`, `quizz_q1r1`, `quizz_q1r2`, `quizz_q1r3`, `quizz_q1r4`, `quizz_q2`, `quizz_q2r1`, `quizz_q2r2`, `quizz_q2r3`, `quizz_q2r4`, `quizz_q3`, `quizz_q3r1`, `quizz_q3r2`, `quizz_q3r3`, `quizz_q3r4`, `quizz_q4`, `quizz_q4r1`, `quizz_q4r2`, `quizz_q4r3`, `quizz_q4r4`, `quizz_q5`, `quizz_q5r1`, `quizz_q5r2`, `quizz_q5r3`, `quizz_q5r4`, `quizz_q1rb`, `quizz_q2rb`, `quizz_q3rb`, `quizz_q4rb`, `quizz_q5rb`, `id_user`, `img_link`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute([NULL, $_POST['quizz_name'], $_POST['quizz_q1'], $_POST['quizz_q1r1'], $_POST['quizz_q1r2'], $_POST['quizz_q1r3'], $_POST['quizz_q1r4'], $_POST['quizz_q2'], $_POST['quizz_q2r1'], $_POST['quizz_q2r2'], $_POST['quizz_q2r3'], $_POST['quizz_q2r4'], $_POST['quizz_q3'], $_POST['quizz_q3r1'], $_POST['quizz_q3r2'], $_POST['quizz_q3r3'], $_POST['quizz_q3r4'], $_POST['quizz_q4'], $_POST['quizz_q4r1'], $_POST['quizz_q4r2'], $_POST['quizz_q4r3'], $_POST['quizz_q4r4'], $_POST['quizz_q5'], $_POST['quizz_q5r1'], $_POST['quizz_q5r2'], $_POST['quizz_q5r3'], $_POST['quizz_q5r4'], $_POST['quizz_q1rb'], $_POST['quizz_q2rb'], $_POST['quizz_q3rb'], $_POST['quizz_q4rb'], $_POST['quizz_q5rb'], $_POST['user_id'], $_POST['img_link']]);
    $_SESSION['flash']['success'] = 'Votre quizz à bien été ajoutée ' . $_SESSION['auth']->username;
    header('Location: add_quizz.php');
    exit();
} elseif (isset($_POST['modifier'])) {
    $req = $pdo->prepare("UPDATE quizz SET quizz_name = ?, quizz_q1 = ?, quizz_q1r1 = ?, quizz_q1r2 = ?, quizz_q1r3=?, quizz_q1r4=?, quizz_q2=?, quizz_q2r1=?, quizz_q2r2=?, quizz_q2r3=?, quizz_q2r4=?, quizz_q3=?, quizz_q3r1=?, quizz_q3r2=?, quizz_q3r3=?, quizz_q3r4=?, quizz_q4=?, quizz_q4r1=?, quizz_q4r2=?, quizz_q4r3=?, quizz_q4r4=?, quizz_q5=?, quizz_q5r1=?, quizz_q5r2=?, quizz_q5r3=?, quizz_q5r4=?, quizz_q1rb=?, quizz_q2rb=?, quizz_q3rb=?, quizz_q4rb=?, quizz_q5rb=?, img_link=? WHERE id_quizz=?");
    $req->execute([$_POST['quizz_name'], $_POST['quizz_q1'], $_POST['quizz_q1r1'], $_POST['quizz_q1r2'], $_POST['quizz_q1r3'], $_POST['quizz_q1r4'], $_POST['quizz_q2'], $_POST['quizz_q2r1'], $_POST['quizz_q2r2'], $_POST['quizz_q2r3'], $_POST['quizz_q2r4'], $_POST['quizz_q3'], $_POST['quizz_q3r1'], $_POST['quizz_q3r2'], $_POST['quizz_q3r3'], $_POST['quizz_q3r4'], $_POST['quizz_q4'], $_POST['quizz_q4r1'], $_POST['quizz_q4r2'], $_POST['quizz_q4r3'], $_POST['quizz_q4r4'], $_POST['quizz_q5'], $_POST['quizz_q5r1'], $_POST['quizz_q5r2'], $_POST['quizz_q5r3'], $_POST['quizz_q5r4'], $_POST['quizz_q1rb'], $_POST['quizz_q2rb'], $_POST['quizz_q3rb'], $_POST['quizz_q4rb'], $_POST['quizz_q5rb'], $_POST['img_link'], $_POST['id_quizz']]);
    $_SESSION['flash']['success'] = 'Votre quizz à bien été modifier';
    header('Location: modify_quizz.php');
    exit();
} elseif (isset($_POST['supprimer'])) {
    $req = $pdo->prepare("DELETE FROM quizz WHERE id_quizz=?");
    $req->execute([$_POST['id_quizz']]);
    $_SESSION['flash']['success'] = 'Votre quizz à bien été supprimer';
    header('Location: modify_quizz.php');
    exit();
}
