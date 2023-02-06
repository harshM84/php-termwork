<?php
		include("config.php");
		$username=$_POST['username'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$rpassword=$_POST['repass'];

		$sql="insert into registertbl values('$username','$gender','$phone','$email','$password','$rpassword')";

		if ($conn->query($sql) === TRUE)
		{
			header("location:registration form.html");
		}
		else
		{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
?>