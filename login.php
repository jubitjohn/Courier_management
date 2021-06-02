<?php
session_start();
include "db_connect.php";

if (isset($_POST['email']) && isset($_POST['pass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email=validate($_POST['email']);
    $pass=validate($_POST['pass']);
    if(empty($email)){
        header("Location: logint.php?error=Username is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: logint.php?error=Password is required");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username='$email' AND pass='$pass'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)===1){
            $row=mysqli_fetch_assoc($result);
            if($row['username']===$email && $row['pass']===$pass){
                $SESSION['username']=$row['username'];
                $SESSION['id']=$row['id'];
                header("Location: sidemenu.php");
                exit();
            }
            else{
                header("Location: logint.php?error=Incorrect username or password");
                exit();
            }
        }
        else{
            header("Location: logint.php?error=Incorrect username or password");
            exit();
        }
    }
}
else{
    header("Location: logint.php?error");
    exit();
}