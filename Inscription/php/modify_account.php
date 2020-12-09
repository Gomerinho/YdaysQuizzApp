<?php session_start();
require 'inc/function.php';
logged_only();

if (!empty($_POST) && isset($_POST['password_change'])) {
    if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
        $_SESSION['flash']['negative'] = "Les mots de passes ne correspondent pas";
    } else {
        $user_id = $_SESSION['auth']->id;
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        require_once 'inc/db.php';
        $req = $pdo->prepare('UPDATE users SET password =? WHERE id=?')->execute([$password, $user_id]);
        $_SESSION['flash']['positive'] = "Votre mot de passe a bien été mise à jour";
    }

} elseif (!empty($_POST) && isset($_POST['email_change'])) {
    if (empty($_POST['email']) || $_POST['email'] != $_POST['email_confirm']) {
        $_SESSION['flash']['negative'] = "Les emails ne correspondent pas";
    } else {
        $user_id = $_SESSION['auth']->id;
        require_once 'inc/db.php';
        $req = $pdo->prepare('UPDATE users SET email =? WHERE id=?')->execute([$_POST['email'], $user_id]);
        $_SESSION['flash']['positive'] = "Votre email a bien été mise à jour";
    }
    
} elseif (!empty($_POST) && isset($_POST['username_change'])) {
    $user_id = $_SESSION['auth']->id;
    require_once 'inc/db.php';
    $req = $pdo->prepare('UPDATE users SET username =? WHERE id=?')->execute([$_POST['username'], $user_id]);
    $_SESSION['flash']['positive'] = "Votre username a bien été mise à jour";
} 

require_once 'inc/db.php';
$sth = $pdo->prepare('SELECT *
    FROM users
    WHERE id = ?');
$sth->execute([$_SESSION['auth']->id]);
$pp = $sth->fetch(PDO::FETCH_OBJ);



?>

<?php if (isset($_SESSION['flash'])) : ?>
    <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
        <div class="ui <?= $type ?> message center">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz App Yday</title>
    <link href="assets/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/modify_account.css">
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
    <h2 class="title">MODIFIER SES DONNEES</h2>
    <div class="mx-auto d-block" id="profil">
        <form action="" method="POST" class="ui form" enctype="multipart/form-data">
            <div class="position-absolute top-0 start-0">
                <a href="account.php">
                    <img src="../Images/undo.png" class="back">
                </a>
            </div>
            <div class="info">
                <div class="name">
                    <h3><?= $_SESSION['auth']->username; ?></h3>
                </div>
            </div>
            <div class="options">
                <ul>
                <div class="donnees">
                        <h5>Nom :</h5>
                    <div class="input">
                        <div class="field">
                            <input class="field" size="15" type="text" name="username" value="<?= $_SESSION['auth']->username ?>"></input>
                        </div>
                        <button class="btn btn-outline-dark" type="submit" name="username_change">Modifier</button>
                    </div>
                </div>
                <hr class="solid">
                <div class="donnees" style="width:500px">
                    <h5>Email : <?= $_SESSION['auth']->email ?></h5>
                    <div class="field">
                        <input type="email" name="email" placeholder="Entrez votre nouvelle email">
                    </div>
                    <div class="field">
                        <input type="email" name="email_confirm" placeholder="Confirmer l'email">
                    </div>
                    <button class="btn btn-outline-dark" name="email_change" type="submit">Modifier</button>
                </div>
                <hr class="solid">
                <div class="donnees" style="width:500px">
                    <h5>Mot de passe :</h5>
                    <div class="field">
                        <input type="password" name="password" placeholder="Changer de mot de passe">
                    </div>
                    <div class="field">
                        <input type="password" name="password_confirm" placeholder="Confirmer le mot de passe">
                    </div>
                    <button class="btn btn-outline-dark" type="submit" name="password_change">Modifier</button>
                </div>
                </ul>
            </div>
        </div>
    </main>
</body>


