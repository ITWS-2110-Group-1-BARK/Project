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

  // sets login var to status of login button
  $login = isset($_POST["login"]);

  // if the login button was clicked
  if ($login){
     // trim sql injections!
     $user = htmlspecialchars(trim($_POST["username"]));
     $code =htmlspecialchars(trim($_POST["password"]));

     $hash= hash("sha256", $code);
     $code = "";

    // query to check for user/password
    $query = "SELECT * FROM users WHERE username='$uname' AND password='$hash'";
    $result = $dbconn->query($query);
    $entry = $result->fetch();

    if(true) {
        session_start();
        // user is logged on, save session in
        $_SESSION['username'] = $user;
        $_SESSION['logon'] = true;                      
        $_SESSION['userid'] = $entry["id"];
        // add pages based off admin
        $is_admin = $entry["is_admin"];
        if ($is_admin == 1) {
            header("Location: explore.php");
        } else {
            header("Location: explore.php");
        }
        
    }
    else {
        header("Location: login.html");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <title>Log-In</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <!-- The navigation bar -->
	<div class="nav-bar">
		<img id="logo" src="../logo.png" alt= "LOGO">
		<a href="signup.html">Sign Up</a>
		<a class = "active" href="login.html">Login</a>
		<a href="profile.html">Profile</a>
		<a href="explore.html">Explore</a>
        <a href="../homepage.html">Homepage</a>
	</div>
    <div class="login-form">
        <!-- <h1>PAL</h1> -->
        <div class="cnt">
            <div class="main">
                <div class="cnt2">
                    <h2>Welcome Back!</h2>
                    <form action="login.php" method="post">
                        <input type="text" name="username" placeholder="Username" required autofocus="" >
                        <input type="password" name="password" placeholder="Password">
                        <input id="lbtn" name="login" type="submit" value="Login" />
                    </form>
                </div>
                <div class="form-img">
                    <img src="../dogs2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>    
</body>
</html>