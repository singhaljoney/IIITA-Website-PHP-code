<?php
	include('conn.php');
	if(isset($_SESSION["logged"]))
	{
		if($_SESSION["logged"]="user")
			header("location:../../main.php");
		else if($_SESSION["logged"]="admin")
			header("location:../admin.php");
	}
	else
	{
		if(isset($_POST["name"]) && isset($_POST["pass"]))
		{
			$name = $_POST["name"];
			$pass = $_POST["pass"];
			if($name && $pass)
			{
				if($name=="ADMIN" && $pass=="MYSHELF")
					{
						$_SESSION["logged"] = "admin";
						$_SESSION["uid"] = "-1";
						header("location:../admin.php");
					}
				else
					{
						echo "Wrong ID and Password<br>";
					}
			}
			else
			{
				echo "Fill Both the Entries<br>";
			}
	
		}
		else
		{
			echo "Don't Try to be OverSmart<br>";
		}
	}
?>