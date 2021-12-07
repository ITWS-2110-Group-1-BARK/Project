<?php

function change_fname($change) {
    session_start();
    $dbhost= "localhost";
    $dbusername= "root";
    $dbpassword = "";
    $dbname = "destined_duo1";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    try{

    $qry = "UPDATE users SET fname = :fname WHERE username = :username";

    $pstmt = $conn->prepare($qry);

    $pstmt->execute(array(":fname" => $change, ":username" => $_SESSION['username']));
    $_SESSION['fname'] = $change;

    } catch (Exception $error) {
        echo "There was an error in deleting archive. Error recieved: ". $error->getMessage();
    }
}

function change_lname($change) {
    session_start();
    $dbhost= "localhost";
    $dbusername= "root";
    $dbpassword = "";
    $dbname = "destined_duo1";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    try{

    $qry = "UPDATE users SET lname = :lname WHERE username = :username";

    $pstmt = $conn->prepare($qry);

    $pstmt->execute(array(":lname" => $change, ":username" => $_SESSION['username']));
    $_SESSION['lname'] = $change;

    } catch (Exception $error) {
        echo "There was an error in deleting archive. Error recieved: ". $error->getMessage();
    }
}


function change_email($change) {
    session_start();
    $dbhost= "localhost";
    $dbusername= "root";
    $dbpassword = "";
    $dbname = "destined_duo1";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    try{

    $qry = "UPDATE users SET email = :email WHERE username = :username";

    $pstmt = $conn->prepare($qry);

    $pstmt->execute(array(":email" => $change, ":username" => $_SESSION['username']));
    $_SESSION['email'] = $change;

    } catch (Exception $error) {
        echo "There was an error in deleting archive. Error recieved: ". $error->getMessage();
    }
}


function change_desc($change) {
    session_start();
    $dbhost= "localhost";
    $dbusername= "root";
    $dbpassword = "";
    $dbname = "destined_duo1";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    try{

    $qry = "UPDATE profile_information SET description = :desc WHERE username = :username";

    $pstmt = $conn->prepare($qry);

    $pstmt->execute(array(":desc" => $change, ":username" => $_SESSION['username']));
    $_SESSION['desc'] = $change;

    } catch (Exception $error) {
        echo "There was an error in deleting archive. Error recieved: ". $error->getMessage();
    }
}





    if (isset($_POST['fname'])) {
        change_fname($_POST['fname']);

    } else if (isset($_POST['lname'])) {
        change_lname($_POST['lname']);
        
    } else if (isset($_POST['email'])) {
        change_email($_POST['email']);

    } else if (isset($_POST['desc'])) {
        change_desc($_POST['desc']);

    } else {
        echo "lol this didn't work";
    }


?>
