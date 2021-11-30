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
    if (isset($_POST['username']) && isset($_POST['password'])){
        // trim sql injections!
        $user = htmlspecialchars(trim($_POST["username"]));
        $code =htmlspecialchars(trim($_POST["password"]));

        $hash= hash("sha256", $code);
        $code = "";

        // query to check for user/password
        $query = "SELECT * FROM users WHERE username='$uname' AND password='$hash'";
        $result = $dbconn->query($query);
        $entry = $result->fetch();
        session_start();
        // user is logged on, save session in
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
    else {
        header("Location: login.html");
    }
?>