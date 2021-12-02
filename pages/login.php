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
		<a href="signup.php">Sign Up</a>
<<<<<<< Updated upstream
=======
        <a href="logout.php">Logout</a>
>>>>>>> Stashed changes
		<a class = "active" href="login.php">Login</a>
		<a href="profile.php">Profile</a>
		<a href="explore.php">Explore</a>
        <a href="../homepage.php">Homepage</a>
	</div>
    <div class="login-form">
        <!-- <h1>PAL</h1> -->
        <div class="cnt">
            <div class="main">
                <div class="cnt2">
                    <h2>Welcome Back!</h2>
                    <form action="db.php" method="post">
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit">Login</button>
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
    