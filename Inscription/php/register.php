<?php

require_once 'inc/function.php';
session_start();

if (!empty($_POST)) {

    $errors = array();
    require_once 'inc/db.php';

    if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {
        $errors['username'] = "Votre pseudo n'est pas valide";
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE username = ? ');
        $req->execute([$_POST['username']]);
        $user = $req->fetch();
        if ($user) {
            $errors['username'] = 'Ce pseudo est déjà pris';
            header('Location: connexion.php');
            exit();
        }
    }

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre email n'est pas valide";
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE email = ? ');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if ($user) {
            $errors['email'] = 'Cet email est déjà utilisé pour un autre compte';
            header('Location: connexion.php');
            exit();
        }
    }

    if (empty($_POST['password']) || $_POST['password'] != $_POST['password-confirm']) {
        $errors['password'] = "Vous devez rentrer un mot de passe valide";
    }

    if (empty($errors)) {
        $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['username'], $password, $_POST['email']]);
        /*$user_id = $pdo->lastInsertId();
        $From  = "From:QuizzApp@service.com\n";
        $From .= "MIME-version: 1.0\n";
        $From .= "Content-type: text/html; charset= iso-8859-1\n";
        $link = "C:\xampp\htdocs\QuizzApp\Inscription\php\confirm.php?id=$user_id&amp;token=$token";
        mail($_POST['email'], "Confirmation de votre compte QuizzApp", '<h2><strong>Bonjour ,</strong></h2>
        <p>Merci de la confiance que vous nous accorder, pour valider la cr&eacute;ation de votre compte merci de cliquer sur le liens ci-dessous :</p>
        <p><span>&nbsp;</span><a href=' . $link . '>Activer mon compte QuizzApp</a></p>
        <p></p>
        <p>Cordialement,</p>
        <p></p>
        <p>L"&eacute;quipe QuizzApp.</p>
        <p></p>
        <p><img src="https://nsa40.casimages.com/img/2020/06/07/200607052858346002.png" alt="" /></p>', $From);
        $_SESSION['flash']['positive'] = "Un email vous a était envoyé pour enregistré votre compte";*/
        header('Location:connexion.php');
        exit();
    }
}
