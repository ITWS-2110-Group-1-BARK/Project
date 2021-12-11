<?php
    $search = '';
    $search = $_POST['search'];
    $user = 'root';
    $pass= 'Aneeshkadali_888';
    try{
        $dbh = new PDO('mysql:host=localhost;dbname=destined_duo4', $user, $pass);
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
    }

    $query = "SELECT fname, lname, description, picture, u.username as username FROM user_interests UI, profile_information PI, users U WHERE UI.username = PI.username AND UI.username = U.username AND UI.interest =  '$search' ;";
    
    try{
        $result = $dbh->query($query)->fetchall();
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
    }



    $result = $dbh->query($query)->fetchall(PDO::FETCH_ASSOC);
   // echo count($result);
    //$dbh = null;
	// Encode array into json format
	echo json_encode($result);
?>