<?php 
try{

    session_start();
    $dbhost= "localhost";
    $dbusername= "root";
    $dbpassword = "Senpai12!";
    $dbname = "destined_duo";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    $qry = "SELECT interest FROM user_interests WHERE username = :username";

    $pstmt = $conn->prepare($qry);

    $pstmt->execute(array(":username" => $_SESSION['username']));

    $interests_array = $pstmt->fetchall();


    $temp_array = array();

    if ($interests_array) {
        foreach ($interests_array as $interest) {
            // echo "Current interest: " . $interest[0];
            if (!(in_array($interest[0], $temp_array))) {
                print_r("<span class = 'interest_block'>" . $interest[0] . "</span>");
            }
            array_push($temp_array, $interest[0]);
        }
        array_push($temp_array, $interests_array[0][0]);
        // print_r($interests_array[0][0]);
    } else {
        echo "<h2>  You have no Interests! </h2>";
    }


} catch (Exception $error){
    echo "There was an error in interests.php. Error recieved: ". $error->getMessage();
}
?>