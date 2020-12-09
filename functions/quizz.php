<?php

// require_once('./db.php');

// FUNCTIONS

function shuffle_assoc($list)
{
    if (!is_array($list)) return $list;

    $keys = array_keys($list);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key)
        $random[$key] = $list[$key];

    return $random;
}

function get_question_not_in($array, $done)
{
    $reste = [];
    $fait = [];
    $rand = [];
    foreach ($array as $a) {
        if (!in_array($a, $done)) {
            $reste[] = $a;
        } else {
            $fait[] = $a;
        }
    }
    if (sizeof($reste) > 0) {
        $rand =  $reste[array_rand($reste)];
        $done[] = $rand;
    }
    return array("done" => $done, "now" => $rand, "fait" => $fait);
}

function get_quizz($pdo, $id)
{
    $sql = "SELECT users.username, quizz.* FROM quizz INNER JOIN users ON quizz.id_user = users.id WHERE quizz.id_quizz = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$arr) {
        return [];
    } else {
        if (sizeof($arr) > 0) {
            $temp = $arr[0];
            $response = array(
                "infos" => array(
                    "quizz_name" => $temp['quizz_name'],
                    "username" => $temp['username'],
                    "id_quizz" => $temp['id_quizz'],
                    "id_user" => $temp['id_user'],
                    "img_link" => $temp['img_link'],
                ),
                "questions" => array(
                    array(
                        "question" => $temp['quizz_q1'],
                        "reponses" => array(
                            "1" => $temp['quizz_q1r1'],
                            "2" => $temp['quizz_q1r2'],
                            "3" => $temp['quizz_q1r3'],
                            "4" => $temp['quizz_q1r4'],
                        ),
                        "bonne_reponse" => $temp['quizz_q1rb']
                    ),
                    array(
                        "question" => $temp['quizz_q2'],
                        "reponses" => array(
                            "1" => $temp['quizz_q2r1'],
                            "2" => $temp['quizz_q2r2'],
                            "3" => $temp['quizz_q2r3'],
                            "4" => $temp['quizz_q2r4'],
                        ),
                        "bonne_reponse" => $temp['quizz_q2rb']
                    ),
                    array(
                        "question" => $temp['quizz_q3'],
                        "reponses" => array(
                            "1" => $temp['quizz_q3r1'],
                            "2" => $temp['quizz_q3r2'],
                            "3" => $temp['quizz_q3r3'],
                            "4" => $temp['quizz_q3r4'],
                        ),
                        "bonne_reponse" => $temp['quizz_q3rb']
                    ),
                    array(
                        "question" => $temp['quizz_q4'],
                        "reponses" => array(
                            "1" => $temp['quizz_q4r1'],
                            "2" => $temp['quizz_q4r2'],
                            "3" => $temp['quizz_q4r3'],
                            "4" => $temp['quizz_q4r4'],
                        ),
                        "bonne_reponse" => $temp['quizz_q4rb']
                    ),
                    array(
                        "question" => $temp['quizz_q5'],
                        "reponses" => array(
                            "1" => $temp['quizz_q5r1'],
                            "2" => $temp['quizz_q5r2'],
                            "3" => $temp['quizz_q5r3'],
                            "4" => $temp['quizz_q5r4'],
                        ),
                        "bonne_reponse" => $temp['quizz_q5rb']
                    )
                )
            );
            return $response;
        } else {
            return [];
        }
    }
}

function get_quizz_list($pdo, $limit = -1)
{
    $sql = "SELECT quizz.id_quizz, quizz.quizz_name, quizz.img_link, quizz.id_user, users.username FROM quizz INNER JOIN users ON quizz.id_user = users.id ORDER BY quizz.id_quizz DESC";
    if ($limit > -1) {
        $sql .= "  LIMIT " . $limit;
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute([]);
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$arr) {
        return [];
    } else {
        return $arr;
    }
}
