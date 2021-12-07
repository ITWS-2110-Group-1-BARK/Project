<?php 
session_start(); 
// create or continue

$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "";
$dbname = "destined_duo1";

$dbconn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$dbconn) {
    echo "Connection failed!";
}

if(isset($_POST['redirect'])){
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

     function getnextid($dbconn){
        $sqlget = "SELECT id FROM user_interests ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($dbconn,$sqlget); 
        $row = mysqli_fetch_assoc($result);
        $userid = $row['id']+1;
        return $userid;
     }

    function addNewInterest($dbconn,$id,$username,$interesttype){
        $sql2 = "INSERT INTO user_interests (id, username, interest) VALUES ('$id', '$username', '$interesttype')";
        try{    
            mysqli_query($dbconn,$sql2); 
        } catch(mysqli_sql_exception $e) {
          echo $sql2 . "<br>" . $e->getMessage();
        }
    }

     $fname = validate($_POST['firstName']);
     $lname = validate($_POST['lastName']);
     $email = validate($_POST['email']);
     $uname = validate($_POST['usernamei']);
     $pass = validate($_POST['password']);
     $age = validate($_POST['age']);
     $interest = validate($_POST['interest']);
     $interest2 = validate($_POST['interest2']);
     $interest3 = validate($_POST['interest3']);
     $interest4 = validate($_POST['interest4']);
     $interest5 = validate($_POST['interest5']);
     $hash = hash("sha256", $pass);
     $pass = "";
     if (empty($fname)) {
        header("Location: sighup.php?error=First Name is required");
    } else if(empty($lname)) {
        header("Location: sighup.php?error=Last Name is required");
        exit();
    } else if(empty($age)) {
        header("Location: sighup.php?error=Age is required");
        exit();
    } else if(empty($uname)) {
        header("Location: sighup.php?error=Username is required");
        exit();
    }else if(empty($hash)) {
        header("Location: signup.php?error=Password is required");
        exit();
    } else {
       $sql = "INSERT INTO users (username, password, fname, lname, age, email) VALUES ('$uname','$hash','$fname','$lname',$age,'$email')";
        try{
            mysqli_query($dbconn,$sql); 
        } catch(mysqli_sql_exception $e) {
          echo $sql . "<br>" . $e->getMessage();
        }
    
        if(!empty($interest)){
            $nextid = getnextid($dbconn);
            addNewInterest($dbconn,$nextid,$uname,$interest);
        }
        if(!empty($interest2)){
            $nextid = getnextid($dbconn);
            addNewInterest($dbconn,$nextid,$uname,$interest2);
        }
        if(!empty($interest3)){
            $nextid = getnextid($dbconn);
            addNewInterest($dbconn,$nextid,$uname,$interest3);
        }
        if(!empty($interest4)){
            $nextid = getnextid($dbconn);
            addNewInterest($dbconn,$nextid,$uname,$interest4);
        }
        if(!empty($interest5)){
            $nextid = getnextid($dbconn);
            addNewInterest($dbconn,$nextid,$uname,$interest5);
        }
        $sql3 = "INSERT INTO profile_information (username, description, picture) VALUES ('$uname','','profile_images/default.png')";
        try{
            mysqli_query($dbconn,$sql3); 
        } catch(mysqli_sql_exception $e) {
          echo $sql3 . "<br>" . $e->getMessage();
        }
        header("Location: login.php");
    }

}
  ?>