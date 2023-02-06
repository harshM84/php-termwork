<?php
		$server="localhost:3306";
		$username="root";
		$password="";
		$dbname="teramwork";

		$conn = new mysqli($server,$username,$password,$dbname);
		if($conn->connect_error)
		{
			die("Error");
		}
?>
