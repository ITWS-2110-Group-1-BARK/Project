<?php
 
 session_start();
 include "Connection.php";
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['username'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    echo $id;
    printf("\n");
    echo $fname;
    printf("\n");
    echo $lname;
    printf("\n");
    echo $email;
    printf("\n");
    $select= "select * from users where username='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['username'];
    echo $res;
    if($res === $id)
    {
       echo $email;
       $update = "update users set fname='$fname',lname='$lname',email='$email' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:profile.php');
       }
       else
       {
           /*sorry your profile is not update*/
           echo "sorry your profile is not update";
       }
    }
    else
    {
        /*sorry your id is not match*/
        echo "sorry your id does not match";
    }
 }
?>