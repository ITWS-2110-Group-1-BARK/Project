<?php 
    session_start(); 

    if ($_SESSION['is_admin'] == 1) {
        // add admin 
        header("Location: profile.html");
    } else {
        header("Location: profile.html");
        exit();
    }
?>
