<?php
		include("config.php");
		$comp=$_POST['com'];
		$date=$_POST['date'];

		$sql="insert into comp values(0,'$comp','$date')";

		if($conn->query($sql) === TRUE )
		{
			header("location:complaint.html");
		}
		else
		{
			echo "Error:" .$sql . "<br>" . $conn->error;
		}
?>