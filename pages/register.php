<?php 
session_start(); 
// create or continue

$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "mm+q8rCK";
$dbname = "destined_duo";

//$dbconn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
$dbconn = new PDO("mysql:host=localhost;dbname=destined_duo",$dbusername,$dbpassword);
if (!$dbconn) {
    echo "Connection failed!";
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

$fname;
  $pass =   $hash= $f = "";



if(isset($_POST['next1'])) {
  $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $bool = False;
  if (empty($_POST["firstName"])) {
    //echo("here");
     $nameErr = "please enter first name";
     $bool = true;
  }if(empty($_POST["lastName"])){
    $lnameErr = "please enter last name";  
    $bool = true;
  }
  if(empty($_POST["age"])){
    $ageErr = "please enter age";
    $bool = true  ;  
  } 

  if($bool == False){
    $_SESSION['fname'] = validate($_POST['firstName']);
    $_SESSION['lname'] = validate($_POST['lastName']);
    $_SESSION['age'] =  $_POST['age'];
    header("Location: accountsetup.php");
  }
  include("signup.php");    
}

if(isset($_POST['next2'])){
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bool = False;
    if (empty($_POST["email"])) {
       $emailErr = "please enter email";
       $bool = true;
    }
    if(strlen($_POST['usernamei']) < 8 ){
      if(empty($_POST["usernamei"])){
        $unameErr = "please enter username name";  
        $bool = true;
      }
      else{
        $unameErr = "username must be at least 8 characters";
        $bool = true;
      }
      
    }
    if(strlen($_POST["password"]) < 8){
      if(empty($_POST["password"])){
        $passErr = "please enter password";
        $bool = true  ;  
      }
      else{
        $passErr = "password must be at least 8 characters";
        $bool = True;
      }
      
    }
    if($bool == False){
      $email = validate($_POST['email']);
      $uname = validate($_POST['usernamei']);
      $pass = validate($_POST['password']);
      $hash = hash("sha256", $pass);
      $pass = "";
      $f = $_SESSION['fname'];
      $l = $_SESSION['lname'];
      $a = $_SESSION['age'];
      $_SESSION['uname']  = $uname;
      $sql = "INSERT INTO users (username, password, fname, lname, age, email) VALUES ('$uname','$hash','$f','$l',$a,'$email')";
      try{    
        $dbconn->exec($sql); 
        printf("New user added successfully");
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      } 
      header("Location: add_interests.php");
    }
    include("accountsetup.php");
    
  }




if(isset($_POST['redirect'])){

  
  if(empty($_POST["interest"])){
    $interestErr = "Please enter at least one interest";
    
  }
  
  else{
    $interest = validate($_POST['interest']);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     function getnextid($dbconn){
        $sqlget = "SELECT id FROM user_interests ORDER BY id DESC LIMIT 1";
        $result = $dbconn->query($sqlget)->fetch();
        //$row = mysqli_fetch_assoc($result);
        $userid = $result['id']+1;
        return $userid;
     }

    function addNewInterest($dbconn,$id,$username,$interesttype){
        $u = $_SESSION['uname'];
        $sql2 = "INSERT INTO user_interests (id, username, interest) VALUES ('$id', '$u', '$interesttype')";
        try{    
          $dbconn->exec($sql2); 
        } catch(PDOException $e) {
          echo $sql2 . "<br>" . $e->getMessage();
        }
    }

     /*$fname = validate($_POST['firstName']);
     $lname = validate($_POST['lastName']);
     
     $age = validate($_POST['age']);*/
     
    
     $interest2 = validate($_POST['interest2']);
     $interest3 = validate($_POST['interest3']);
     $interest4 = validate($_POST['interest4']);
     $interest5 = validate($_POST['interest5']);
     $uname = $_SESSION['uname'];
    // $hash = hash("sha256", $pass);
    // $pass = "";
     
      
     
       
    
        if(!empty($interest)){
            printf("here");
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
          $dbconn->exec($sql3); 
          printf("New profile added successfully");
        } catch(PDOException $e) {
          echo $sql3 . "<br>" . $e->getMessage();
        }
        session_destroy();
        //header("Location: login.php");
    }
    include("add_interests.php");
  }
  

  ?>