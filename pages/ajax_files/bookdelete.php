<?php
	include('../php_files/conn.php');
	if(isset($_SESSION["logged"]))
	{
		if($_SESSION["logged"]=="user")
			header("location:../../main.php");
		else if($_SESSION["logged"]=="admin")
			{
				if(isset($_GET["bid"]))
					{
						$bid = $_GET["bid"];
						$qry = "delete from books where bid = $bid";
						$res = mysql_query($qry) or die(mysql_error());
						$qry = "delete from schedule where bid = $bid";
						$res = mysql_query($qry) or die(mysql_error()) ;
						$qry = "delete from reviews where bid = $bid";
						$res = mysql_query($qry) or die(mysql_error());
					}			
			}
	}
	else
	{
	header("location:../index.php");
	
	}
?>
	
	
	