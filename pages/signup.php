<?php
// define variables and set to empty values
$nameErr ="";
?>
<!DOCTYPE html>
<head lang="en">
    <title>Sign-Up</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
   	
</head>

<body class="signupBody">
    <!-- The navigation bar -->
	<div class="nav-bar">
		<img id="logo" src="../logo.png" alt= "LOGO">
		<a class = "active" href="#">Sign Up</a>
<<<<<<< Updated upstream:pages/signup.php
		<a  href="login.php">Login</a>
		<a href="profile.php">Profile</a>
		<a href="explore.php">Explore</a>
        <a href="../homepage.html">Homepage</a>
=======
    <a href="logout.php">Logout</a>
		<a  href="login.php">Login</a>
		<a href="profile.php">Profile</a>
		<a href="explore.php">Explore</a>
        <a href="../homepage.php">Homepage</a>
>>>>>>> Stashed changes:pages/signup.html
	</div>
    
    <form action="register.php" id="signupForm"  method="post">
      <ul id="progressbar">
        <li class="active">Personal Details</li>
        <li>Account Setup</li>
        <li>Interests</li>
      </ul>
      <!--each fieldset is form of information for user to fill out-->
      <fieldset>
        <h2 class="formTitle">PERSONAL INFORMATION</h2>
        <input type="text" name="firstName" id="firstName" placeholder = "First Name" required>
        <input type="text" name="lastName" id="lastName" placeholder = "Last Name" required>
        <input type="text" name="age" id="age" placeholder = "Age" required>
        <input type="button" name="next" class="next action-button" value="next">
      </fieldset>

      <fieldset>
          <h2 class="formTitle">ACCOUNT SETUP</h2>
          <input type="text" name="email" id="email" placeholder = "Email" required>
          <input type="text" name="usernamei" id="usernamei" placeholder = "Username" required>
          <input type="text" name="password" id="password" placeholder = "Password" required>
          <input type="button" name="previous" class="previous action-button-previous" value="previous">
          <input type="button" name="next" class="next action-button" value="next">
      </fieldset>
      <fieldset>
              <!-- Repeater Heading -->
              <h2 class="formTitle">INTERESTS</h2>
              <input type="text" name="interest" id="interest" placeholder = "Interest" required>
              <input type="text" name="interest2" id="interest2" placeholder = "Interest">
              <input type="text" name="interest3" id="interest3" placeholder = "Interest">
              <input type="text" name="interest4" id="interest4" placeholder = "Interest">
              <input type="text" name="interest5" id="interest5" placeholder = "Interest">
             
            <input type="button" name="previous" class="previous action-button-previous" value="previous">
            <!--currently redirects to homepage.html-->
            <button type="submit" id="redirect" name="redirect" class="submit action-button">submit</button> 
            
          
      </fieldset>
    </form>

<script
    src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
    integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/path/to/jquery.repeater.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous">
</script>
<script src="repeater.js"></script>
<script src="signup.js"></script>
</body>
</html>