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
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <!-- The navigation bar -->
    <div class="nav-bar">
		<img id="logo" src="../logo.png" alt= "LOGO">
        <a href="signup.php">Sign Up</a>
        <a href="login.php">Login</a>
		<a class = "active" href="profile.php">Profile</a>
		<a href="explore.php">Explore</a>
        <a href="../homepage.php">Homepage</a>
	</div>
    <br/><br/><br/>

    <div class = "profile_container">
     
        <!-- <img id = "profile_picture" src="../profile_images/profile_pic.jpg" alt="Profile Picture">  -->
        <!-- Has the possibility to become a profile changer in the future -->
        <div class = "profile_header">
            <h3 id = "username"  class="hover-underline-animation"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h3>
            <h4 id = "mini_username"> Student at Rensselaer Polytechnic Institute (RPI)</h4>
        </div>

        <div class = "social_media_header">
            <div class = "social_media_header_2">
                <a class = "hover-underline-animation_social_media" href = "#">
                    <img src = "../profile_images/message_icon.png" alt = "Message" >
                </a>
            </div>

            <div class = "social_media_header_2">
                <a class = "hover-underline-animation_social_media" href = "https://www.linkedin.com/in/brianna-lopez-ba5747168/">
                    <img src = "../profile_images/linkedin_icon.png" alt = "LinkedIn">
                </a>
            </div>

            <div class = "social_media_header_2">
                <a class = "hover-underline-animation_social_media" href = "https://twitter.com/Brianna35561140">
                    <img src = "../profile_images/twitter_icon.png" alt = "Twitter">
                </a>    
            </div>

            <div class = "social_media_header_2">
                <a class = "hover-underline-animation_social_media" href = "https://www.instagram.com/brilo0916/">
                    <img src = "../profile_images/instagram_icon.png" alt = "Instagram">
                </a>
            </div>
        </div>

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
                    <td><a class = "contact_text" href = "mailto:lopezb@rpi.edu"><?php 
                    if (empty($_SESSION['email'])) {
                        echo "No email saved";
                    } else {
                        echo $_SESSION['email'];
                     }
                      ?></a></td>
                </tr>
                <tr class = "contact_row">
                    <th class = "contact_row_title">Phone-number:</th>
                    <td><span class = "contact_text">123-456-7890</span></td>
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
        </div>
     
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src= "profile.js" defer></script>
</body>
</html>

<?php 
} else {
  header("Location: login.php");
  exit();
}
?>