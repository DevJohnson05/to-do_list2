<?php 
    session_start();
    $tpm[] = $_SESSION['tasks']?? [];
    unset($_SESSION['tasks']);
    foreach ($tpm as $tasks) {
        foreach ($tasks as $id => $task) {
            echo "$id - $task <br>";
        }
    }
    /*echo "<pre>";
    print_r($tpm);*/
?>