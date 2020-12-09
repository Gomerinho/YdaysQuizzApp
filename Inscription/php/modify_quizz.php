<?php
require 'inc/function.php';
require 'inc/db.php';
require 'inc/request.php';

logged_only();

$id_quizz = isset($_GET['id_quizz']) ? $_GET['id_quizz'] : NULL;

if (isset($_POST['modifier'])) {
    $req = $pdo->prepare("UPDATE quizz SET quizz_name = ?, quizz_q1 = ?, quizz_q1r1 = ?, quizz_q1r2 = ?, quizz_q1r3=?, quizz_q1r4=?, quizz_q2=?, quizz_q2r1=?, quizz_q2r2=?, quizz_q2r3=?, quizz_q2r4=?, quizz_q3=?, quizz_q3r1=?, quizz_q3r2=?, quizz_q3r3=?, quizz_q3r4=?, quizz_q4=?, quizz_q4r1=?, quizz_q4r2=?, quizz_q4r3=?, quizz_q4r4=?, quizz_q5=?, quizz_q5r1=?, quizz_q5r2=?, quizz_q5r3=?, quizz_q5r4=?, quizz_q1rb=?, quizz_q2rb=?, quizz_q3rb=?, quizz_q4rb=?, quizz_q5rb=?, img_link=? WHERE id_quizz=?");
    $req->execute([$_POST['quizz_name'], $_POST['quizz_q1'], $_POST['quizz_q1r1'], $_POST['quizz_q1r2'], $_POST['quizz_q1r3'], $_POST['quizz_q1r4'], $_POST['quizz_q2'], $_POST['quizz_q2r1'], $_POST['quizz_q2r2'], $_POST['quizz_q2r3'], $_POST['quizz_q2r4'], $_POST['quizz_q3'], $_POST['quizz_q3r1'], $_POST['quizz_q3r2'], $_POST['quizz_q3r3'], $_POST['quizz_q3r4'], $_POST['quizz_q4'], $_POST['quizz_q4r1'], $_POST['quizz_q4r2'], $_POST['quizz_q4r3'], $_POST['quizz_q4r4'], $_POST['quizz_q5'], $_POST['quizz_q5r1'], $_POST['quizz_q5r2'], $_POST['quizz_q5r3'], $_POST['quizz_q5r4'], $_POST['quizz_q1rb'], $_POST['quizz_q2rb'], $_POST['quizz_q3rb'], $_POST['quizz_q4rb'], $_POST['quizz_q5rb'], $_POST['img_link'], $_POST['id_quizz']]);
    $_SESSION['flash']['success'] = 'Votre quizz à bien été modifier';
    header('Location: ../view_quizz.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/css/style.main.css">

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
        <div class="quizz-list">
            <?php while ($quizz = $result_quizz->fetch(PDO::FETCH_OBJ)) : ?>
                <?php if ($quizz->id_quizz == intval($id_quizz)) : ?>
                    <form method='post' action="modify_quizz.php" class='needs-validation' novalidate>
                        <div class="accordion" id="accordionExample">
                            <div class="form-group">
                                <label for="QuizzName">Nom du quizz</label>
                                <input type="text" class="form-control" id="QuizzName" placeholder="Entrez le nom du quizz" name="quizz_name" value="<?php echo $quizz->quizz_name; ?>" required>
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
                                            <input type="text" class="form-control" id="QuizzQ1" placeholder="Question 1" name="quizz_q1" value="<?php echo $quizz->quizz_q1; ?>" required>
                                            <div class="container">

                                                <div class="form-group">
                                                    <label for="QuizzQ1R1">Réponse 1</label>
                                                    <input type="text" class="form-control" id="QuizzQ1R1" placeholder="Réponse 1" name="quizz_q1r1" value="<?php echo $quizz->quizz_q1r1; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ1R2">Réponse 2</label>
                                                    <input type="text" class="form-control" id="QuizzQ1R2" placeholder="Réponse 2" name="quizz_q1r2" value="<?php echo $quizz->quizz_q1r2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ1R3">Réponse 3</label>
                                                    <input type="text" class="form-control" id="QuizzQ1R3" placeholder="Réponse 3" name="quizz_q1r3" value="<?php echo $quizz->quizz_q1r3; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ1R4">Réponse 4</label>
                                                    <input type="text" class="form-control" id="QuizzQ1R4" placeholder="Réponse 4" name="quizz_q1r4" value="<?php echo $quizz->quizz_q1r4; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ1Rb">Reponse bonne</label>
                                                    <select class="form-control" id="QuizzQ1Rb" name="quizz_q1rb">
                                                        <option selected="selected"><?php echo $quizz->quizz_q1rb; ?></option>
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
                                            <input type="text" class="form-control" id="QuizzQ2" placeholder="Question 2" name="quizz_q2" required value="<?php echo $quizz->quizz_q2; ?>">
                                            <div class="container">

                                                <div class="form-group">
                                                    <label for="QuizzQ2R1">Réponse 1</label>
                                                    <input type="text" class="form-control" id="QuizzQ2R1" placeholder="Réponse 1" name="quizz_q2r1" value="<?php echo $quizz->quizz_q2r1; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ2R2">Réponse 2</label>
                                                    <input type="text" class="form-control" id="QuizzQ2R2" placeholder="Réponse 2" name="quizz_q2r2" value="<?php echo $quizz->quizz_q2r2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ2R3">Réponse 3</label>
                                                    <input type="text" class="form-control" id="QuizzQ2R3" placeholder="Réponse 3" name="quizz_q2r3" value="<?php echo $quizz->quizz_q2r3; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ2R4">Réponse 4</label>
                                                    <input type="text" class="form-control" id="QuizzQ2R4" placeholder="Réponse 4" name="quizz_q2r4" value="<?php echo $quizz->quizz_q2r4; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ2Rb">Reponse bonne</label>
                                                    <select class="form-control" id="QuizzQ2Rb" name="quizz_q2rb" value="<?php echo $quizz->quizz_q2rb; ?>">
                                                        <option selected="selected"><?php echo $quizz->quizz_q2rb; ?></option>
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
                                            <input type="text" class="form-control" id="QuizzQ3" placeholder="Question 1" name="quizz_q3" required value="<?php echo $quizz->quizz_q3; ?>">
                                            <div class="container">

                                                <div class="form-group">
                                                    <label for="QuizzQ3R1">Réponse 1</label>
                                                    <input type="text" class="form-control" id="QuizzQ3R1" placeholder="Réponse 1" name="quizz_q3r1" value="<?php echo $quizz->quizz_q3r1; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ3R2">Réponse 2</label>
                                                    <input type="text" class="form-control" id="QuizzQ3R2" placeholder="Réponse 2" name="quizz_q3r2" value="<?php echo $quizz->quizz_q3r2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ3R3">Réponse 3</label>
                                                    <input type="text" class="form-control" id="QuizzQ3R3" placeholder="Réponse 3" name="quizz_q3r3" value="<?php echo $quizz->quizz_q3r3; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ3R4">Réponse 4</label>
                                                    <input type="text" class="form-control" id="QuizzQ3R4" placeholder="Réponse 4" name="quizz_q3r4" value="<?php echo $quizz->quizz_q3r4; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ3Rb">Reponse bonne</label>
                                                    <select class="form-control" id="QuizzQ3Rb" name="quizz_q3rb" value="<?php echo $quizz->quizz_q3rb; ?>">
                                                        <option selected="selected"><?php echo $quizz->quizz_q3rb; ?></option>
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
                                            <input type="text" class="form-control" id="QuizzQ4" placeholder="Question 4" name="quizz_q4" value="<?php echo $quizz->quizz_q4; ?>">
                                            <div class="container">

                                                <div class="form-group">
                                                    <label for="QuizzQ4R1">Réponse 1</label>
                                                    <input type="text" class="form-control" id="QuizzQ4R1" placeholder="Réponse 1" name="quizz_q4r1" value="<?php echo $quizz->quizz_q4r1; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ4R2">Réponse 2</label>
                                                    <input type="text" class="form-control" id="QuizzQ4R2" placeholder="Réponse 2" name="quizz_q4r2" value="<?php echo $quizz->quizz_q4r2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ4R3">Réponse 3</label>
                                                    <input type="text" class="form-control" id="QuizzQ4R3" placeholder="Réponse 3" name="quizz_q4r3" value="<?php echo $quizz->quizz_q4r3; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ4R4">Réponse 4</label>
                                                    <input type="text" class="form-control" id="QuizzQ4R4" placeholder="Réponse 4" name="quizz_q4r4" value="<?php echo $quizz->quizz_q4r4; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ4Rb">Reponse bonne</label>
                                                    <select class="form-control" id="QuizzQ4Rb" name="quizz_q4rb" value="<?php echo $quizz->quizz_q4rb; ?>">
                                                        <option selected="selected"><?php echo $quizz->quizz_q4rb; ?></option>
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
                                            <input type="text" class="form-control" id="QuizzQ5" placeholder="Question 5" name="quizz_q5" required value="<?php echo $quizz->quizz_q5; ?>">
                                            <div class="container">

                                                <div class="form-group">
                                                    <label for="QuizzQ5R1">Réponse 1</label>
                                                    <input type="text" class="form-control needs-validation" id="QuizzQ5R1" placeholder="Réponse 1" name="quizz_q5r1" value="<?php echo $quizz->quizz_q5r1; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ5R2">Réponse 2</label>
                                                    <input type="text" class="form-control" id="QuizzQ5R2" placeholder="Réponse 2" name="quizz_q5r2" value="<?php echo $quizz->quizz_q5r2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ5R3">Réponse 3</label>
                                                    <input type="text" class="form-control" id="QuizzQ5R3" placeholder="Réponse 3" name="quizz_q5r3" value="<?php echo $quizz->quizz_q5r3; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ5R4">Réponse 4</label>
                                                    <input type="text" class="form-control" id="QuizzQ5R4" placeholder="Réponse 4" name="quizz_q5r4" value="<?php echo $quizz->quizz_q5r4; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="QuizzQ5Rb">Reponse bonne</label>
                                                    <select class="form-control" id="QuizzQ5Rb" name="quizz_q5rb">
                                                        <option selected="selected"><?php echo $quizz->quizz_q5rb; ?></option>
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
                        <div class="form-group">
                            <input type="hidden" name="id_quizz" value="<?php echo $quizz->id_quizz; ?>">
                            <input class="form-control" type="text" name="img_link" placeholder="Liens vers votre image" required value="<?php echo $quizz->img_link; ?>">
                        </div>
                        <button type="submit" class="btn btn-warning" name="modifier">Modifier</button>
                    </form>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>

    <?php include 'inc/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>