<?php 
        session_start();
        $arr_title = []; //key: index, value: title
        $arr_choice = [];//key: title, value: array of choices
        $arr_correct_answer = [];//key: title, value: answer
        $arr_explanation = [];
        $dbc = mysqli_connect('localhost', 'root', '', 'global_warming');
        $query = "select * from quiz;";
        $index = 1;
        if ($r = mysqli_query($dbc, $query)) {
            
            while ($row = mysqli_fetch_array($r)) {
                $quiz_title = $row['quiz_title'];
                $arr_title[$index] = $quiz_title;
                $arr_correct_answer[$quiz_title] = $row['quiz_answer'];
                $arr_explanation[$index] = $row['explanation'];
                $index++;
                
                $query2 = "select * from answer where answer.id_quiz = {$row['id']}";
                $r2 = mysqli_query($dbc, $query2);
                $temp = [];
                while ($row2 = mysqli_fetch_array($r2)) {
                    $temp[] = $row2['answer_title'];
                }
                
                $arr_choice[$quiz_title] = $temp;
                
            }
        }
    ?>