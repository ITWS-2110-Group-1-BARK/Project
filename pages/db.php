<?php 
session_start(); 
// create or continue

$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "briankeith4";
$dbname = "project";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$conn) {
    echo "Connection failed!";
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=User Name is required");
        exit();
    } else if(empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // print_r($row);
            if ($row['username'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['is_admin'] = $row['is_admin'];
                header("Location: admin.php");
                exit();
            } else {
                header("Location: login.php?error=Incorrect");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorrect");
            exit();
    }
  }
} else {
  header("Location: index.php?error=not here");
  exit();
}
?>
