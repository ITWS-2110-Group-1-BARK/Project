<?php 
    session_start(); 

    if ($_SESSION['is_admin'] == 1) {
        // add admin 
        header("Location: profile.php");
    } else {
        header("Location: profile.php");
        exit();
    }
?>
