<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Explore</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <script type="text/javascript" src="explore5_.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<div id = "body">
		<!-- The navigation bar -->
	<div class="nav-bar">
		<img id="logo" src="../logo.png" alt= "LOGO">
		<a href="signup.html">Sign Up</a>
		<a href="login.html">Login</a>
		<a href="profile.html">Profile</a>
		<a class = "active" href="explore.html">Explore</a>
        <a href="../homepage.html">Homepage</a>
	</div>
	<div class="pcontainer">
		<h1>Find a Friend!</h1> 
        <p>Search for other users who share the same interests as yourselves to find new friends!</p>
        <div id="slideshow">
            <div class="slide-wrapper">
                 
            <!-- Define each of the slides
             and write the content -->
              
                <div class="slide">
                    <h1 class="slide-number">
                        <img src="slideshow_images/image_1.jpg" alt="Avatar" style="width:728px;height:600px;">
                    </h1>
                </div>
                <div class="slide">
                    <h1 class="slide-number">
                        <img src="slideshow_images/image_2.jpg" alt="Avatar" style="width:728px;height:600px;">
                    </h1>
                </div>
                <div class="slide">
                    <h1 class="slide-number">
                        <img src="slideshow_images/image_3.jpg" alt="Avatar" style="width:728px;height:600px;">
                    </h1>
                </div>
                <div class="slide">
                    <h1 class="slide-number">
                        <img src="slideshow_images/image_4.jpg" alt="Avatar" style="width:728px;height:600px;">
                    </h1>
                </div>
            </div>
            <input type="text" placeholder="Find Users..">
        </div>
    

	<h5> Discover Who's Out There </h5>
    <hr/><hr/>
</div>
<div>
	<p text-align:center>
		<input type="search" id="search" name = "search" placeholder="Search for interests.." title="Type in a name">
		<button onclick="myFunction()">Search</button>
	</p>
</div>
<div id="dyn-cont"></div>

</html>