<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Results</h1></div>
		<?php
				
				if(isset($_GET["key"]))
				{
					$key = $_GET["key"];
					$batch = $_GET["cat"];
					
					if($batch == "all")
					{
							$qry1 = "select * from alumni where alm_name LIKE '%$key%'";
					}
					else $qry1 = "select * from alumni where alm_name LIKE '%$key%' and alm_batch = '$batch'";
						$res1 = mysql_query($qry1) or die(mysql_error());
						
						
						echo "<center><h2>Students</h2>";
						echo "<div style='width:90%;'><table>
						<tr>
						<td><b>Name</b></td><td>
						<b>Roll No.</b></td><td><b>Batch</b></td><td><b>Branch</b></td>
						<td><b>Course</b></td><td><b>Address</b></td>
						<td><b>Contact</b></td><td><b>Website</b></td>
						<td><b>Email-Id</b></td><td><b>About</b></td><td><b></b></td>
						</tr>
						";
						while($row1 =  mysql_fetch_array($res1))
						{
							echo 
							"
							<tr>
						<td>".$row1["alm_name"]."</td><td>
						".$row1["alm_rollno"]."</td>
						<td>".$row1["alm_batch"]."</td>
						<td>".$row1["alm_branch"]."</td>
						<td>".$row1["alm_course"]."</td>
						<td>".$row1["alm_address"]."</td>
						<td>".$row1["alm_contact"]."</td>
						<td><a href='http://www.".$row1["alm_website"]."'>".$row1["alm_website"]."</a></td>
						<td>".$row1["alm_emailid"]."</td>
						<td>".$row1["alm_about"]."</td>
						<td><img width='100px' height='100px' src = ../uploads/pics/".$row1["alm_pic"]."></td></tr>					
						";
						}
						
						echo "<table></div>";
						
					
				
				}
				
				
				
			
		?>
