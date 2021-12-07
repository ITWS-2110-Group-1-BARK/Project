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
    <script type="text/javascript">
        function FocusOut(){
            if(window.opener != null && !window.opener.closed) {
                window.opener.HideModalDiv();
            }
        }
        window.onunload = FocusOut;

    </script>
</head>
<?php
    //$search = '';
    //$search = $_POST['search'];
    $user = 'root';
    $pass= 'Aneeshkadali_888';
    $dbh = new PDO('mysql:host=localhost;dbname=destined_duo1', $user, $pass);
    /*if (php_sapi_name() == 'cli') {
        $args = $_SERVER['argv'];
    } else {
        parse_str($_SERVER['QUERY_STRING'], $args);
    }
    echo $args[0];*/
    $username = '';
    if (isset($_GET["username"]))
    {
        $username = $_GET["username"];
    }

    $query = "SELECT fname, lname, description, picture, age, email, interest FROM user_interests UI, profile_information PI, users U WHERE UI.username = PI.username AND UI.username = U.username AND U.username = '$username';";
    $results = $dbh->query($query)->fetchall(PDO::FETCH_ASSOC);

    $fname = $results[0]['fname'];
    $lname = $results[0]['lname'];
    $description = $results[0]['description'];
    $picture = $results[0]['picture'];
    $age = $results[0]['age'];
    $email = $results[0]['email'];

    $name = $fname . ' ' .  $lname;
    $interests = '';
    foreach($results as $result){
        $interests = $interests . ' ' . $result['interest'];
    };

    $query1 = "SELECT social_media, link FROM profile_media WHERE username = '$username' order by id desc;";
    $social_medias = $dbh->query($query1)->fetchall(PDO::FETCH_ASSOC);





    


?>
<body onload="myFunction3();">
    <div class = "popupcontainer">
        <h4 style="font-size:45px"> <?php echo $name ?> </h4>
        <img src="<?php echo $picture ?>" alt="Profile Image" style="width:300px;height:300px;display:block;margin-left: auto;margin-right: auto;">
        <p style = "font-size:22px;margin-left: auto;margin-right: auto;"> <?php echo $description ?> </p>
        <h2 style="font-size:25px"> Age:  <?php echo $age ?> </h2>
        <h2 style="font-size:25px"> Email: <?php echo $email ?>  </h2>
        <h2 style="font-size:25px"> Interests: <?php echo $interests ?> </h2>
    </div>
</body>
<div class = "footer" style = "background-color: transparent; postion: fixed;display:block;margin-left: auto;margin-right: auto;">
    <div class = "flex-container">
            <div class = "social_media_header" style = "background-color: transparent;">
                <?php
                    foreach($social_medias as $sm){
                        $link = $sm['link'];
                        $type = $sm['social_media'];
                        if ($type == "Twitter"){
                            $image = "../profile_images/twitter_icon.png";
                        }
                        elseif ($type == "Instagram"){
                            $image = "../profile_images/instagram_icon.png";
                        }
                        elseif ($type == "LinkedIn"){
                            $image = "../profile_images/linkedin_icon.png";
                        }
                        else{
                            $image = "../profile_images/message_icon.png";
                        }
                ?>
                <div class = "social_media_header_2">
                    <a class = "hover-underline-animation_social_media" href = "<?php echo $link ?>">
                        <img src = "<?php echo $image ?>" alt = "Message">
                    </a>
                </div>
            <?php }; ?>
            </div>

    </div>
    </div>
</html>
