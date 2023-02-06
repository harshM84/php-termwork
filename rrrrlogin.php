<?php
     session_start();
    include("config.php");
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    $sql = "select * from user where user_id = '$user_id' and password = '$password';";
    $result = $conn->query($sql);
    $userid;
    $pwd;

    if($result->num_rows > 0)
    {
        while($rows = $result->fetch_assoc())
        {
             $userid = $rows['user_id'];
             $pwd = $rows['password']; 
        }
    }
    if($user_id==$userid && $password==$pwd)
    {
        $_SESSION['user_id'] = $userid;
        header("location:dashboard.html");
    }
    else
    {
        header("location:login.html");
    }

?>