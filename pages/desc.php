<?php 

    function get_desc() {
        try{
            session_start();
            $dbhost= "localhost";
            $dbusername= "root";
            $dbpassword = "";
            $dbname = "destined_duo1";

            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

            $qry = "SELECT description FROM profile_information WHERE username = :username";

            $pstmt = $conn->prepare($qry);

            $pstmt->execute(array(":username" => $_SESSION['username']));

            $desc = $pstmt->fetchall();
            if ($desc[0][0] != "") {
                print_r($desc[0][0]);
            } else {
                echo "User description not yet written. Write your profile description today to start connecting!";
            }
        } catch (Exception $error){
            echo "There was an error in desc.php. Error recieved: ". $error->getMessage();
        }
    }


    function get_name() {
        try{
            session_start();
            $dbhost= "localhost";
            $dbusername= "root";
            $dbpassword = "";
            $dbname = "destined_duo1";

            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

            $qry = "SELECT fname, lname FROM users WHERE username = :username";

            $pstmt = $conn->prepare($qry);

            $pstmt->execute(array(":username" => $_SESSION['username']));

            $name = $pstmt->fetchall();
            if ($name[0][0] != "") {
                // print_r($name);
                // print_r($name[0][0]);
                // print_r($name[0][1]);
                print_r("<h3 id = 'username' class = 'hover-underline-animation'>" . $name[0][0] . " " . $name[0][1] . " </h3> <h4 id = 'mini_username'> Student at Rensselaer Polytechnic Institute (RPI)</h4>");
        
            } else {
                echo "User description not yet written. Write your profile description today to start connecting!";
            }

        } catch (Exception $error){
            echo "There was an error in desc.php. Error recieved: ". $error->getMessage();
        }
        
    }


    function get_social_media($social_media_name) {
        try{
            session_start();
            $dbhost= "localhost";
            $dbusername= "root";
            $dbpassword = "";
            $dbname = "destined_duo1";

            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

            $qry = "SELECT link FROM profile_media WHERE username = :username AND social_media = :social_media";

            $pstmt = $conn->prepare($qry);

            $pstmt->execute(array(":username" => $_SESSION['username'], ":social_media" => $social_media_name));
            $link = $pstmt->fetchall();

            // print_r($link[0][0]);

            if ($link) {
                echo "<input id = 'social_med_link' type='text'  onchange = 'change_sm(`" . $social_media_name . "`, this);' required value = '" . $link[0][0] . "'>";
            } else {
                echo "<input id = 'social_med_link'  type='text' onchange = 'change_sm(`" . $social_media_name . "`, this);' required value = ''>";
            }
            

        } catch (Exception $error){
            echo "There was an error in desc.php. Error recieved: ". $error->getMessage();
        }
    }


    function change_sm($social_media_name, $new_sm_link) {
        try{
            session_start();
            $dbhost= "localhost";
            $dbusername= "root";
            $dbpassword = "";
            $dbname = "destined_duo1";

            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

            $qry = "SELECT link FROM profile_media WHERE username = :username AND social_media = :social_media";

            $pstmt = $conn->prepare($qry);

            $pstmt->execute(array(":username" => $_SESSION['username'], ":social_media" => $social_media_name));
            $link = $pstmt->fetchall();

            if ($new_sm_link == "" && $link) {
                echo "we need to delete this row";
                $qry_2 = "DELETE FROM profile_media WHERE social_media = :social_media AND username = :username";
                $pstmt_2 = $conn->prepare($qry_2);
                $pstmt_2->execute(array(":social_media" => $social_media_name, ":username" => $_SESSION['username']));
                echo "we have successfully deleted the row";
            } else if ($link) {
                echo "we need to edit this row";
                $qry_2 = "UPDATE profile_media SET link = :link WHERE social_media = :social_media AND username = :username";
                $pstmt_2 = $conn->prepare($qry_2);
                $pstmt_2->execute(array(":link" => $new_sm_link, ":social_media" => $social_media_name, ":username" => $_SESSION['username']));
                echo "we have successfully changed the row";
            } else {
                echo "we need to create a new row for this social media";
                $qry_2 = "INSERT INTO `profile_media` (`username`, `social_media`, `link`) VALUES (:username, :social_media, :link)";
                $pstmt_2 = $conn->prepare($qry_2);
                $pstmt_2->execute(array(":link" => $new_sm_link, ":social_media" => $social_media_name, ":username" => $_SESSION['username']));
                echo "we have successfully created a new row";
            }

            // print_r($link[0][0]);
            // echo $social_media_name;
            // echo $new_sm_link;
            

        } catch (Exception $error){
            echo "There was an error in desc.php. Error recieved: ". $error->getMessage();
        }
    }

    function get_sm() {
        try{
            session_start();
            $dbhost= "localhost";
            $dbusername= "root";
            $dbpassword = "";
            $dbname = "destined_duo1";

            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

            $qry = "SELECT social_media, link FROM profile_media WHERE username = :username";

            $pstmt = $conn->prepare($qry);

            $pstmt->execute(array(":username" => $_SESSION['username']));

            $sm_array = $pstmt->fetchall();
            
            // print_r($sm_array);
            
            if ($sm_array) {
                foreach($sm_array as $sm) {
                    if ($sm[1] != "") {
                        print_r("<div class = 'social_media_header_2'> <a class = 'hover-underline-animation_social_media' href = 'https://" . $sm[1] . "'> <img src = '../profile_images/" . $sm[0] . "_icon.png' alt = '" . $sm[0] . "'> </a> </div>");
                    }
                }
            }

        } catch (Exception $error){
            echo "There was an error in desc.php. Error recieved: ". $error->getMessage();
        }
    }

    if (isset($_POST['desc'])) {
        get_desc();
    } else if (isset($_POST['name'])) {
        get_name();
    } else if (isset($_POST["social_media_grab"])) {
        get_social_media($_POST["social_media_grab"]);
    } else if (isset($_POST['change_sm'])) {
        change_sm($_POST['change_sm'], $_POST['new_value_sm']);
    } else if (isset($_POST["sm"])) {
        get_sm();
    }


    // <div class = "profile_header">
            // <h3 id = "username"  class="hover-underline-animation"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; 
            
 //         <h4 id = "mini_username"> Student at Rensselaer Polytechnic Institute (RPI)</h4>
    //     </div> -->

?>