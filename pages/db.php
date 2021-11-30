<?php   
    $user = "root";
    $pass = "briankeith4";

    // destroy any active sessions
    session_start();
    $_SESSION = array();
    session_destroy();
    $_SESSION['logon'] = false;

    // create connection
    $dbconn = new PDO("mysql:host=localhost;dbname=project",$user,$pass);
    // check connection
    if (!$dbconn) {
       echo "Connection failed!";
    }
    // if the info was submitted

    // trim sql injections!
    $user = htmlspecialchars(trim($_POST["username"]));
    $code =htmlspecialchars(trim($_POST["password"]));

    $hash= hash("sha256", $code);
    $code = "";

    if (empty($user)) {
        header("Location: login.php?error=User Name is required");
        exit();
    } else if(empty($hash)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        // query to check for user/password
        $query = "SELECT * FROM users WHERE username='$user' AND password='$hash'";
        $result = $dbconn->query($query);
        $entry = $result->fetch();

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
        
    }
?>