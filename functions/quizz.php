<?php

// require_once('./db.php');

// FUNCTIONS

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
