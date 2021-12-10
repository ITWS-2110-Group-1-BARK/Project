<?php 

function load() {
    try{
        session_start();
        $dbhost= "localhost";
        $dbusername= "root";
        $dbpassword = "Aneeshkadali_888";
        $dbname = "destined_duo4";

        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

        $qry = "SELECT interest FROM user_interests WHERE username = :username";

        $pstmt = $conn->prepare($qry);

        $pstmt->execute(array(":username" => $_SESSION['username']));

        $interests_array = $pstmt->fetchall();


        $temp_array = array();

        if ($interests_array) {
            foreach ($interests_array as $interest) {
                
                if (!(in_array($interest[0], $temp_array))) {
                    print_r("<span class = 'interest_block'> <span class='delete' onclick = 'delete_interest(`" . $interest[0] . "`);'>&times;</span>" . $interest[0] . "</span>");
                }
                array_push($temp_array, $interest[0]);
            }
            array_push($temp_array, $interests_array[0][0]);

        } else {
            echo "<h2>  You have no Interests! </h2>";
        }


    } catch (Exception $error){
        echo "There was an error in interests.php. Error recieved: ". $error->getMessage();
    }
}

function delete_interest($interest) {
    try{
        session_start();
        $dbhost= "localhost";
        $dbusername= "root";
        $dbpassword = "Aneeshkadali_888";
        $dbname = "destined_duo4";

        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

        // $qry = "SELECT interest FROM user_interests WHERE username = :username";
        $qry = "DELETE FROM user_interests WHERE interest = :interest AND username = :username";

        $pstmt = $conn->prepare($qry);

        $pstmt->execute(array("interest" => $interest, ":username" => $_SESSION['username']));

        echo "successfully deleted";
        echo interest;


    } catch (Exception $error){
        echo "There was an error in interests.php in delete_interest. Error recieved: ". $error->getMessage();
    }
}


function add_interest($interest) {
    try{
        session_start();
        $dbhost= "localhost";
        $dbusername= "root";
        $dbpassword = "Aneeshkadali_888";
        $dbname = "destined_duo4";

        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

        $qry = 'SELECT * FROM user_interests WHERE username = :username AND interest = :interest';
        // $qry = "INSERT INTO user_interests (username, interest) VALUE (username = :username, interest = :interest)";

        $pstmt = $conn->prepare($qry);

        $pstmt->execute(array(":username" => $_SESSION['username'], ":interest" => $interest));

        $interest_present = $pstmt->fetchall();


        if ($interest_present) {
            echo "This interest is already present within your profile!";
        } else {

            $qry_2 = "INSERT INTO `user_interests` (`username`, `interest`) VALUE (:username, :interest);";
            $pstmt_2 = $conn->prepare($qry_2);
            
            $pstmt_2->execute(array(":username" => $_SESSION['username'], ":interest" => $interest));
        }

       


    } catch (Exception $error){
        echo "There was an error in interests.php in add_interest. Error recieved: ". $error->getMessage();
    }
}


if (isset($_POST['LOAD'])) {
    load();
} else if (isset($_POST['delete'])) {
    delete_interest($_POST['delete']);
} else if (isset($_POST["add_interest"])) {
    add_interest($_POST['add_interest']);
}
?>