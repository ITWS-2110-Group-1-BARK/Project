<?php
    $search = '';
    $search = $_POST['search'];
    $user = 'root';
<<<<<<< Updated upstream:pages/explore_search2.php
    $pass= '!';
    $dbh = new PDO('mysql:host=localhost;dbname=destined_duo', $user, $pass);
=======
    $pass= 'Aneeshkadali_888';
    $dbh = new PDO('mysql:host=localhost;dbname=destined_duo1', $user, $pass);
>>>>>>> Stashed changes:pages/explore_search3.php

    $query = "SELECT fname, lname, description, picture FROM user_interests UI, profile_information PI, users U WHERE UI.username = PI.username AND UI.username = U.username AND UI.interest =  '$search' ;";
    //echo $query;
    /*try{
        $result = $dbh->query($query)->fetchall();
        $result = $dbh->query($query)->fetchall();
        //echo 'hello everyon';
       // echo $result[0][1];
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
    }
    */



    $result = $dbh->query($query)->fetchall(PDO::FETCH_ASSOC);
   // echo count($result);
    //$dbh = null;
	// Encode array into json format
	echo json_encode($result);
?>