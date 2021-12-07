<?php   
    $user = "root";
    $pass = "Aneeshkadali_888";

    // destroy any active sessions
    session_start();
    $_SESSION = array();
    session_destroy();
    $_SESSION['logon'] = false;
    // create connection
    $dbconn = new PDO("mysql:host=localhost;dbname=destined_duo1",$user,$pass);
    // check connection
    if (!$dbconn) {
       echo "Connection failed!";
    }

    // trim sql injections!
    $user = stripslashes(htmlspecialchars(trim($_POST["username"])));
    $code = stripslashes(htmlspecialchars(trim($_POST["password"])));

    if(empty($code)) {
        $password_error = "Please insert your password";
    } if(empty($user)) {
        $username_error = "Please insert your username";
    } else if (!empty($code) && !empty($user)) {
        // query to check for user/password
        $hash= hash("sha256", $code);
        $code = "";
        $query = "SELECT * FROM users WHERE username='$user' AND password='$hash'";
        $result = $dbconn->query($query);
        $entry = $result->fetch();
        
        if (!empty($entry)){
            // CHECK THAT RESULT IS RETURNED
            // user session started
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['logon'] = true;                      
            $_SESSION['userid'] = $entry["id"];
            $_SESSION['fname'] = $entry['fname'];
            $_SESSION['lname'] = $entry['lname'];
            $_SESSION['email'] = $entry['email'];
            $_SESSION['is_admin'] = $entry['is_admin'];
            // add pages based off admin
            header("Location: admin.php");
        } else {
            $found_error = "User not found";
            include("login.php");
        }
    }
    include("login.php")
?>