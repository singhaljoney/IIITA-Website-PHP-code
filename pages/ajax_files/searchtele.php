<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Results</h1></div>
		<?php
				
				if(isset($_GET["key"]))
				{
					$key = $_GET["key"];
					
					$qry1 = "select * from telephone where tele_name LIKE '%$key%'
					or tele_branch LIKE '%$key%' or tele_office1 LIKE '%$key%'
					or tele_mobile1 LIKE '%$key%' or tele_residence1 LIKE '%$key%'
					";
					$res1 = mysql_query($qry1) or die(mysql_error());
					echo "<center><table><tr>
					<td><b>Name</b></td>
					<td><b>Branch</b></td>
					<td><b>Description</b></td>
					<td><b>Office No.</b></td>
					<td><b>Mobile No.</b></td>
					<td><b>Residence No.</b></td>
					</tr>
					";
					while($row = mysql_fetch_array($res1))
					{
						echo "<tr>
					<td>".$row["tele_name"]."</td>
					<td>".$row["tele_branch"]."</td>
					<td>".$row["tele_desc"]."</td>
					<td>".$row["tele_office1"]."</td>
					<td>".$row["tele_mobile1"]."</td>
					<td>".$row["tele_residence1"]."</td>
					</tr>";
					}
					echo "</table></center>";
				}
				
				
				
			
		?>
