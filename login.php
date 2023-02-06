<?php
	session_start();
	include("config.php");
	$username=$_POST['user'];
	$password=$_POST['pass'];

	$sql = "select * from registertbl where usernm='$username' and pass1='$password'";

	$result = $conn->query($sql);
	$userid;
	$pwd;


	 if($result->num_rows > 0)
    {
        while($rows = $result->fetch_assoc())
        {
             $userid = $rows['usernm'];
             $pwd = $rows['pass1']; 
        }
    }
    if($username==$userid && $password==$pwd)
    {
        $_SESSION['user_id'] = $userid;
        header("location:complaint.html");
    }
    else
    {
        header("location:login page.html");
    }

?>