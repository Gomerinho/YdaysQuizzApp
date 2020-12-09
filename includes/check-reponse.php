<?php

session_start();

require_once('../functions/db.php');
require_once('../functions/quizz.php');


$current = 0;
if (isset($_GET['current'])) {
    $current = $_GET['current'];
}

$quest = [];
$now = [];
if (isset($_SESSION['quizz'])) {
    $now = $_SESSION['quizz']['now'];
}

$_SESSION['quizz']['reussis'] += ($now['bonne_reponse'] == $current) ? 1 : 0;

$res = array(
    "state" => $now['bonne_reponse'] == $current,
    "response" => $now['bonne_reponse'],
    "left" => sizeof($_SESSION['quizz']['questions']) - sizeof($_SESSION['quizz']['done'])
);

echo json_encode($res);
