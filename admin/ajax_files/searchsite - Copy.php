<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Results</h1></div>
		<?php
				
				if(isset($_GET["key"]))
				{
					$key = $_GET["key"];
					$table = $_GET["cat"];
					if($table == "students")
					{
						$qry1 = "select * from students where stu_name LIKE '%$key%'";
						$res1 = mysql_query($qry1) or die(mysql_error());
						
						
						echo "<center><h2>Students</h2>";
						echo "<table style='border:1px solid black;'>
						<tr>
						<td><b>Name</b></td><td>
						<b>Roll No.</b></td><td><b>Contact</b></td><td><b>Pic</b></td></tr>
						";
						while($row1 =  mysql_fetch_array($res1))
						{
							echo 
							"
							<tr>
						<td>".$row1["stu_name"]."</td><td>
						".$row1["stu_rollno"]."</td>
						<td>".$row1["stu_contact"]."</td>
						<td><img width='100px' height='100px' src = ../uploads/pics/".$row1["stu_pic"]."></td></tr>					
						";
						}
						
					}
				
				}
				
				
				
			
		?>
