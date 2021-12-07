<?php 
  session_start();
  if (isset($_SESSION['username']) && isset($_SESSION['fname'])) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body>
    <!-- The navigation bar -->
    <div class="nav-bar">
		<img id="logo" src="../logo.png" alt= "LOGO">
        <a href="signup.php">Sign Up</a>
        <a href="logout.php">Logout</a>
        <a href="login.php">Login</a>
		<a class = "active" href="profile.php">Profile</a>
		<a href="explore.php">Explore</a>
        <a href="../homepage.php">Homepage</a>
	</div>
    <br/><br/><br/>

    <div id="dialog" title="Add Interests">
        <form onsubmit = "add_interests(this);" id = "add_interests">
            <label for="interest"> Interest Name: </label> </br>
            <input type = "text" id = "interest_name" name = "interest" placeholder = "type new interest name"> <br>
            <input type = "submit" value= "Submit">
        </form>
        </br>
        <div id = "error_msg"></div>
    </div>

    <div class = "profile_container">
     
        <!-- <img id = "profile_picture" src="../profile_images/profile_pic.jpg" alt="Profile Picture">  -->
        <!-- Has the possibility to become a profile changer in the future -->
        <div class = "profile_header">

        </div>

        <div class = "social_media_header">
            
        </div>
        

        <button type="button" class = "button_pfp" onclick = "window.location.href= 'edit_profile.php'">Edit Profile Page</button>
        <br/><br/><br/><br/>

        <div class = "description_container">
            <h3 class = "desc_header hover-underline-animation_3">About Me</h3>
            <div class = "desc">
                <p id = "desc"></p>
        </div>
        </div>

        <br/><br/><br/>

        <div class = "contact_information">
            <h3 class = "desc_header hover-underline-animation_3 hover-underline-animation">Contact Information</h3>
            <table id = "contact_info"> 
                <tr class = "contact_row"> 
                    <th class = "contact_row_title">Email:</th>
                    <td><a class = "contact_text"><?php 
                    if (empty($_SESSION['email'])) {
                        echo "No email saved";
                    } else {
                        echo $_SESSION['email'];
                     }
                      ?></a></td>
                </tr>
            </table>
        </div>

        <br/><br/><br/>

        <div class = "description_container">
            <h3 class = "desc_header hover-underline-animation_3">Interests</h3>
            <br/>
            <div id = "interests">

            </div>
            <!-- <span class = "interest_block">Technology</span>
            <span class = "interest_block">Sports</span>
            <span class = "interest_block">Soccer</span>
            <span class = "interest_block">Pets</span>
            <span class = "interest_block">Dogs</span>
            <span class = "interest_block">Reading</span> -->
            <span class = "add"> <span class = "interest_block"> + </span> </span>
        </div>
     
    </div>

    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src= "profile.js" defer></script>
</body>
</html>

<?php 
} else {
  header("Location: login.php");
  exit();
}
?>