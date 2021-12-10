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
    <title>Edit Account Settings</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
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

        <div class = "profile_container">

            <div class = "edit">
            <form action = "" method = "post" class = "center">
                <table >
                    <tr>
                        <td colspan = "6" class = "active"> <h2>Edit Your Profile</h2> </td>
                    </tr>

                    
                    <tr>
                        <td style = "font-weight: bold;" >Change Your First Name: </td>
                        <td><input onchange = "change_pfp('fname', this);" class = "form-control" type="text" name = "fname" required value = "<?php echo $_SESSION['fname']; ?>"></td>
                    </tr>
                    

                    <tr>
                        <td style = "font-weight: bold;" >Change Your Last Name: </td>
                        <td><input onchange = "change_pfp('lname', this);" class = "form-control" type="text" name = "lname" required value = "<?php echo $_SESSION['lname']; ?>"></td>
                    </tr>

                    <tr> 
                        <td style = "font-weight: bold;" >Change Your Email: </td>
                        <td><input onchange = "change_pfp('email', this);" class = "form-control" type="text" name = "email" required value = "<?php echo $_SESSION['email']; ?>"></td>
                    </tr>

                    <tr> 
                        <td style = "font-weight: bold;" >Change Your Description: </td>
                        <td>
                            <textarea onchange = "change_pfp('desc', this);" class = "form-control" id = "desc_edit" type="text" name = "desc" required value = "<?php echo $_SESSION['desc']; ?>">  </textarea>
                        </td>
                    </tr>

                </table>
            </form>  
            <br/>
            <p class = "msg" id = "profile_msg"></p>

            <br/>

            <h2>Edit Social Media Links: </h2>
            <form id = "social_media_form" method = "POST">
                <select id = "social_medias" onchange = "changeFunc();">
                    <option value = ""> Select a social media </option>
                    <option value = "Instagram"> Instagram </option>
                    <option value = "Twitter"> Twitter </option>
                    <option value = "LinkedIn"> LinkedIn </option>
                    <option value = "Other"> Other </option>
                </select>
            </form>

            <div id = "social_media_box">
                <label style = "font-weight: bold;"> New Link: </label>
                <div id = "sc_input">
                    <!-- <input id = "social_med_link" required_value = "">  -->
                </div>
                <br/>
            <p class = "msg" id = "sm_msg"></p>
            </div>

            <br/><br/>

            <h2> Change Profile Picture: </h2>
            <button type="button" class = "no_float" onclick = "change_pfpicture('default.png');">Default Profile</button>
            <button type="button" class = "no_float" onclick = "change_pfpicture('female.png');">Default 2 Profile</button>
            <button type="button" class = "no_float" onclick = "change_pfpicture('dog.png');">Dog Profile</button>
            <button type="button" class = "no_float" onclick = "change_pfpicture('cat.jpeg');">Cat Profile</button>
            <p class = "msg" id = "pfp_msg"></p>
            </div>


            <br/><br/><br/>

            <button type="button" class = "button_pfp" onclick = "window.location.href= 'profile.php'">Return to Your Profile</button>
            <br/><br/><br/>
        </div>




    <script src="https://code.jquery.com/jquery-1.12.4.js" defer></script>
    <script src= "profile.js" defer></script>
</body>
</html>

<?php 
} else {
  header("Location: login.php");
  exit();
}
?>