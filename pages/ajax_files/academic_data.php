<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		
		<?php
				
				if(isset($_GET["keywords"]))
				{
					$key = $_GET["keywords"];
					$qry = "select * from data where data_cat = '$key'";
					$res = mysql_query($qry) or die(mysql_error());
					$row = mysql_fetch_array($res);
					echo "<div class='page-display-name'><h1>".$row["data_name"]."</h1></div>";
					echo $row["data_brief"];
				}
				
				
				
			
		?>
