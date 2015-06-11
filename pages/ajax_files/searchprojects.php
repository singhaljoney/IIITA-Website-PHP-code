<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Results</h1></div>
		<?php
				
				if(isset($_GET["key"]))
				{
					$key = $_GET["key"];
					$cat = $_GET["cat"];
					$qry1 = "select * from projects where prj_name LIKE '%$key%' and prj_category = '$cat'";
					$res1 = mysql_query($qry1) or die(mysql_error());
					echo "<center><h2>Projects</h2>";
						echo "<table'>
						<tr>
						<td><b>Name</b></td>
						<td><b>About</b></td>
						<td><b>Platform</b></td>
						<td><b>Tools</b></td>
						<td><b>Techniques</b></td>
						<td><b>Faculty</b></td>
						<td><b>Dated</b></td>
						<td><b>Pic</b></td>
						
						</tr>
						";
						while($row1 =  mysql_fetch_array($res1))
						{
							echo 
							"
						<tr>
						<td><b>".$row1["prj_name"]."</b></td>
						<td><b>".$row1["prj_about"]."</b></td>
						<td><b>".$row1["prj_platform"]."</b></td>
						<td><b>".$row1["prj_tools"]."</b></td>
						<td><b>".$row1["prj_techniques"]."</b></td>
						<td><b>".$row1["prj_faculty"]."</b></td>
						<td><b>".$row1["prj_dated"]."</b></td>
						<td><img width='100px' height='100px' src = ../uploads/pics/".$row1["stu_pic"]."></td></tr>					
						";
						}
					
				echo "</table>";
				}
				
				
				
			
		?>
