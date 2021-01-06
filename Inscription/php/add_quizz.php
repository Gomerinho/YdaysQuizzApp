<?php
require 'inc/function.php';
require 'inc/db.php';
require 'inc/request.php';

logged_only();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.main.css">

<body>
    <?php include 'inc/header.php' ?>
    <?php if (isset($_SESSION['flash'])) : ?>
        <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
            <div class="alert alert-<?= $type ?>" style="width: 50%; text-align: center;margin: 0 auto;">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <div class="container">
        <form method='post' action="crud_quizz.php" class='needs-validation' novalidate>
            <div class="accordion" id="accordionExample">
                <div class="form-group">
                    <label for="QuizzName">Nom du quizz</label>
                    <input type="text" class="form-control" id="QuizzName" placeholder="Entrez le nom du quizz" name="quizz_name" required>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Question 1
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="QuizzQ1">Question 1</label>
                                <input type="text" class="form-control" id="QuizzQ1" placeholder="Question 1" name="quizz_q1" required>
                                <div class="container">

                                    <div class="form-group">
                                        <label for="QuizzQ1R1">Réponse 1</label>
                                        <input type="text" class="form-control" id="QuizzQ1R1" placeholder="Réponse 1" name="quizz_q1r1">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ1R2">Réponse 2</label>
                                        <input type="text" class="form-control" id="QuizzQ1R2" placeholder="Réponse 2" name="quizz_q1r2">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ1R3">Réponse 3</label>
                                        <input type="text" class="form-control" id="QuizzQ1R3" placeholder="Réponse 3" name="quizz_q1r3">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ1R4">Réponse 4</label>
                                        <input type="text" class="form-control" id="QuizzQ1R4" placeholder="Réponse 4" name="quizz_q1r4">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ1Rb">Reponse bonne</label>
                                        <select class="form-control" id="QuizzQ1Rb" name="quizz_q1rb">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Question 2
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="QuizzQ2">Question 2</label>
                                <input type="text" class="form-control" id="QuizzQ2" placeholder="Question 1" name="quizz_q2" required>
                                <div class="container">

                                    <div class="form-group">
                                        <label for="QuizzQ2R1">Réponse 1</label>
                                        <input type="text" class="form-control" id="QuizzQ2R1" placeholder="Réponse 1" name="quizz_q2r1">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ2R2">Réponse 2</label>
                                        <input type="text" class="form-control" id="QuizzQ2R2" placeholder="Réponse 2" name="quizz_q2r2">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ2R3">Réponse 3</label>
                                        <input type="text" class="form-control" id="QuizzQ2R3" placeholder="Réponse 3" name="quizz_q2r3">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ2R4">Réponse 4</label>
                                        <input type="text" class="form-control" id="QuizzQ2R4" placeholder="Réponse 4" name="quizz_q2r4">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ2Rb">Reponse bonne</label>
                                        <select class="form-control" id="QuizzQ2Rb" name="quizz_q2rb">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Question 3
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="QuizzQ3">Question 3</label>
                                <input type="text" class="form-control" id="QuizzQ3" placeholder="Question 1" name="quizz_q3" required>
                                <div class="container">

                                    <div class="form-group">
                                        <label for="QuizzQ3R1">Réponse 1</label>
                                        <input type="text" class="form-control" id="QuizzQ3R1" placeholder="Réponse 1" name="quizz_q3r1">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ3R2">Réponse 2</label>
                                        <input type="text" class="form-control" id="QuizzQ3R2" placeholder="Réponse 2" name="quizz_q3r2">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ3R3">Réponse 3</label>
                                        <input type="text" class="form-control" id="QuizzQ3R3" placeholder="Réponse 3" name="quizz_q3r3">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ3R4">Réponse 4</label>
                                        <input type="text" class="form-control" id="QuizzQ3R4" placeholder="Réponse 4" name="quizz_q3r4">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ3Rb">Reponse bonne</label>
                                        <select class="form-control" id="QuizzQ3Rb" name="quizz_q3rb">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Question 4
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="QuizzQ4">Question 4</label>
                                <input type="text" class="form-control" id="QuizzQ4" placeholder="Question 1" name="quizz_q4">
                                <div class="container">

                                    <div class="form-group">
                                        <label for="QuizzQ4R1">Réponse 1</label>
                                        <input type="text" class="form-control" id="QuizzQ4R1" placeholder="Réponse 1" name="quizz_q4r1">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ4R2">Réponse 2</label>
                                        <input type="text" class="form-control" id="QuizzQ4R2" placeholder="Réponse 2" name="quizz_q4r2">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ4R3">Réponse 3</label>
                                        <input type="text" class="form-control" id="QuizzQ4R3" placeholder="Réponse 3" name="quizz_q4r3">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ4R4">Réponse 4</label>
                                        <input type="text" class="form-control" id="QuizzQ4R4" placeholder="Réponse 4" name="quizz_q4r4">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ4Rb">Reponse bonne</label>
                                        <select class="form-control" id="QuizzQ4Rb" name="quizz_q4rb">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Question 5
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group px-4 py-3">
                                <label for="QuizzQ5">Question 5</label>
                                <input type="text" class="form-control" id="QuizzQ5" placeholder="Question 1" name="quizz_q5" required>
                                <div class="container">

                                    <div class="form-group">
                                        <label for="QuizzQ5R1">Réponse 1</label>
                                        <input type="text" class="form-control needs-validation" id="QuizzQ5R1" placeholder="Réponse 1" name="quizz_q5r1">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ5R2">Réponse 2</label>
                                        <input type="text" class="form-control" id="QuizzQ5R2" placeholder="Réponse 2" name="quizz_q5r2">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ5R3">Réponse 3</label>
                                        <input type="text" class="form-control" id="QuizzQ5R3" placeholder="Réponse 3" name="quizz_q5r3">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ5R4">Réponse 4</label>
                                        <input type="text" class="form-control" id="QuizzQ5R4" placeholder="Réponse 4" name="quizz_q5r4">
                                    </div>
                                    <div class="form-group">
                                        <label for="QuizzQ5Rb">Reponse bonne</label>
                                        <select class="form-control" id="QuizzQ5Rb" name="quizz_q5rb">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['auth']->id ?>>">
            <div class="form-group">
                <input class="form-control" type="text" name="img_link" placeholder="Liens vers votre image" required>
            </div>


            <button type="submit" class="btn btn-primary" name="envoyer">Envoyez</button>
        </form>
    </div>

    <?php include 'inc/footer.php' ?>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>