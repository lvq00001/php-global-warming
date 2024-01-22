<?php 
    session_start();

    if (!isset($_SESSION['answered'])) {
        $_SESSION['answered'] = array();
    }

    if (!isset($_SESSION['count']) || count($_SESSION['answered']) == 0) {
        $_SESSION['count'] = 0;
    }

    if (!isset($_SESSION['statistic']) || count($_SESSION['answered']) == 0) {
        $_SESSION['statistic'] = array();
    }

    //check if user resubmit 
    $old_id = $_GET['id'];
    if (!in_array($old_id, $_SESSION['answered'])) {
        array_push($_SESSION['answered'], $old_id);
        $correct_answer = $_GET['correct_answer'];
        $choice = $_GET['choice'];
        if ($choice == $correct_answer) {
            $_SESSION['count'] += 1; 
        }
        $title = $_GET['title'];
        $_SESSION['statistic'][$title] = $choice;
    }

    // redirect
    $new_id = $old_id +1;
    if ($new_id < 8) {
        header("Location: http://{$_SERVER["HTTP_HOST"]}/php/quiz.php?id={$new_id}");
    }
    if ($new_id == 8) {
        header("Location: http://{$_SERVER["HTTP_HOST"]}/php/end_quiz.php");
    }
?>