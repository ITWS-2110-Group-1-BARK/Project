<?php 
    session_start(); 

    if ($_SESSION['is_admin'] == 1) {
        // add admin 
        header("Location: explore.php");
    } else {
        header("Location: explore.php");
        exit();
    }
?>
