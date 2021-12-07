<?php 
try{

    session_start();
    $dbhost= "localhost";
    $dbusername= "root";
    $dbpassword = "Aneeshkadali_888";
    $dbname = "destined_duo4";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    $qry = "SELECT picture FROM profile_information WHERE username = :username";

    $pstmt = $conn->prepare($qry);

    $pstmt->execute(array(":username" => $_SESSION['username']));

    $img = $pstmt->fetchall();
    if ($img) {
        print_r("<img id = 'profile_picture' src='../" . $img[0][0] . "' alt='Profile Picture'>");
    } else {
        echo "<img id = 'profile_picture' src='../profile_images/default.png' alt='Profile Picture'>";
    }


} catch (Exception $error){
    echo "There was an error in PFP.php. Error recieved: ". $error->getMessage();
}

