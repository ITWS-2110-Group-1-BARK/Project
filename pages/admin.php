<?php 
    session_start(); 

    if ($_SESSION['is_admin'] == 1) {
        // add admin 
        header("Location: explore11.html");
    } else {
        header("Location: explore00.html");
        exit();
    }
?>
