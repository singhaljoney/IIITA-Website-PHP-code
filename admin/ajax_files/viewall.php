<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
        <br><br>
		<div class="page-display-name"><h1>All Records</h1></div>
		
<?php

$alm_records = array(15,"Roll No.","Name","Username","Password","Batch","Branch","Course","Date of Joining","Date of leaving","Address","Contact","Email","Pic","website","About");
$anc_records = array(11,"Name","Details","Date","Time","Venue","Guests","Category","Brief Desc.","Full Description","Downloads","Pic");
$brc_records = array(6,"Code","Name","HOD","Brief desc.","Full Desc.","Remarks");
$course_records = array(9,"Code","Name","years","details","Brief Desc.","Full Desc.","URL","Head","Remarks");
$data_records = array(9,"Category","Name","Coverpic","Main Pic1","Main Pic2","Brief Desc.","Full Desc.","URL","remarks");
$emp_records = array(12,"Designation","Name","Username","Password","Daate of Joining","Salary","Branch","Address","Contact","Email ID","Pic","Website");
$evt_records = array(10,"Name","Date","Venue","Start","End","Guests","Brief Desc.","Full Desc.","Pic","Remarks");
$fac_records = array(12,"Batch","Name","Username","Password","Date of Joining","Branch","Designation","Contact","Address","Email ID","Pic","Website");
$faccourse_records = array(4,"Faculty ID","Sub ID1","Sub ID2","Sub ID3");
$news_records = array(10,"Name","Details","Time","Date","Venue","Guests","Brief Desc.","Full Desc.","Pic","Remarks");
$projects_records = array(16,"Name","About","Category","Platform","Tools","Techniques","Faulty","T Member1","T Member2","T Member3","T Member4","T Member5","Dated","URL","Pic","Remarks");
$stu_records = array(14,"Roll No.","Batch","Name","Username","Password","Date of Joining","Semester","Branch","Address","Hostel","Contact","Email","Pic","website","About");
$stucourse_records = array(9,"student ID","Course ID","Branch ID","Sub_ID1","Sub_ID2","Sub_ID3","Sub_ID4","Sub_ID5","Sub_ID6");
$subjects_records = array(8,"Code","Name","Branch ID","Course ID","Credits","Brief Desc.","Full Desc.","Remarks");
$telephone_records = array(9,"Name","Branch","Desc.","Residence1","Office1","Mobile1","Residence2","Office2","Mobile2");


?>
		<?php
				
				if(isset($_GET["key"]))
				{
					$table = $_GET["key"];
					switch ($table)
					{
						case "alumni":
							$fetch = $alm_records;
							break;
						case "announcements":
							$fetch = $anc_records;
							break;
						case "branch":
							$fetch = $brc_records;
							break;
						case "course":
							$fetch = $course_records;
							break;
						case "data":
							$fetch = $data_records;
							break;
						case "employees":
							$fetch = $emp_records;
							break;
						case "faculty":
							$fetch = $fac_records;
							break;
						case "faculty_course":
							$fetch = $faccourse_records;
							break;
						case "events":
							$fetch = $evt_records;
							break;
						case "news":
							$fetch = $news_records;
							break;
						case "projects":
							$fetch = $projects_records;
							break;
						case "students":
							$fetch = $stu_records;
							break;
						case "student_course":
							$fetch = $stucourse_records;
							break;
						case "subjects":
							$fetch = $subjects_records;
							break;
						case "telephone":
							$fetch = $telephone_records;
							break;
						default:
							$fetch = array(4,"Name","About","Date","Time");
							break;
					}
					$qry = "select * from ".$table;
					$res = mysql_query($qry) or die(mysql_error());
					$cnt = $fetch[0];					
					echo "<table style='max-width:800px;'>
					";
					while($row = mysql_fetch_array($res))
					{
						for($a = 1;$a<=$cnt;$a++)
						echo "<tr><td style='width:100px;'><b>$fetch[$a]:</b></td><td>$row[$a]</td></tr>";
						
						echo "<tr><td><input type='button' onClick = updatedata($row[0],$table); value='Update Entry'/></td><td><a href='ajax_files/deletedata.php?key=$row[0]&cat=$table'>Delete Entry </a></td></tr>";
						echo "<tr><td colspan=2><hr/><hr/></td></tr>"; 
					}
					echo "</table>";
				}
				
				
				
			
		?>
