<?php 
    session_start(); 

    if ($_SESSION['is_admin'] == 1) {
        // add admin location
        header("Location: explore.php");
    } else {
        header("Location: explore.php");
        exit();
    }
?>
