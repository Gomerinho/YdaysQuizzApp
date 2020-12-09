<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz App Yday</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php if (isset($_SESSION['flash'])) : ?>
        <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
            <div class="alert alert-<?= $type ?>" style="width: 50%; text-align: center;margin: 0 auto;">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <div class="hero">

        <?php if (!empty($errors)) : ?>
            <div class="ui error message">
                <i class="close icon"></i>
                <div class="header">
                    Vous n'avez pas remplis le formulaire correctement
                </div>
                <ul class="list">
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="../Images/facebook.png">
                <img src="../Images/twitter.png">
                <img src="../Images/instagram.png">
            </div>
            <form id="login" class="input-group" action="login.php" method="POST">
                <input type="text" name="username" class="input-field" placeholder="Pseudo">
                <input type="password" name="password" class="input-field" placeholder="mot de passe">
                <input type="submit" name="formconnexion" class="submit-btn" value="Se connecter">

            </form>
            <form id="register" class="input-group" action="register.php" method="POST">
                <input type="text" name="username" class="input-field" placeholder="Pseudo" required>
                <input type="mail" name="email" class="input-field" placeholder="E-mail" required>
                <input type="password" name="password" class="input-field" placeholder="mot de passe" required>
                <input type="password" name="password-confirm" class="input-field" placeholder="confirmer mot de passe" required>
                <input type="submit" name="forminscription" class="submit-btn" value="S'inscrire">

            </form>
        </div>

    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>

</html>