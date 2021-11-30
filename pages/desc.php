<?php 
try{

    session_start();
    $dbhost= "localhost";
    $dbusername= "root";
    $dbpassword = "!";
    $dbname = "destined_duo";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    $qry = "SELECT description FROM profile_information WHERE username = :username";

    $pstmt = $conn->prepare($qry);

    $pstmt->execute(array(":username" => $_SESSION['username']));

    $desc = $pstmt->fetchall();
    if ($desc) {
        print_r($desc[0][0]);
    } else {
        echo "User description not yet written. Write your profile description today to start connecting!";
    }


} catch (Exception $error){
    echo "There was an error in desc.php. Error recieved: ". $error->getMessage();
}
?>